<?php

namespace App\Http\Controllers;

use App\Services\skillService;
use App\Services\SkillCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SkillCreateRequest;
use Exception;

class SkillController extends Controller
{

    protected $skillService;
    protected $skillCategoryService;

    public function __construct(skillService $skillService, SkillCategoryService $skillCategoryService)
    {
        $this->skillService = $skillService;
        $this->skillCategoryService = $skillCategoryService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = $this->skillService->FindList();
        return view('skill.admin.skill_list', ['lists' => $skills]);
    }
 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->skillCategoryService->findCategory();
        return view('skill.admin.skill_create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillCreateRequest $request)
    {
        $validatedData = $request->validated();
        $this->skillService->create($validatedData);
        return Redirect::route('skill.create')->with('success', 'Skill Created Successfully !');
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
            $skills = $this->skillService->findById($encryptedId);
            $categories = $this->skillCategoryService->findCategory();
            $page = $request->query('page', 1);
            return view('skill.admin.skill_edit', compact('skills' , 'categories', 'page'));
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
            $this->skillService->Update($request->id, $data);
            $page = $request->page  ??  1;
            return Redirect::route('skill.index', ['page' => $page]) 
                ->with('success', 'Skill updated Successfully')
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
