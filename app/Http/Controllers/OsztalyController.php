<?php

namespace App\Http\Controllers;

use App\Models\Osztaly;
use Illuminate\Http\Request;

class OsztalyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counties = Osztaly::get();

        return view('osztalyok.index', compact('osztalyok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('osztalyok.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $osztaly = Osztaly::create($validated);
        $osztalyok = Osztaly::all();

        return redirect()
            ->route('osztalyok.index')
            ->with('success', 'Osztály létrehozva!');
    }

    /**
     * Display the specified resource.
     */
    public function show(County $county)
    {
        return view('osztalyok.show', compact('osztaly'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(County $county)
    {
        return view('osztalyok.edit', compact('osztaly'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Osztaly $osztaly)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $osztaly->update($validated);

        $osztalyok = Osztaly::all();

        return redirect()
            ->route('osztalyok.index')
            ->with('success', 'Osztály frissítve!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Osztaly $osztaly)
    {
        $osztaly->delete();

        return redirect()
            ->route('osztalyok.index')
            ->with('status', 'Osztály törölve!');
    }
}
