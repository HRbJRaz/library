<?php

namespace App\Http\Controllers;

use App\Models\Directive;
use App\Http\Requests\StoreDirectiveRequest;
use App\Http\Requests\UpdateDirectiveRequest;

class DirectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directives = Directive::where('status', '!=', 'draft')->get();
        return view('directives.index')->with('directives', $directives);
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
    public function store(StoreDirectiveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Directive $directive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Directive $directive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDirectiveRequest $request, Directive $directive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Directive $directive)
    {
        //
    }
}
