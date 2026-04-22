<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SkillCreateRequest;
use App\Services\ContactService;

use Exception;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = $this->contactService->FindList();
        return view('contact.admin.list', ['lists' => $skills]);
    }
 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillCreateRequest $request)
    {
        $validatedData = $request->validated();
        $this->contactService->create($validatedData);
        return Redirect::route('contact.create')->with('success', 'Message Send Successfully !');
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
            $data = $this->contactService->findById($encryptedId);
            $page = $request->query('page', 1);
            return view('contact.admin.edit', compact('data' , 'page'));
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
            $this->contactService->Update($request->id, $data);
            $page = $request->page  ??  1;
            return Redirect::route('contact.index', ['page' => $page]) 
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
