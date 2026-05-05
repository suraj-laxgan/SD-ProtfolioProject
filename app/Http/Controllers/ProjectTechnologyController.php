<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\projectTechnologyRequest;
use App\Services\ProjectTechnologyService;

use Exception;

class ProjectTechnologyController extends Controller
{
    protected $projectTechnologyService;

    public function __construct(ProjectTechnologyService $projectTechnologyService)
    {
        $this->projectTechnologyService = $projectTechnologyService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = $this->projectTechnologyService->FindList();
        return view('project_technology.admin.list', ['lists' => $skills]);
    }
 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project_technology.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(projectTechnologyRequest $request)
    {
        $validatedData = $request->validated();
        $this->projectTechnologyService->create($validatedData);
        return Redirect::route('project_technology.create')->with('success', 'Project Technology Created Successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $encryptedId)
    {
        try {
            $data = $this->projectTechnologyService->findById($encryptedId);
            $page = $request->query('page', 1);
            return view('project_technology.admin.edit', compact('data' , 'page'));
        } catch (Exception $e) {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(projectTechnologyRequest $request)
    {
        try {
            $data = $request->validated();
            $this->projectTechnologyService->Update($request->id, $data);
            $page = $request->page  ??  1;
            return Redirect::route('project_technology.index', ['page' => $page]) 
                ->with('success', 'Project Technology updated Successfully')
                ->with('updated_id', $request->id);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
