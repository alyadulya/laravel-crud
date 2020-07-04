<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class KomentarJawabanModel {
    public static function get_all() {
        $komentar_jawaban = DB::table('komentar_jawaban')->get();
        return $komentar_jawaban;
    }

    public static function save($data) {
        $new_komentar_jawaban = DB::table('komentar_jawaban')->insert($data);
        return $new_komentar_jawaban;
    }
}

?>