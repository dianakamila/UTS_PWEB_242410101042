<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->username;

        return view('dashboard', [
            'username' => $username
        ]);
    }

    public function profile(Request $request)
    {
        $username = $request->username;

        return view('profile', [
            'username' => $username
        ]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->username;

        $data = [
            ['nama' => 'Buku Atomic Habits', 'status' => 'Sudah Dibaca'],
            ['nama' => 'Buku Laut Bercerita', 'status' => 'Belum Dibaca'],
            ['nama' => 'Buku Filosofi Teras', 'status' => 'Sedang Dibaca'],
        ];

        return view('pengelolaan', [
            'data' => $data
        ]);
    }
}