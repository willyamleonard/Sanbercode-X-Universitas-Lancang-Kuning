<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = Cast::all();


        return view('cast.tampil', ['cast' => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:    5',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'name.required' => 'name harus diisi tidak boleh kosong',
            'umur.required' => 'umur harus diisi tidak boleh kosong',
            'bio.required' => 'bio harus diisi tidak boleh kosong',
            
        ]);

        $cast = new Cast;
 
        $cast->name = $request->input('name');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');
 
        $cast->save();
 
        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::find($id);
        
        return view('cast.detail', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);
        
        return view('cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:    5',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'name.required' => 'name harus diisi tidak boleh kosong',
            'umur.required' => 'umur harus diisi tidak boleh kosong',
            'bio.required' => 'bio harus diisi tidak boleh kosong',
            
        ]);
        
        cast::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'umur' => $request->input('umur'),
                'bio' => $request->input('bio'),
            ]
            );
            
        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        cast::where('id', $id)->delete();

        return redirect('/cast');
    }
}
