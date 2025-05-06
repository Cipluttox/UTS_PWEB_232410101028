<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function showlogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $username = $request->input('username');

        return redirect()->route('dashboard', ['username' => $username ]);
    }

    public function dashboard(Request $request)
    {
        // Cek apakah pengguna sudah login
        /*if (!Session::get('logged_in')) {
            return redirect()->route('login');
        }*/
        // Ambil username dari session
        $username = $request->query('username');
        //$username = session('username');
        // Tampilkan dashboard dengan username
        return view('dashboard', compact('username'));
    }

    public function profil(Request $request) {

        $username = $request->query('username');
        return view('profil', compact('username'));
    }
    public function pengelolaan(Request $request) {

        $username = $request->query('username');
        return view('pengelolaan', compact('username'));
    }

    public function logout(){
        return redirect()->route('login');
    }
}
