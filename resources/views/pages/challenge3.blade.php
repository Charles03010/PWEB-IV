@extends('layouts.lay-cha')
@section('content')
@dd($namaprodi)
    @foreach ($namaprodi as $prodi)
        @if ($prodi == 'Informatika')
            <p>Selamat Datang</p>
        @endif
        <p>{{ $prodi }}</p>
    @endforeach
@endsection
