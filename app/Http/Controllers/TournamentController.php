<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function create()
    {
        return view('tournaments.create');
    }

    public function store(Request $request)
    {
        try {
            $request->merge([
                'is_live' => $request->has('is_live')
            ]);

            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'game_type' => 'required|string|in:CS:GO,DOTA2,Valorant',
                'stage' => 'required|string|in:Contenders,Main stage,Playoffs,Final',
                'prize_pool' => 'required|numeric|min:0',
                'is_live' => 'boolean',
                'description' => 'required|string',
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'url' => 'nullable|url',
            ]);


            Tournament::create($validated);
//            dd($validated);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->back()->with('success', 'Турнір успішно додано!');
    }
}
