<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Livewire\Forms\CreateGroup;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public CreateGroup $form;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.groups.index', [
            'groups' => Group::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.groups.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $groupModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $groupModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $groupModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $groupModel)
    {
        //
    }
}
