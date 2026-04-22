<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SkillCreateRequest;
use App\Services\ProjectImageService;

use Exception;

class ProjectImageController extends Controller
{
    protected $projectImageService;

    public function __construct(ProjectImageService $projectImageService)
    {
        $this->projectImageService = $projectImageService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = $this->projectImageService->FindList();
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
    public function store(SkillCreateRequest $request)
    {
        $validatedData = $request->validated();
        $this->projectImageService->create($validatedData);
        return Redirect::route('project_technology.create')->with('success', 'Project Image Created Successfully !');
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
            $skills = $this->projectImageService->findById($encryptedId);
            $page = $request->query('page', 1);
            return view('project_technology.admin.edit', compact('skills' , 'page'));
        } catch (Exception $e) {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillCreateRequest $request)
    {
        try {
            $data = $request->validated();
            $this->projectImageService->Update($request->id, $data);
            $page = $request->page  ??  1;
            return Redirect::route('project_technology.index', ['page' => $page]) 
                ->with('success', 'Project Image updated Successfully')
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
