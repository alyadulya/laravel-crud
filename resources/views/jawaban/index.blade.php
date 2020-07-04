@extends('template.master')

@section('title', 'Jawaban')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-4">
                @foreach ($pertanyaan as $key => $tanya)
                @if ($tanya->id == $pertanyaan_id)
                    <h3>{{ $tanya->judul }}</h3>
                    <p>{{ $tanya->isi }}</p>
                @endif
                @endforeach
            </div>
            <div class="card-footer">
                <a href="/pertanyaan" class="btn btn-primary"><< Kembali ke daftar pertanyaan</a>
            </div>
        </div>
        <div class="card ml-5">
            <div class="card-header">
                <h3 class="card-title">Jawaban</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-4">
                @foreach ($jawaban as $key => $jawab)
                @if ($jawab->pertanyaan_id == $pertanyaan_id)
                    <p>{{ $jawab->isi }}</p>
                    <hr>
                @endif
                @endforeach
            </div>
            <!-- /.card-body -->
        </div>
        <!-- general form elements -->
        <div class="card card-primary ml-5">
            <!-- form start -->
            <form role="form" action="/jawaban/{{ $pertanyaan_id }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" value="{{ $pertanyaan_id }}" id="pertanyaan_id" name="pertanyaan_id">
                    </div>
                    <div class="form-group">
                        <label for="isi">Buat jawaban baru</label>
                        <textarea class="form-control" placeholder="Isi jawaban" id="isi" name="isi"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection