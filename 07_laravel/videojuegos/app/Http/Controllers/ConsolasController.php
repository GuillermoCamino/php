<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consola;
use DB;

class ConsolasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consolas=Consola::all();
        $mensaje="Esta es la lista de consolas";
        /*$consolas=[
            "Playstation 4",
            "Playstation 5",
            "Nintendo switch",
            "XBox series X",

        ];*/
        return view('consolas/index',[
            'mensaje' => $mensaje,
            'consolas' => $consolas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('consolas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consola = new Consola;
        $consola -> nombre=$request -> input('nombre');
        $consola -> anioSalido=$request -> input('anioSalido');
        $consola -> generacion=$request -> input('generacion');
        $consola -> descripcion=$request -> input('descripcion');
        $consola -> save();

        return redirect('consolas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consola=Consola::find($id);
        return view('consolas/show',
        [
            'consola'=>$consola
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
        $consola=Consola::find($id);
        return view('consolas/edit',
        [
            'consola'=>$consola
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
        $consola = Consola::find($id);

        $consola -> nombre = $request -> input('nombre');
        $consola -> anioSalido = $request -> input('anioSalido');
        $consola -> generacion = $request -> input('generacion');
        $consola -> descripcion = $request -> input('descripcion');

        $consola -> save();

        return redirect('consolas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('consolas')->where('id','=',$id)->delete();

        return redirect('consolas');
    }
}
