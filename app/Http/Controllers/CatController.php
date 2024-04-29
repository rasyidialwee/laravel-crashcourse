<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cats.index', [
            'cats' => Cat::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $cat = Cat::create($request->all());

        $cat = new Cat();
        $cat->name = $request->name;
        $cat->breed = $request->breed;
        $cat->age = $request->age;
        $cat->color = $request->color;
        $cat->image_url = fake()->imageUrl();
        $cat->save();



        return redirect()->route('cats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        return view('cats.show', [
            'cat' => $cat,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $cat)
    {
        return view('cats.edit', [
            'cat' => $cat,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        // $cat->update($request->all());
        $cat->name = $request->name;
        $cat->breed = $request->breed;
        $cat->age = $request->age;
        $cat->color = $request->color;
        $cat->save();

        return redirect()->route('cats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        $cat->delete();
        return back();
    }
}
