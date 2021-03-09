<?php

namespace App\Http\Controllers;

use App\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Crud::All();
        return view('component.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "age"=>"required"
        ]);

        $user = new Crud([
            'name'=>$request->get('name'),
            'age'=>$request->get('age'),
        ]);

        $user->save();
        return redirect('/component')->with('success', 'Utilisateur ajouter avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Crud::find($id);
        return view('component.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "name"=>"required",
            "age"=>"required"
        ]);

        $user = Crud::find($id);

        $user->name = $request->get('name');
        $user->age = $request->get('age');

        $user->save();
        return redirect('/component')->with('success', 'Utilisateur modifier avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Crud::find($id);
        $user->delete();

        return redirect('/component')->with('success', 'Utilisateur supprimer avec succès !');
    }
}
