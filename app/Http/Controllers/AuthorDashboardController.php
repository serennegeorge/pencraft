<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $author = Auth::user();
        $data = Auth::user();

        $writing_data = $author->writings;

        return view('dashboard.author-dashboard', compact('author', 'writing_data', 'data'));
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Auth::user();

        return view('dashboard.author-edit-profile', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, string $id)
    {
        $validated = $request->validated();
        $author = User::find($id);
        $author->name = $validated['name'];
        $author->bio = $validated['bio'];

        if ($request->has('image')) {
            $author->profile->$this->imageUpload($validated['image']);
        }
        $author->save();

        return redirect()->route('dashboard.authors.index')->with('message', 'Profile Successfully Updated');
    }

    public function imageUpload($file)
    {
        $name = $file->hashName();
        Storage::putFileAs('public/images/profiles', $file, $name);

        return 'images/profiles/' . $name;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
