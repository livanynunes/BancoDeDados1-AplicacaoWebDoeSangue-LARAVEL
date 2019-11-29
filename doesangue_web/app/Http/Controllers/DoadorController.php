<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

class DoadorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:doador');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('doador');
    }

    public function duvidas()
    {
        return view('duvidas');
    }


    public function doador_edit(){
        return view('profileDoador.edit');
    }

    public function indexBanco(User $model)
    {
       // return view('pagesDoadores.index');

        $doacao= DB::table('doacao')
            ->join('bancodesangue', 'doacao.Bsangue', '=', 'bancodesangue.id')
            ->select('doacao.*', 'bancodesangue.nome')
            ->get();

            return view('pagesDoadores.index', compact('doacao'));
    }

    public function novoBanco()
    {
        return view('pagesDoadores.novoBanco');
    }

    /////////////////////////////////////////////////////

    public function update(Request $request)
    {
       
        auth()->user()->update($request->all());

        return back()->withStatus(__('Suas informações foram atualizadas.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(Request $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatusPassword(__('Sua senha foi atualizada.'));
    }


}
