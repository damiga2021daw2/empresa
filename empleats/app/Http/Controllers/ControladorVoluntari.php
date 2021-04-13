<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Voluntari;

class ControladorVoluntari extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voluntari = Voluntari::all();
        return view('voluntaris.index', compact('voluntari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voluntaris.crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouVoluntari = $request->validate([
            'nif' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'adreca' => 'required|max:255',
            'poblacio' => 'required|max:255',
            'comarca' => 'required|max:255',
            'fixe' => 'required',
            'mobil' => 'required|max:255',
            'email' => 'required|max:255',
            'edat' => 'required|max:255',
            'professio' => 'required|max:255',
            'horesDedicades' => 'required|max:255',
            'nomONG' => 'required|max:255'
        ]);
        $voluntari = Voluntari::create($nouVoluntari);

        return redirect('/voluntaris')->with('completed', 'Nou voluntari creat!');
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
        $voluntari = Voluntari::findOrFail($id);
        return view('voluntaris.actualitza', compact('voluntari'));
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
            'edat' => 'required|max:255',
            'professio' => 'required|max:255',
            'horesDedicades' => 'required|max:255',
            'nomONG' => 'required|max:255'
        ]);

        Voluntari::whereId($id)->update($dades);
        return redirect('/voluntaris')->with('completed', 'Voluntari actualitzat :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voluntari = Voluntari::findOrFail($id);
        $voluntari->delete();

        return redirect('/voluntaris')->with('completed', 'Voluntari esborrat');
    }
}
