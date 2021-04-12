<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ong;

class ControladorONG extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ong = ong::all();
        return view('ongs.index', compact('ong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ongs.crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ut = false;
        if ($request->get('utpublica') == 'on') {
            $ut = true;     
        }
        $novaONG = $request->validate([
            'cif' => 'required|max:255',
            'nom' => 'required|max:255',
            'adreca' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'tipus' => 'required|max:255',
            'utpublica' => $ut
        ]);
        $ong = ong::create($novaONG);

        return redirect('/ongs')->with('completed', 'Nova ONG creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ong = ong::findOrFail($id);
        return view('ongs.actualitza', compact('ong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ut = false;
        if ($request->get('utpulbica') == 'on') {
            $ut = true;     
        }
        $dades = $request->validate([
            'cif' => 'required|max:255',
            'nom' => 'required|max:255',
            'adreca' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'tipus' => 'required|max:255',
            'utpublica' => $ut
        ]);

        ong::whereId($id)->update($dades);
        return redirect('/ongs')->with('completed', 'ONG actualitzada :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ong = ong::findOrFail($id);
        $ong->delete();

        return redirect('/ongs')->with('completed', 'ONG esborrada');
    }
}
