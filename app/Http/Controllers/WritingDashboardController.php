<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostWriting;
use App\Http\Requests\UpdateWritingRequest;
use App\Models\Writing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WritingDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.author-add-writing');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostWriting $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        $writing = new Writing();
        $writing->user_id = Auth::id();
        $writing->type = $validated['type'];
        $writing->title = $validated['title'];
        $writing->description = $validated['description'];
        $writing->read_time = $validated['read_time'];
        $writing->read_unit = $validated['read_unit'];
        $writing->image = $this->imageUpload($validated['image']);
        $writing->save();

        return redirect()->route('dashboard.authors.index')->with('message', 'Writing successfully added');
    }

    public function imageUpload($file)
    {
        $name = $file->hashName();
        Storage::putFileAs('public/images/media', $file, $name);

        return 'images/media/'.$name;
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
        $writing = Writing::find($id);

        return view('dashboard.author-edit-writing', compact('author', 'writing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWritingRequest $request, string $id)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        $writing = Writing::find($id);
        $writing->user_id = Auth::id();
        $writing->type = $validated['type'];
        $writing->title = $validated['title'];
        $writing->description = $validated['description'];
        $writing->read_time = $validated['read_time'];
        $writing->read_unit = $validated['read_unit'];

        if ($request->has('image')) {
            $writing->image = $this->imageUpload($validated['image']);
        }

        $writing->save();

        return redirect()->route('dashboard.authors.index')->with('message', 'Writing successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Writing::destroy($id);

        return redirect()->route('dashboard.authors.index')->with('message', 'Writing successfully removed');
    }
}