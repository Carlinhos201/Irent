<?php

namespace App\Http\Controllers\Autenticacao;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            // 'email'       => 'string|email',
            'password'    => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $user = User::
             where('email', $request['email'])
            ->orWhere('password', $request['password'])
            ->first();

      

        if (!$user) {
            return response()->json([
                'message' => 'Email não cadastrado!'
            ], 404);
        }

        if (!password_verify($request['password'], $user['password'])) {
            return response()->json([
                'message' => 'E-mail e/ou Senha incorretos.'
            ], 401);
        }

        $tokenResult = $user->createToken('Personal Access Token');
        $token       = $tokenResult->token;
        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }
        $token->save();

        // if (Storage::disk('local')->exists($user->pessoa->perfil)) {
        //     $user->pessoa->perfil = Storage::disk('local')->get($user->pessoa->perfil);
        // } else {
        //     $user->pessoa->perfil = null;
        // }

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type'   => 'Bearer',
            'expires_at'   => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'user' => $user
        ]);

    }
    public function register(Request $request){

    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $request;
    }
    public function user(Request $request)
    {
        $user = $request->user();
        return response()->json($user);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
