@extends('layouts.app')

@section('content')

<div style="
    text-align:center;
    margin-top:50px;
">

    <div style="
        background:white;
        padding:30px;
        width:300px;
        margin:auto;
        border-radius:15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    ">

        <h1 style="
            color:#d63384;
            font-family: Georgia, 'Times New Roman', serif;
            margin-bottom:20px;
        ">
            Login 
        </h1>

        <p style="color:#6f1d3a; margin-bottom:20px;">
            Masuk ke reading room kamu 🌸
        </p>

        <form action="/dashboard" method="GET">
            
            <label style="font-weight:bold; color:#6f1d3a;">
                Username
            </label><br>
            
            <input type="text" name="username"
                style="
                    padding:10px;
                    width:100%;
                    border-radius:10px;
                    border:1px solid #ffc0cb;
                    margin-top:8px;
                    outline:none;
                ">
            
            <br><br>

            <button type="submit" style="
                width:100%;
                background:#ff85a2;
                border:none;
                padding:10px;
                color:white;
                border-radius:10px;
                font-weight:bold;
            ">
                Masuk 
            </button>

        </form>

    </div>

</div>

@endsection