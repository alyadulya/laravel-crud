<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class KomentarPertanyaanModel {
    public static function get_all() {
        $komentar_pertanyaan = DB::table('komentar_pertanyaan')->get();
        return $komentar_pertanyaan;
    }

    public static function save($data) {
        $new_komentar_pertanyaan = DB::table('komentar_pertanyaan')->insert($data);
        return $new_komentar_pertanyaan;
    }
}

?>