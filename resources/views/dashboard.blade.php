@extends('layouts.app')

@section('content')

@if ($username == null)
    <h1 style="color:#d63384;">Halo, Reader 🌸</h1>
    <p style="color:#7a294d;">Silakan login terlebih dahulu untuk masuk ke reading room kamu.</p>
    <a href="/" style="color:#d63384;">Kembali ke Login</a>
@else
    <h1 style="color:#d63384; font-family: Georgia, 'Times New Roman', serif;">
        Welcome, {{ ucfirst($username) }} 🌷✨
    </h1>

    <h3 style="color:#7a294d; font-weight: normal;">
        Hari ini mau baca buku apa?
    </h3>

    <p style="color:#b84c7d;">
        Jelajahi koleksi bacaanmu dengan suasana yang lembut dan menyenangkan.
    </p>

    <div style="display:flex; gap:15px; flex-wrap:wrap; margin-top:20px;">

        <div style="background:#ffe4ec; padding:15px; border-radius:12px; width:160px;">
            <h3 style="color:#d63384; margin:0;">📚 3</h3>
            <p style="color:#7a294d; margin:5px 0 0;">Total Buku</p>
        </div>

        <div style="background:#ffe4ec; padding:15px; border-radius:12px; width:160px;">
            <h3 style="color:#d63384; margin:0;">📖 1</h3>
            <p style="color:#7a294d; margin:5px 0 0;">Sedang Dibaca</p>
        </div>

        <div style="background:#ffe4ec; padding:15px; border-radius:12px; width:160px;">
            <h3 style="color:#d63384; margin:0;">✅ 1</h3>
            <p style="color:#7a294d; margin:5px 0 0;">Selesai</p>
        </div>

    </div>

    <p style="
        font-style:italic;
        color:#a23a68;
        margin-top:25px;
        background:#fff0f5;
        padding:12px;
        border-left:4px solid #ff85a2;
        border-radius:8px;
    ">
        "Reading gives us someplace to go when we have to stay where we are." ✨
    </p>
@endif

@endsection