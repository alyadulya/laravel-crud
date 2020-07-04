<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        //dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create() {
        return view('pertanyaan.form');
    }

    public function store(Request $request) {
        //dd($request->all());
        $new_pertanyaan = PertanyaanModel::save($request->all());

        return redirect('/pertanyaan');
    }
    
    public function show($id)
    {
        $tanya = PertanyaanModel::find_by_id($id);

        return view('pertanyaan.show', compact('tanya'));
    }

    public function edit($id) {
        $tanya = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('tanya'));
    }

    public function update($id, Request $request) {
        $tanya = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id) {
        $hapus = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
