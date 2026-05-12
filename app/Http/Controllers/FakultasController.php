<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Fakultas::all();

        return view('fakultas.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_fakultas' => 'required|string|max:100',
            'kode_fakultas' => 'required|string|max:5',
            'dekan_fakultas' => 'required|string|max:100',
        ]);

        Fakultas::create($request->all());

        return redirect()->route('fakultas.index')->with('success', 'Data fakultas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakulta)
    {
        $fakultas = $fakulta; // keep variable for view
        return view('fakultas.edit', compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakulta)
    {
        $request->validate([
            'nama_fakultas' => 'required|string|unique:fakultas|max:100',
            'kode_fakultas' => 'required|string|max:5',
            'dekan_fakultas' => 'required|string|max:100',
        ]);

        $fakulta->update($request->all());

        return redirect()->route('fakultas.index')->with('success', 'Data fakultas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakulta)
    {
        $fakulta->delete();

        return redirect()->route('fakultas.index')->with('success', 'Data fakultas berhasil dihapus.');
    }
}
