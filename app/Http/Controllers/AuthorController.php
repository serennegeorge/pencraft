<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Writing;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     * View list of all authors.
     */
    public function index()
    {
        $author_data = User::all();

        return view('pages.default.authors-list', compact('author_data'));

        return view('pages.testing.authors-list', compact('author_data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::find($id);

        $writing_data = $data->writings;

        return view('pages.default.author-profile', compact('data', 'writing_data'));
    }

    /**
     * Display the specified resource.
     */
    public function showWriting(string $user_id, string $writing_id)
    {
        // Find a user by id
        $author = User::find($user_id);
        // Find an article by id
        $writing = Writing::find($writing_id);

        return view('pages.testing.author-writing', compact('author', 'writing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
