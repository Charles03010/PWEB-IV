@extends('layouts.lay-cha')
@section('content')
    @foreach ($data as $mhs)
        <p>nama {{ $mhs['nama'] }}</p>
        <p>npm {{ $mhs['NPM'] }}</p>
    @endforeach
@endsection
