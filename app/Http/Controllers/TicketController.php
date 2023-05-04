<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\user;
use App\Models\area;
use App\Models\tecnico;



class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//     public function ordenarTickets()
// {
//     $tickets = Ticket::orderBy('estado', 'Terminado')->orderBy('terminado')->get();
//     return view('tickets.index', ['tickets' => $tickets]);
// }


    public function index(Request $request)
    {
      
    // return view('tickets.index', compact('tickets'));

        $tickets = Ticket::oldest('estado')->paginate(10);
        
         return view('tickets.index',compact('tickets'));
    }

    public function buscar(Request $request)
{
    $termino = $request->input('q');

    $tickets = Ticket::where('descripcion', 'LIKE', '%'.$termino.'%')
                     ->orWhere('solucion', 'LIKE', '%'.$termino.'%')
                     ->orWhere('estado', 'LIKE', '%'.$termino.'%')
                     ->orWhereHas('area', function ($query) use ($termino) {
                         $query->where('name', 'LIKE', '%'.$termino.'%');
                     })
                     ->orWhereHas('tecnico', function ($query) use ($termino) {
                         $query->where('nombre', 'LIKE', '%'.$termino.'%');
                     })
                     ->orWhere('nombre', 'LIKE', '%'.$termino.'%')
                     ->orderBy('estado', 'asc')
                     ->paginate(10);

    return view('tickets.index', compact('tickets'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $usuarios = User::all();
        $areas = Area::all();
        $tecnicos = Tecnico::all();
        // $users = User::all();
        return view('tickets.create', compact('areas', 'tecnicos'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'nullable',
            'solucion' => 'nullable',
            'estado' => 'nullable',
            'nombre' => 'nullable',
            'user_id' => 'nullable|exists:users,id',
            // 'area_id' => 'nullable|exists:areas,id',
            'tecnico_id' => 'nullable|exists:tecnicos,id',


        ]);


        Ticket::create($request->all());
        return redirect()->route('tickets.index')->with('success', 'ticket creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        // $usuarios = user::all();
        $areas = area::all();
        $tecnicos = tecnico::all();

        // return view('tickets.edit', compact('ticket', 'usuarios', 'areas'));

        return view('tickets.editar', compact('ticket', 'areas', 'tecnicos'));
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'descripcion' => 'nullable',
            'solucion' => 'nullable',
            'estado' => 'nullable',
            'nombre' => 'nullable',
            'user_id' => 'nullable|exists:users,id',
            // 'area_id' => 'nullable|exists:areas,id',
            'tecnico_id' => 'nullable|exists:tecnicos,id',


]);
$ticket->update($request->all());
        return redirect()->route('tickets.index', $ticket->id)->with('success', 'ticket creado satisfactoriamente.');
}

public function updateStatus(Request $request, $id)
{
    $ticket = Ticket::findOrFail($id);
    $ticket->active = $request->active;
    $ticket->save();
    $ticket->touch(); // actualiza el campo updated_at
    return redirect()->back();
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index');
}
}
