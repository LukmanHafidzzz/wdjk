<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Shoe;
use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shoe = Shoe::all();
        return view('layouts.home.pages.homepage')->with('shoe', $shoe);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $shoe = Shoe::where('tipe', 'like', '%' . $keyword . '%')->get();

        return view('layouts.home.pages.homepage', compact('shoe'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Shoe $shoe)
    {
        return view('layouts.home.pages.homepage-detail', ['shoe' => $shoe]);
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
