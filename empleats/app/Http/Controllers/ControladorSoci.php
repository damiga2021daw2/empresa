<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Soci;

class ControladorSoci extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soci = Soci::all();
        return view('socis.index', compact('soci'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socis.crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouSoci = $request->validate([
            'nif' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'adreca' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'fixe' => 'required',
            'mobil' => 'required|max:255',
            'email' => 'required|max:255',
            'quotaMes' => 'required|max:255',
            'aportAny' => 'required|max:255',
            'nomONG' => 'required|max:255'
        ]);
        $soci = Soci::create($nouSoci);

        return redirect('/socis')->with('completed', 'Nou soci creat!');
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
        $soci = Soci::findOrFail($id);
        return view('socis.actualitza', compact('soci'));
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
        $dades = $request->validate([
            'nif' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'adreca' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'fixe' => 'required',
            'mobil' => 'required|max:255',
            'email' => 'required|max:255',
            'quotaMes' => 'required|max:255',
            'aportAny' => 'required|max:255',
            'nomONG' => 'required|max:255'
        ]);

        Soci::whereId($id)->update($dades);
        return redirect('/socis')->with('completed', 'Soci actualitzat :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soci = Soci::findOrFail($id);
        $soci->delete();

        return redirect('/socis')->with('completed', 'Soci esborrat');
    }
}
