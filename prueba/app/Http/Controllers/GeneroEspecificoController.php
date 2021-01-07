<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GeneroEspecificoController extends Controller
{
    public function index()
    {
        return Genre::all();
    }
    public function show(Genre $genre)
    {
        return $genre;
    }
    public function store(Request $request)
    {
        $genre = Genre::create($request->all());
        return response()->json($genre, 201);
    }

}
