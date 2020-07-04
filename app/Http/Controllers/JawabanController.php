<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    public function index(Request $request) {
        $pertanyaan_id = $request['pertanyaan_id'];
        $pertanyaan = PertanyaanModel::get_all();
        $jawaban = JawabanModel::get_all();
        //dd($pertanyaan);
        return view('jawaban.index', compact('jawaban', 'pertanyaan'), ["pertanyaan_id"=>$pertanyaan_id]);
    }

    public function store(Request $request) {
        //dd($request->all());
        $pertanyaan_id = $request['pertanyaan_id'];
        $new_jawaban = JawabanModel::save($request->all());

        return redirect()->action(
            'JawabanController@index', ['pertanyaan_id' => $pertanyaan_id]
        );
    }
}
