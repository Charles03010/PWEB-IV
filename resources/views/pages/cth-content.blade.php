@extends('layouts.contoh')
@section('content')
    <h1>{{ $npm }}</h1>
    <h2>{{ $nama }}</h2>
    @if ($status == 'Mahasiswa')
        <p>Anda Seorang {{ $status }}</p>
    @elseif ($status == 'Dosen')
        <p>Anda Seorang {{ $status }}</p>
    @else
        <p>Anda Bukan Seorang {{ $status }}</p>
    @endif

    @switch($status)
        @case("Mahasiswa")
            <p>{{ $status }}</p>
            @break
        @case("Dosen")
        <p>{{ $status }}</p>
            @break
        @default
        <p>Bukan seorang dikampus</p>
    @endswitch    
    @for ($i = 0; $i < 3; $i++)
        <p>Mata Kuliah: {{ $matakuliah[$i] }}</p>
    @endfor
    @foreach ($matakuliah as $mk)
        <p>Mata Kuliah: {{ $mk }}</p>
    @endforeach


@endsection