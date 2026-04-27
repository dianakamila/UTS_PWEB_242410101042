@extends('layouts.app')

@section('content')

@if ($username == null)
    <h1 style="color:#d63384;">Halo, Reader 🌸</h1>
    <p style="color:#7a294d;">Silakan login terlebih dahulu untuk melihat profile kamu.</p>
    <a href="/" style="color:#d63384;">Kembali ke Login</a>
@else

    <div style="
        background:#ffe4ec;
        padding:30px;
        border-radius:18px;
        width:360px;
        margin:50px auto 0;
        text-align:center;
        box-shadow: 0 0 12px rgba(0,0,0,0.1);
    ">

        <div style="
            width:80px;
            height:80px;
            background:#ffc0cb;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:0 auto 10px;
            font-size:35px;
        ">
            👤
        </div>

        <h2 style="
            color:#d63384;
            font-family: Georgia, 'Times New Roman', serif;
            margin:0;
        ">
            🎀 My Profile 🎀
        </h2>

        <hr style="border:0.5px solid #ffc0cb; margin:15px 0;">

        <div style="
            background:#fff0f5;
            padding:15px;
            border-radius:12px;
        ">
            <h3 style="
                margin:0;
                color:#d63384;
            ">
                {{ ucfirst($username) }} 💖
            </h3>
        </div>

        <p style="
            color:#7a294d;
            margin-top:12px;
        ">
            -Reader since 2026-
        </p>

    </div>

@endif

@endsection