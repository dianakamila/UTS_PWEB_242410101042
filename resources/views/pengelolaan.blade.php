@extends('layouts.app')

@section('content')

@if ($username == null)
    <h1 style="color:#d63384;">Halo, Reader 🌸</h1>
    <p style="color:#7a294d;">Silakan login terlebih dahulu untuk melihat koleksi buku.</p>
    <a href="/" style="color:#d63384;">Kembali ke Login</a>
@else

    <h1 style="color:#d63384; font-family: Georgia, 'Times New Roman', serif;">
        Koleksi Buku 📚✨
    </h1>

    <p style="color:#b84c7d;">
        Berikut adalah daftar buku yang ada di reading room kamu.
    </p>

    <div style="display:flex; gap:18px; flex-wrap:wrap; margin-top:20px;">

        @foreach ($data as $item)
            <div style="
                background:#ffe4ec;
                padding:18px;
                border-radius:15px;
                width:230px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            ">
                <h3 style="
                    color:#d63384;
                    margin-top:0;
                    font-family: Georgia, 'Times New Roman', serif;
                ">
                    {{ $item['nama'] }}
                </h3>

                <p style="color:#7a294d;">
                    Status:
                    <span style="
                        padding:6px 10px;
                        border-radius:10px;
                        font-size:14px;
                        background-color:
                        @if($item['status'] == 'Sudah Dibaca') #d4edda
                        @elseif($item['status'] == 'Belum Dibaca') #f8d7da
                        @else #fff3cd
                        @endif;
                    ">
                        {{ $item['status'] }}
                    </span>
                </p>
            </div>
        @endforeach

    </div>

@endif

@endsection