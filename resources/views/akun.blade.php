@extends('Layouts.Masterpro')
    <link rel="stylesheet" href="{{ asset('css/akun.css')}}"> 
@section('title', 'Account')
@section('content')
    @foreach($users as $users)
    <div class = "kotak">
        <h2>ACCOUNT</h2>
        <hr>
    <div class = "isi">
        <h3>Nama    : {{ $users->name }}</h3>
        <h3>Email   : {{ $users->email }}</h3>
    </div>
    @endforeach
@endsection