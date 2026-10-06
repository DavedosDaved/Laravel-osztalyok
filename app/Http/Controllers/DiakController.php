<?php

namespace App\Http\Controllers;

use App\Models\Diak;
use App\Models\Osztaly;
use Illuminate\Http\Request;

class DiakController extends Controller
{
    public function index()
    {
        $diakok = Diak::with('osztaly')->get();

        return view('diakok.index', compact('diakok'));
    }

    public function create()
    {
        $osztalyok = Osztaly::all();

        return view('diakok.create', compact('osztalyok'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'osztaly_id' => ['required', 'exists:osztalyok,id'],
        ]);

        Diak::create($validated);

        return redirect()
            ->route('diakok.index')
            ->with('status', 'Diák létrehozva!');
    }

    public function show(Diak $diak)
    {
        return view('diakok.show', compact('diak'));
    }

    public function edit(Diak $diak)
    {
        $osztalyok = Osztaly::all();

        return view('diakok.edit', compact('diak', 'osztalyok'));
    }

    public function update(Request $request, Diak $diak)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'osztaly_id' => ['required', 'exists:osztalyok,id'],
        ]);

        $diak->update($validated);

        return redirect()
            ->route('diakok.index')
            ->with('status', 'Diák frissítve!');
    }

    public function destroy(Diak $diak)
    {
        $diak->delete();

        return redirect()
            ->route('diakok.index')
            ->with('status', 'Diák törölve!');
    }
}