<?php

namespace App\Helpers;

class JenisIndeksasi
{

    const JurnalIlmiahInternasionalBereputasi = "Jurnal Ilmiah Internasional Bereputasi";
    const JurnalInternasional = "Jurnal Internasional";
    const JurnalNasionalTerakreditasiSinta = "Jurnal Nasional Terakreditasi Sinta";
    const Conference = "Conference";
    const JurnalPengabdian = "Jurnal Pengabdian";
    const Prosiding = "Prosiding";

    /**
     * Mengembalikan daftar jenis penelitian
     *
     * @return array
     */
    public static function filtering(): array
    {
        return [
            self::JurnalIlmiahInternasionalBereputasi,
            self::JurnalInternasional,
            self::JurnalNasionalTerakreditasiSinta,
            self::Conference,
            self::JurnalPengabdian,
            self::Prosiding,
        ];
    }
    /**
     * Mengembalikan daftar jenis penelitian
     *
     * @return array
     */
    public static function listJenisIndeksasi(): array
    {
        return [
            [
                "id" => 1,
                "jenis_kegiatan" => self::JurnalIlmiahInternasionalBereputasi,
                "kriteria" => [
                    "Scopus Q1 / WoS", "Scopus Q2", "Scopus Q3", "Scopus Q4"
                ],
                "keterangan" => "Sesuai dengan ketentuan Proposal"
            ],
            [
                "id" => 2,
                "jenis_kegiatan" => self::JurnalInternasional,
                "kriteria" => [
                    "Ketentuan Jurnal Internasional sesuai dengan kepmendikbudristek No: 384/P/2024",
                ],
                "keterangan" => "Semua Jabatan Fungsional"
            ],
            [
                "id" => 3,
                "jenis_kegiatan" => self::JurnalNasionalTerakreditasiSinta,
                "kriteria" => [
                    "S1", "S2", "S3", "S4"
                ],
                "keterangan" => "Semua Jabatan Fungsional"
            ],
            [
                "id" => 4,
                "jenis_kegiatan" => self::Conference,
                "kriteria" => [
                    "Pendidikan Tinggi", "Pendidikan Tinggi"
                ],
                "keterangan" => "Semua Jabatan Fungsional"
            ],
            [
                "id" => 5,
                "jenis_kegiatan" => self::JurnalPengabdian,
                "kriteria" => [
                    "Pendidikan Tinggi", "Pendidikan Tinggi"
                ],
                "keterangan" => "Semua Jabatan Fungsional"
            ],
            [
                "id" => 6,
                "jenis_kegiatan" => self::Prosiding,
                "kriteria" => [
                    "Prosiding Terindeks", "Prosiding Tidak Terindeks"
                ],
                "keterangan" => "Semua Jabatan Fungsional"
            ],
        ];
    }


   
}
