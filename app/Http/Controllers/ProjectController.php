<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SkillCreateRequest;
use App\Services\ProjectService;

use Exception;

class ProjectController extends Controller
{
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = $this->projectService->FindList();
        return view('project.admin.list', ['lists' => $skills]);
    }
 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillCreateRequest $request)
    {
        $validatedData = $request->validated();
        $this->projectService->create($validatedData);
        return Redirect::route('project.create')->with('success', 'Project Created Successfully !');
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
            $skills = $this->projectService->findById($encryptedId);
            $page = $request->query('page', 1);
            return view('project.admin.edit', compact('skills' , 'page'));
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
            $this->projectService->Update($request->id, $data);
            $page = $request->page  ??  1;
            return Redirect::route('project.index', ['page' => $page]) 
                ->with('success', 'Project updated Successfully')
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
