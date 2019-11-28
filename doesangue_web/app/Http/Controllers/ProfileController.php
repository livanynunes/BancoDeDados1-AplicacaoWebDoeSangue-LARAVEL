<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
    
        auth()->user()->update($request->all());

        // $user = DB::table('users')
        // ->where('email', auth()->user()->email)
        // ->update(['name' => $request->name,
        //         'email' => $request->email,
        //         'user_cpf' => $request->user_cpf,
        //         'user_telefone' => $request->user_telefone,
        // ]);

        return back()->withStatus(__('Suas informações foram atualizadas.'));

        // return redirect()->route('profile')->withStatus(__('Suas informações foram atualizadas com sucesso!'));

    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatusPassword(__('Sua senha foi atualizada'));
    }

    public function edit(){
        return view('profile.edit');
    }
}
