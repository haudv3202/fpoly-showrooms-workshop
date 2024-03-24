<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("directorys.list");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("directorys.create");
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
    public function show(Level $directory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Level $directory)
    {
        return view("directorys.edit");
    }
    public function details(Level $directory)
    {
        return view("directorys.details");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Level $directory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Level $directory)
    {
        //
    }
}
