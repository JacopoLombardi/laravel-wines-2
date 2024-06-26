<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aroma;

class AromaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $aromas=Aroma::All();
        $aromas = Aroma::orderByDesc('id')->get();

        return view('admin.technologies.index', compact('aromas'));
    }
    public function aromaWines(Aroma $aroma){
        $wines = $aroma->wine;
        return view('Admin.aroma.aroma-wine',compact('wines','aroma'));
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
    public function show(string $id)
    {
        //
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
