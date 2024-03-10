<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['notas'] = Note::orderBy('id')->get();

       return Inertia::render('Notes/Index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Notes/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'extracto' => 'required',
            'contenido' => 'required'
        ]);

        $nota = new Note;
        $nota->extracto = $request->extracto;
        $nota->contenido = $request->contenido;

        $nota->save();

        return redirect()->route('notes.index')->with('status', 'Nota agregada correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $data['nota'] = Note::findorFail($id);
        return Inertia::render('Notes/Show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {

        $data['nota'] = Note::findorFail($id);
        return Inertia::render('Notes/Edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'extracto' => 'required',
            'contenido' => 'required'
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index')->with('status','Nota actualizada correctamente');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        
        $data['nota'] = Note::findorFail($id)->delete();
        return redirect()->route('notes.index')->with('status','Nota eliminada correctamente');
    }
}
