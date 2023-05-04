<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tecnico;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function __construct()
     {
          $this->middleware('permission:ver-tecnico|crear-tecnico|editar-tecnico|borrar-tecnico')->only('index');
          $this->middleware('permission:crear-tecnico', ['only' => ['create','store']]);
          $this->middleware('permission:editar-tecnico', ['only' => ['edit','update']]);
          $this->middleware('permission:borrar-tecnico', ['only' => ['destroy']]);
     }
    public function index()
    {
        $tecnicos = tecnico::paginate(10);
        return view('tecnicos.index',compact('tecnicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnicos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombre' => 'nullable',
            'apellido' => 'nullable',
        ]);
    
        Tecnico::create($request->all());
    
        return redirect()->route('tecnicos.index'); 
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
    public function edit(Tecnico $tecnico)
    {
        return view('tecnicos.editar',compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tecnico $tecnico)
    {
        request()->validate([
            'name' => 'nullable',
            'apellido' => 'nullable',

        ]);
    
        $tecnico->update($request->all());
    
        return redirect()->route('tecnicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnico $tecnico)
    {
        $tecnico->delete();
    
        return redirect()->route('tecnicos.index');
    }
}
