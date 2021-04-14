<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professional;

class ControladorProfessional extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professional = Professional::all();
        return view('professionals.index', compact('professional'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professionals.crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouProfessional = $request->validate([
            'nif' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'adreca' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'fixe' => 'required',
            'mobil' => 'required|max:255',
            'email' => 'required|max:255',
            'carrec' => 'required|max:255',
            'pagamentSegSoc' => 'required|max:255',
            'irpfPercent' => 'required|max:255',
            'nomONG' => 'required|max:255'
        ]);
        $professional = Professional::create($nouProfessional);

        return redirect('/professionals')->with('completed', 'Nou professional creat!');
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
        $professional = Professional::findOrFail($id);
        return view('professionals.actualitza', compact('professional'));
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
            'carrec' => 'required|max:255',
            'pagamentSegSoc' => 'required|max:255',
            'irpfPercent' => 'required|max:255',
            'nomONG' => 'required|max:255'
        ]);

        Professional::whereId($id)->update($dades);
        return redirect('/professionals')->with('completed', 'Professional actualitzat :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professional = Professional::findOrFail($id);
        $professional->delete();

        return redirect('/professionals')->with('completed', 'Professional esborrat');
    }
}
