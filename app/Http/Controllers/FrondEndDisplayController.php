<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WsproileService;
use App\Services\SkillCategoryService;
use App\Services\ExprenceService;
use App\Services\EducationService;

class FrondEndDisplayController extends Controller
{
    protected $wsProfileService;
    protected $skillCategoryService;
    protected $exprenceService;
    protected $educationService;

    public function __construct(WsproileService $wsProfileService, SkillCategoryService $skillCategoryService, ExprenceService $exprenceService, EducationService $educationService)
    {
        $this->wsProfileService = $wsProfileService;
        $this->skillCategoryService = $skillCategoryService;
        $this->exprenceService = $exprenceService;
        $this->educationService = $educationService;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = $this->wsProfileService->FindByEmail('surajdas11120@gmail.com');
        $skills = $this->skillCategoryService->getCategoryAndSkill();
        $exprences = $this->exprenceService->FindList();
        $educations = $this->educationService->FindList();
// dd( $educations->toArray());
        return view('welcome', [
            'profiles' => $profile,
            'skills' => $skills,
            'exprences' => $exprences,
            'educations' => $educations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pageView $pageView)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pageView $pageView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pageView $pageView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pageView $pageView)
    {
        //
    }
}
