<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    public function index()
    {
        $data['pokedex'] = Pokedex::all();
        return view('pokedexs.index', $data);
    }

    public function create()
    {
        return view('pokedexs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'species' => 'required|string',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'hp' => 'required|numeric',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric',
            'image_url' => 'required|string',
        ]);

        Pokedex::create($request->all());
        return redirect('/pokedex');
    }

    public function edit($id)
    {
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedex'] = Pokedex::all();
        return view('pokedexs.update', $data);
    }

    public function update(Request $request, $id)
    {
        $p = Pokedex::find($id);
        $p->update($request->all());
        return redirect('/pokedex');
    }

    public function destroy($id)
    {
        $p = Pokedex::find($id);
        $p->delete();
        return redirect('/pokedex');
    }
}
