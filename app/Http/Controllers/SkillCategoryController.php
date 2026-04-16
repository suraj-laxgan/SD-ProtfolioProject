<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SkillCategoryService;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SkillCategoryCreateRequest;
use Exception;

class SkillCategoryController extends Controller
{

    protected $skillCategoryService;

    public function __construct(SkillCategoryService $skillCategoryService)
    {
        $this->skillCategoryService = $skillCategoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skillCategory = $this->skillCategoryService->FindList();
        return view('skill.admin.list', ['list' => $skillCategory]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skill.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillCategoryCreateRequest $request)
    {
        $validatedData = $request->validated();
        $this->skillCategoryService->create($validatedData);
        return Redirect::route('skill_category.create')->with('success', 'Skill Category Created Successfully !');
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
            $skillCategory = $this->skillCategoryService->findById($encryptedId);
            $page = $request->query('page', 1);
            return view('skill.admin.edit', compact('skillCategory' , 'page'));
        } catch (Exception $e) {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillCategoryCreateRequest $request)
    {
        try {
            $data = $request->validated();
            $profile = $this->skillCategoryService->Update($request->id, $data);
            $page = $request->page  ??  1;
            return Redirect::route('skill_category.index', ['page' => $page]) 
                ->with('success', 'Skill Category updated Successfully')
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
