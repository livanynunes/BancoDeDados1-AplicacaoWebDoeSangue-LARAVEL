<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Doador;
use App\Http\Requests\UserRequest;
use App\Http\Requests\DoadoresRequest;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;



class GerenciarDoadorController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(Doador $model)
    {

   // 	 $users = DB::table('doadores')->get();

        // return view('doadores.index', ['users' => $users]);

        //return view('doadores.index', compact('users'));

         return view('doadores.index', ['doadores' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('doadores.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, User $model)
    {
        $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('doadores.index')->withStatus(__('doador criado com sucesso.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @return \Illuminate\View\View
     */
    public function edit($user_id)
    {
    	$users = DB::table('doadores')->find($user_id);

        return view('doadores.edit', compact('users'));
        // return view('doadores.edit');
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $user_id)
    {
        
        $user = DB::table('doadores')
        ->where('id', $user_id)
        ->update(['name' => $request->name,
        		'data_nascimento' => $request->data_nascimento,
        		'd_cpf' => $request->d_cpf,
        		'd_endereco' => $request->d_endereco,
        		'd_telefone' => $request->d_telefone,
        		'email' => $request->email,
        		'd_peso' => $request->d_peso,
        		'tipo_sangue' => $request->tipo_sangue,
    	]);


        return redirect()->route('doadores.index')->withStatus(__('Usuário atualizado com sucesso!'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User  $user)
    {
        $user->delete();

        return redirect()->route('doadores.index')->withStatus(__('Doador deletado com sucesso.'));
    }
}
