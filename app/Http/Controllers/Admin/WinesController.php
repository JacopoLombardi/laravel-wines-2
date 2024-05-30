<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;


class WinesController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wines = Wine::all();
        $wines = Wine::paginate(8);
        return view('Admin.wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.wines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $wine = new Wine();

        $wine->fill($data);
        $wine->save();

            return redirect()->route('admin.wines.show', $wine);
    }

    /**
     * Display the specified resource.
     */
    public function show(Wine $wine)
    {
        return view('Admin.wines.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wine $wine)
    {
        return view('Admin.wines.edit', compact('wine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wine $wine)
    {
        $data = $request->all();
        $wine->update($data);

        return redirect()->route('admin.wines.show', $wine->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();

        return redirect()->route('admin.wines.index')->with('delete', 'Il vino ' . $wine->wine . ' é stato eliminato') ;
    }
}
