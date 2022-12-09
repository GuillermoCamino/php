<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compania;
use DB;

class CompaniasController extends Controller
{
    public function index()
    {
        $companias=Compania::all();
       
        $mensaje="aqui tenemos una lista de compañias";
        return view('companias/index',
        [
            'mensaje' => $mensaje,
            'companias' => $companias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companias=Companias::all();
        return view('companias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compania = new Compania;
        $compania -> nombre=$request -> input('nombre');
        $compania -> sede=$request -> input('sede');
        $compania -> fecha_fundacion=$request -> input('fecha_fundacion');
        $compania -> save();

        return redirect('companias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compania=Compania::find($id);
        return view('companias/show',
        [
            'compania'=>$compania
        ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compania=Compania::find($id);
        return view('companias/edit',
        [
            'compania'=>$compania
        ]
        );
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
        $compania = Compania::find($id);

        $compania -> nombre = $request -> input('nombre');
        $compania -> sede = $request -> input('sede');
        $compania -> fecha_fundacion = $request -> input('fecha_fundacion');

        $compania -> save();

        return redirect('companias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('companias')->where('id','=',$id)->delete();

        return redirect('companias');
    }
    

}