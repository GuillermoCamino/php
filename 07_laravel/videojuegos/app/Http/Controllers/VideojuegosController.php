<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use DB;

class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videojuegos=Videojuego::all();
        /*$mensaje="Esta es la lista de Videojuegos";
        $videojuegos=[
            ["pokemon diamante", 40, 3,"juego remaster de pokemon ds"],
            ["god of war", 70, 18,"juego que va de matar dioses"],
            ["the binding of isaac", 20, 16,"Juego que va de ir por mazmorras"],
            ["League of legends ", 0, 15,"Juego que va de ser racista"],
            ["need for speed", 80, 12,"brum brum"],
            ["pokemon escarlata",60,3,"simulador de bugs pero juegazo en vd"],
        ];*/
        $mensaje="aqui tenemos una lista de videojuegos";
        return view('videojuegos/index',
        [
            'mensaje' => $mensaje,
            'videojuegos' => $videojuegos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videojuegos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $videojuego = new Videojuego;
        $videojuego -> titulo=$request -> input('titulo');
        $videojuego -> precio=$request -> input('precio');
        $videojuego -> pegi=$request -> input('pegi');
        $videojuego -> descripcion=$request -> input('descripcion');
        $videojuego -> save();

        return redirect('videojuegos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videojuego=Videojuego::find($id);
        return view('videojuegos/show',
        [
            'videojuego'=>$videojuego
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
        $videojuego=Videojuego::find($id);
        return view('videojuegos/edit',
        [
            'videojuego'=>$videojuego
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
        $videojuego = Videojuego::find($id);

        $videojuego -> titulo = $request -> input('titulo');
        $videojuego -> precio = $request -> input('precio');
        $videojuego -> pegi = $request -> input('pegi');
        $videojuego -> descripcion = $request -> input('descripcion');

        $videojuego -> save();

        return redirect('videojuegos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('videojuegos')->where('id','=',$id)->delete();

        return redirect('videojuegos');
    }
    /**
     * funcion que busca los videojuegos por titulo
     * @param string $request
     * @return \Illuminate\Http\
     */
    public function search(Request $request)
    {
        $titulo=$request ->input('titulo');
        $videojuegos = DB::table('videojuegos') ->where('titulo','like','%'. $titulo .'%')->get();

        return view('videojuegos/search',
        [
            'videojuegos' => $videojuegos
        ]
        );
    }
 
}
