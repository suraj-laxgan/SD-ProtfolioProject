<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\projectCategoryRequest;
use App\Services\ProjectCategoryService;
use Exception;

class ProjectCategoryController extends Controller
{
    protected $projectCategoryService;

    public function __construct(ProjectCategoryService $projectCategoryService)
    {
        $this->projectCategoryService = $projectCategoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = $this->projectCategoryService->FindList();
        return view('project_category.admin.list', ['lists' => $skills]);
    }
 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project_category.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(projectCategoryRequest $request)
    {
        $validatedData = $request->validated();
        $this->projectCategoryService->create($validatedData);
        return Redirect::route('project_category.create')->with('success', 'Project Category Created Successfully !');
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
            $data = $this->projectCategoryService->findById($encryptedId);
            $page = $request->query('page', 1);
            return view('project_category.admin.edit', compact('data' , 'page'));
        } catch (Exception $e) {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(projectCategoryRequest $request)
    {
        try {
            $data = $request->validated();
            $this->projectCategoryService->Update($request->id, $data);
            $page = $request->page  ??  1;
            return Redirect::route('project_category.index', ['page' => $page]) 
                ->with('success', 'Project Category updated Successfully')
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
