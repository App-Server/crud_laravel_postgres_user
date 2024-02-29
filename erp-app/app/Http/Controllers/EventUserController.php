<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventUser;

class EventUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = EventUser::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'nomecompleto' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'setor' => 'required',
            'funcao' => 'required'
        ]);

        EventUser::create($request->all());

        session()->flash('success', 'Usuario cadastrado com sucesso!');

        return redirect()->route(('user.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $data = EventUser::all();
        $totalUsers = EventUser::count();
        return view('user.show', ['users' => $data, 'totalUsers' => $totalUsers]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = EventUser::findOrFail($id);
        return view('user.edit', compact('user'));
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
        $user = EventUser::findOrFail($id);

        $request->validate([
            'nomecompleto' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'setor' => 'required',
            'funcao' => 'required'
        ]);

        $user->update($request->all());

        //return redirect()->route('user.show')->with('success', 'Usuário atualizado com sucesso!');
        return redirect()->back()->with('success', 'Usuário atualizado com sucesso!');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = EventUser::findOrFail($id);
        $user->delete();

        return redirect()->route('user.show')->with('success', 'Atualizado com sucesso!');
    }
}
