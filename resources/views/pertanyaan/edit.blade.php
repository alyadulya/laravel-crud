@extends('template.master')

@section('title', 'Sunting Pertanyaan')

@section('content')
    <div class="container-fluid">
        <!-- general form elements -->
        <div class="card card-primary">
            <!-- form start -->
            <form role="form" action="/pertanyaan/{{ $tanya->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" value="{{ $tanya->judul }}" placeholder="Sunting judul pertanyaan" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea class="form-control" placeholder="Sunting isi pertanyaan" id="isi" name="isi">{{ $tanya->isi }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Sunting</button>
                </div>
            </form>
        </div>
    </div>
@endsection