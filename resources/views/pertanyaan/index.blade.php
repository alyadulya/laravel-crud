@extends('template.master')

@section('title', 'Pertanyaan')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th style="width: 276px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pertanyaan as $key => $tanya)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $tanya->judul }}</td>
                                <td>{{ $tanya->isi }}</td>
                                <input type="hidden" class="form-control" value="{{ $tanya->id }}" id="pertanyaan_id" name="pertanyaan_id">
                                <td>
                                    <a href="/jawaban/{{ $tanya->id }}" class="btn btn-sm btn-primary">Jawab</a>
                                    <a href="/pertanyaan/{{ $tanya->id }}" class="btn btn-sm btn-info">Tampilkan</a>
                                    <a href="/pertanyaan/{{ $tanya->id }}/edit" class="btn btn-sm btn-default">Sunting</a>
                                    <form action="/pertanyaan/{{ $tanya->id }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
        <a href="/pertanyaan/create" class="btn btn-primary">
            Buat pertanyaan
        </a>
    </div>
@endsection