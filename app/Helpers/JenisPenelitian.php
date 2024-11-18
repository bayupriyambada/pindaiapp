<?php

namespace App\Helpers;

class JenisPenelitian
{

    const PenelitianPemula = "Penelitian Pemula";
    const PenelitianInternasional = "Penelitian Internasional";
    const PenelitianKerjasamaLuarNegeri = "Penelitian Kerjasama Luar Negeri";
    const PenelitianKerjasamaDalamNegeri = "Penelitian Kerjasama Dalam Negeri";
    const PenelitianMandiri = "Penelitian Mandiri";

    /**
     * Mengembalikan daftar jenis penelitian
     *
     * @return array
     */
    public static function filtering(): array
    {
        return [
            self::PenelitianPemula,
            self::PenelitianInternasional,
            self::PenelitianKerjasamaLuarNegeri,
            self::PenelitianKerjasamaDalamNegeri,
            self::PenelitianMandiri,
        ];
    }
    /**
     * Mengembalikan daftar jenis penelitian
     *
     * @return array
     */
    public static function listJenisPenelitian(): array
    {
        return [
            [
                "id" => 1,
                "jenis_kegiatan" => self::PenelitianPemula,
                "kriteria" => [
                    "Pendidikan Tinggi", "Pendidikan Tinggi"
                ],
                "keterangan" => "Asisten Ahli"
            ],
            [
                "id" => 2,
                "jenis_kegiatan" => self::PenelitianInternasional,
                "kriteria" => [
                    "Pendidikan Tinggi", "Pendidikan Tinggi"
                ],
                "keterangan" => "Asisten Ahli"
            ],
            [
                "id" => 3,
                "jenis_kegiatan" => self::PenelitianKerjasamaLuarNegeri,
                "kriteria" => [
                    "Pendidikan Tinggi", "Pendidikan Tinggi"
                ],
                "keterangan" => "Asisten Ahli"
            ],
            [
                "id" => 4,
                "jenis_kegiatan" => self::PenelitianKerjasamaDalamNegeri,
                "kriteria" => [
                    "Pendidikan Tinggi", "Pendidikan Tinggi"
                ],
                "keterangan" => "Asisten Ahli"
            ],
            [
                "id" => 4,
                "jenis_kegiatan" => self::PenelitianMandiri,
                "kriteria" => [
                    "Pendidikan Tinggi", "Pendidikan Tinggi"
                ],
                "keterangan" => "Asisten Ahli"
            ],
        ];
    }


   
}
