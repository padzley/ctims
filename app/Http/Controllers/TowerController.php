<?php

namespace App\Http\Controllers;

use App\Models\Tower;
use Illuminate\Http\Request;

class TowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $towers = Tower::latest()->get();
        return view('tower.index', compact('towers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tower.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tower::create($request->all());
        return redirect()->route('towers.index');
    }
}
