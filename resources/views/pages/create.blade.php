@extends('layouts.lay-cha')
@section('content')
    <form action="/simpan" method="POST">
        @csrf
        <label for="nama">Masukan Nama:</label>
        <input type="text" name="nama" id="nama">
        <label for="email">Masukan Email:</label>
        <input type="email" name="email" id="email">
        <label for="password">Masukan Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Simpan</button>
    </form>
@endsection
