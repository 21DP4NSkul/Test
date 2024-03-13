<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurss;

class KurssController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'banner' => 'required|url',
            'participants' => 'required|integer|min:0'
        ]);

        $kurss = Kurss::create($request->all());

        return response()->json(['message' => 'Kurss izveidots veiksmīgi!', 'data' => $kurss], 201);

    }

    public function index()
    {
        $kursi = Kurss::all();
        
        return response()->json(['data' => $kursi], 200);
    }
}