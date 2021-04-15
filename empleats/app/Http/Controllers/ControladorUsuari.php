<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuari;

use Session;

class ControladorUsuari extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuari = Usuari::all();
        return view('usuaris.index', compact('usuari'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuaris.crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouUsuari = $request->validate([
            'username' => 'required|max:255',
            'passwd' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'email' => 'required|max:255',
            'mobil' => 'required|max:255',
            'admin' => 'required',
        ]);
        $usuari = Usuari::create($nouUsuari);

        return redirect('/usuaris')->with('completed', 'Nou usuari creat!');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $totsUsuaris = Usuari::all();
        $usuari = $_GET['username'];
        $contra = $_GET['passwd'];
        //$usuari = Usuari::findOrFail($id);

        foreach($totsUsuaris as $usuari){
            if($usuari->username == $usuari){
                if ($usuari->passwd == $contra) {

                    //Session::put('usuari', $usuari);
                    if ($usuari->admin == "Si") {
                        return redirect('/admin'); 
                    } else {
                        return redirect('/home'); 
                    }
                } else {
                    return redirect()->view('login')->with('error', 'Contrasenya incorrecta');
                }
            }
        }
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuari = Usuari::findOrFail($id);
        return view('usuaris.actualitza', compact('usuari'));
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
            'username' => 'required|max:255',
            'passwd' => 'required|max:255',
            'nom' => 'required|max:255',
            'cognoms' => 'required|max:255',
            'email' => 'required|max:255',
            'mobil' => 'required|max:255',
            'admin' => 'required',
        ]);

        Usuari::whereId($id)->update($dades);
        return redirect('/usuaris')->with('completed', 'Usuari actualitzat :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuari = Usuari::findOrFail($id);
        $usuari->delete();

        return redirect('/usuaris')->with('completed', 'Usuari esborrat');
    }
}
