<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Empleat;

class ControladorEmpleat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleat = Empleat::all();
        return view('index', compact('empleat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouEmpleat = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'telefon' => 'required|max:255',
        ]);
        $empleat = Empleat::create($nouEmpleat);

        return redirect('/empleats')->with('completed', 'Empleat creat!');
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
        $empleat = Empleat::findOrFail($id);
        return view('actualitza', compact('empleat'));
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
            'nom' => 'required|max:255',
            'email' => 'required|max:255',
            'telefon' => 'required|max:255',
        ]);

        Empleat::whereId($id)->update($dades);
        return redirect('/empleats')->with('completed', 'Empleat actualitzat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleat = Empleat::findOrFail($id);
        $empleat->delete();

        return redirect('/empleats')->with('completed', 'Empleat esborrat');
    }
}
