<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comics::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();


        $comic = Comics::create($formData);

        return redirect()->route("comics.show", [ "id" => $comic->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comics::findOrFail($id);
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comics::findOrFail($id);
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formData = $request->all();

        $comic = Comics::findOrFail($id);

        $comic->update($formData);

        return redirect()->route("comics.show", [ "id" => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comics::findOrFail($id);
        $comic->delete();

        return redirect()->route("comics.index");
    }

}