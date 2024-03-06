<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.stores.index', [
            'stores' => Store::all()
        ]);
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
    public function store(Request $request)
    {
        //
        $formData = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'tag' => 'nullable',
            'location' => 'required',
        ]);

        $store = new Store();
        $store->name = $formData['name'];
        $store->tag = $formData['tag'];
        $store->location = $formData['location'];
        $store->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;

            $file->move(public_path('uploads'), $fileName);

            $store->image = 'uploads/' . $fileName;
        }

        $store->save();

        return redirect()->route('home')->with('success', "Store created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        //
        return view('stores.show', [
            'store' => Store::findOrFail($store->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
