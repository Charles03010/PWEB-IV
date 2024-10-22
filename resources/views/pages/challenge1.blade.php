@extends('layouts.lay-cha')
@section('content')
    @foreach ($data as $mhs)
        @if ($mhs['status_mahasiswa'])
            <p>Mahasiswa npm {{ $mhs['NPM'] }} : aktif</p>
        @else
            <p>Mahasiswa npm {{ $mhs['NPM'] }} : tidak aktif</p>
        @endif
    @endforeach
@endsection
