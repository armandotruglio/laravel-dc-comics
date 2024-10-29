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


        $comic = new Comics();
        $comic->title = $formData["title"];
        $comic->description = $formData["description"];
        $comic->thumb = $formData["thumb"];
        $comic->price = $formData["price"];
        $comic->series = $formData["series"];
        $comic->sale_date = $formData["sale_date"];
        $comic->type = $formData["type"];
        $comic->artists = $formData["artists"];
        $comic->writers = $formData["writers"];
        $comic->save();

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

}