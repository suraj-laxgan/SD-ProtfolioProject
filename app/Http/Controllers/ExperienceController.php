<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExprenceService;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ExprienceRequest;
use Exception;

class ExperienceController extends Controller
{
    protected $experienceService;

    public function __construct(ExprenceService $experienceService)
    {
        $this->experienceService = $experienceService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = $this->experienceService->FindList();
        return view('experience.admin.list', ['lists' => $experience]);
    }
 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experience.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExprienceRequest $request)
    {
        $validatedData = $request->validated();
        $this->experienceService->create($validatedData);
        return Redirect::route('experience.create')->with('success', 'Experience Created Successfully !');
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
            $experience = $this->experienceService->findById($encryptedId);
            $page = $request->query('page', 1);
            return view('experience.admin.edit', compact('experience', 'page'));
        } catch (Exception $e) {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExprienceRequest $request)
    {
        try {
            $data = $request->validated();
            $this->experienceService->Update($request->id, $data);
            $page = $request->page  ??  1;
            return Redirect::route('experience.index', ['page' => $page]) 
                ->with('success', 'Experience updated Successfully')
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
