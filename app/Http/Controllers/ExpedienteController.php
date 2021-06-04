<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expediente;

class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedientes = Expediente::all();
        return view('expediente.index')->with('expedientes',$expedientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expediente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expedientes = new Expediente();
        $expedientes->codigo = $request->get('codigo');
        $expedientes->asunto = $request->get('asunto');
        $expedientes->cantidad = $request->get('cantidad');
        $expedientes->precio = $request->get('precio');

        $expedientes->save();

        return redirect('/expedientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $expedientes = Expediente::get();
        return view("expediente.index", ["expedientes"=>$expedientes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expediente = Expediente::find($id);
        return view('expediente.edit')->with('expediente',$expediente);
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
        $expedientes = Expediente::find($id);
        $expedientes->codigo = $request->get('codigo');
        $expedientes->asunto = $request->get('asunto');
        $expedientes->cantidad = $request->get('cantidad');
        $expedientes->precio = $request->get('precio');

        $expedientes->save();

        return redirect('/expedientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expediente = Expediente::find($id);
        $expediente->delete();
        return redirect('/expedientes');
    }
}
