@extends('template.master')

@section('title', 'Buat Pertanyaan')

@section('content')
<div class="container-fluid">
    <!-- general form elements -->
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" action="/pertanyaan" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" placeholder="Judul pertanyaan" id="judul" name="judul">
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea class="form-control" placeholder="Isi pertanyaan" id="isi" name="isi"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection