<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EducationService;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EducationRequest;
use Exception;

class EducationController extends Controller
{
    protected $educationyService;

    public function __construct(EducationService $educationyService)
    {
        $this->educationyService = $educationyService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->educationyService->FindList();
        return view('education.admin.list', ['lists' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request)
    {
        $validatedData = $request->validated();
        $this->educationyService->create($validatedData);
        return Redirect::route('education.create')->with('success', 'Education Created Successfully !');
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
            $data = $this->educationyService->findById($encryptedId);
            $page = $request->query('page', 1);
            return view('education.admin.edit', compact('data', 'page'));
        } catch (Exception $e) {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationRequest $request)
    {
        try {
            $data = $request->validated();
            $this->educationyService->Update($request->id, $data);
            $page = $request->page  ??  1;
            return Redirect::route('education.index', ['page' => $page])
                ->with('success', 'Education updated Successfully')
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
