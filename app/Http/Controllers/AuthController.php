<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Type\VoidType;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('auth.auth');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'username'      => 'required',
            'password'      => 'required'
        ], [
            'required'      => ':attribute wajib di isi!.'
        ]);

        $kridensial  = $request->only('username', 'password');

        if (Auth::attempt($kridensial)) {
            Session::put('is_login', true);
            Session::put('nama', Auth::user()->fullname);
            Session::put('username', Auth::user()->username);
            Session::put('group', Auth::user()->group);
            // dd(Auth::user());
            return redirect()->intended('/sipams');
        }

        return redirect('/login');
    }

    public function cekAuth(Request $request): JsonResponse
    {
        if ($request->session()->has('is_login')) {
            return response()->json([
                'status'   => true,
                'message'   => 'success',
            ]);
        }

        return response()->json([
            'status'   => false,
            'message'   => 'false',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
