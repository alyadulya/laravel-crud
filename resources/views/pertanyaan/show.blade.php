@extends('template.master')

@section('title', 'Detail Pertanyaan')

@section('content')
    <div class="container-fluid">
        <div class="card">
        <div class="ml-3 mt-3">
            <p>Judul : {{ $tanya->judul }}</p>
            <p>Isi : {{ $tanya->isi }}</p>
        </div>
        </div>
    </div>
@endsection