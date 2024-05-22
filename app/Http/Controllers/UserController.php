<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\VarDumper\Caster\RedisCaster;
use App\Http\Requests\StoreUpdateUserFormRequest;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $users = User::query();

        // Verifique se há um parâmetro de filtro 'user_id'
        if ($request->has('user_id')) {
            $users->where('id', $request->user_id);
        }

        // Obtenha os usuários após aplicar o filtro, se houver
        $users = $users->paginate(8);

        return view('users.index', compact('users'));
        dd($users);

    }

    // public function index(Request $request)
    // {
    //     $users = User::where('name', 'LIKE', "%{$request->search}%")->get();
    //     return view('users.index', compact('users'));
    //     //dd($users);
    // }

    public function show($id)
    {
        if (!$user = User::find($id))
        return redirect()->route(('users.index'));
        return view('users.show', compact('user'));
        //$user = User::where('id', $id)->first();
        //$user = User::find($id);
        //dd($user);
        //return view('users.show');
    }

    public function create() 
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        session()->flash('success', 'Usuario cadastrado com sucesso!');
        return redirect()->route(('users.create'));
        //return redirect()->route('users.index');
        //dd('cadastrando o usuario');
        //return Redirect()->route('users.show', $user->id);
    }

    public function edit($id)
    {
        if (!$user = User::find($id))
        return redirect()->route('users.index');
        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = User::find($id))
        return redirect()->route('users.edit');
        $data = $request->only('name', 'email');
        if ($request->password)
        $data['password'] = bcrypt($request->password);
        $user->update($data);
        session()->flash('success', 'Atualizado com sucesso!');
        return redirect()->route('users.edit', $user->id);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users.index')->with('error', 'Usuário não encontrado.');
        }
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuário excluído com sucesso.');
    }
}
