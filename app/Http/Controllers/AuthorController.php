<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\AuthorCollection;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([new AuthorCollection(Author::all()), Response::HTTP_OK]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return response()->json([new AuthorResource($author), Response::HTTP_OK]);
    }

}
