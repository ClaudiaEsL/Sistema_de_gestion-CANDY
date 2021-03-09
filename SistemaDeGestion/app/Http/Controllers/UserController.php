<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
class UserController extends Controller
{
    
    public function index()
    {
        $user = User::all();
        return view('usuarios.index',['users' => $user]);
    }

    public function create()
    {
        return view('usuarios.create');
    }
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->password = Hash::make(request('password'));
        $usuario->save();
        return redirect('/usuarios');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('usuarios.edit', ["user" => User::findOrfail($id)]);
    }

    public function update(Request $request, $id)
    {
        $usuario = User::findOrfail($id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        
        $usuario->update();
        return redirect('/usuarios');
    }
    public function destroy($id)
    {
        $usuario = User::findOrfail($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
