<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function get_fakultas_data()
{
    return [
        [
            "id" => 1,
            "nama_fakultas" => "Pertanian",
            "jurusan" => [
                ["id_jurusan" => 1, "nama_jurusan" => "Teknik Pertanian"],
                ["id_jurusan" => 2, "nama_jurusan" => "Teknologi Pangan"],
                ["id_jurusan" => 3, "nama_jurusan" => "Agribisnis"],
                ["id_jurusan" => 4, "nama_jurusan" => "Agroteknologi"],
                ["id_jurusan" => 5, "nama_jurusan" => "Proteksi Tanaman"]
            ]
        ],
        [
            "id" => 2,
            "nama_fakultas" => "Biologi",
            "jurusan" => [
                ["id_jurusan" => 6, "nama_jurusan" => "Biologi"],
                ["id_jurusan" => 7, "nama_jurusan" => "Mikrobiologi"],
                ["id_jurusan" => 8, "nama_jurusan" => "Biologi Terapan"]
            ]
        ],
        [
            "id" => 3,
            "nama_fakultas" => "Ekonomi dan Bisnis",
            "jurusan" => [
                ["id_jurusan" => 9, "nama_jurusan" => "Ekonomi Pembangunan"],
                ["id_jurusan" => 10, "nama_jurusan" => "Manajemen"],
                ["id_jurusan" => 11, "nama_jurusan" => "Akuntansi"],
                ["id_jurusan" => 12, "nama_jurusan" => "Pendidikan Ekonomi"]
            ]
        ],
        [
            "id" => 4,
            "nama_fakultas" => "Peternakan",
            "jurusan" => [
                ["id_jurusan" => 13, "nama_jurusan" => "Peternakan"]
            ]
        ],
        [
            "id" => 5,
            "nama_fakultas" => "Hukum",
            "jurusan" => [
                ["id_jurusan" => 14, "nama_jurusan" => "Hukum"]
            ]
        ],
        [
            "id" => 6,
            "nama_fakultas" => "Ilmu Sosial dan Ilmu Politik",
            "jurusan" => [
                ["id_jurusan" => 15, "nama_jurusan" => "Administrasi Publik"],
                ["id_jurusan" => 16, "nama_jurusan" => "Ilmu Politik"],
                ["id_jurusan" => 17, "nama_jurusan" => "Sosiologi"],
                ["id_jurusan" => 18, "nama_jurusan" => "Ilmu Komunikasi"],
                ["id_jurusan" => 19, "nama_jurusan" => "Hubungan Internasional"]
            ]
        ],
        [
            "id" => 7,
            "nama_fakultas" => "Kedokteran",
            "jurusan" => [
                ["id_jurusan" => 20, "nama_jurusan" => "Pendidikan Dokter"],
                ["id_jurusan" => 21, "nama_jurusan" => "Kedokteran Gigi"]
            ]
        ],
        [
            "id" => 8,
            "nama_fakultas" => "Teknik",
            "jurusan" => [
                ["id_jurusan" => 22, "nama_jurusan" => "Teknik Elektro"],
                ["id_jurusan" => 23, "nama_jurusan" => "Teknik Mesin"],
                ["id_jurusan" => 24, "nama_jurusan" => "Teknik Sipil"],
                ["id_jurusan" => 25, "nama_jurusan" => "Teknik Industri"],
                ["id_jurusan" => 26, "nama_jurusan" => "Teknik Geologi"],
                ["id_jurusan" => 27, "nama_jurusan" => "Informatika"],
                ["id_jurusan" => 28, "nama_jurusan" => "Teknik Komputer"]
            ]
        ],
        [
            "id" => 9,
            "nama_fakultas" => "Ilmu-ilmu Kesehatan",
            "jurusan" => [
                ["id_jurusan" => 29, "nama_jurusan" => "Kesehatan Masyarakat"],
                ["id_jurusan" => 30, "nama_jurusan" => "Ilmu Gizi"],
                ["id_jurusan" => 31, "nama_jurusan" => "Keperawatan"],
                ["id_jurusan" => 32, "nama_jurusan" => "Farmasi"],
                ["id_jurusan" => 33, "nama_jurusan" => "Pendidikan Jasmani"]
            ]
        ],
        [
            "id" => 10,
            "nama_fakultas" => "Ilmu Budaya",
            "jurusan" => [
                ["id_jurusan" => 34, "nama_jurusan" => "Sastra Indonesia"],
                ["id_jurusan" => 35, "nama_jurusan" => "Sastra Inggris"],
                ["id_jurusan" => 36, "nama_jurusan" => "Sastra Jepang"],
                ["id_jurusan" => 37, "nama_jurusan" => "Pendidikan Bahasa Indonesia"],
                ["id_jurusan" => 38, "nama_jurusan" => "Pendidikan Bahasa Inggris"],
                ["id_jurusan" => 39, "nama_jurusan" => "Pendidikan Bahasa Jepang"]
            ]
        ],
        [
            "id" => 11,
            "nama_fakultas" => "Matematika dan Ilmu Pengetahuan Alam",
            "jurusan" => [
                ["id_jurusan" => 40, "nama_jurusan" => "Matematika"],
                ["id_jurusan" => 41, "nama_jurusan" => "Fisika"],
                ["id_jurusan" => 42, "nama_jurusan" => "Kimia"],
                ["id_jurusan" => 43, "nama_jurusan" => "Statistika"]
            ]
        ],
        [
            "id" => 12,
            "nama_fakultas" => "Perikanan dan Ilmu Kelautan",
            "jurusan" => [
                ["id_jurusan" => 44, "nama_jurusan" => "Ilmu Kelautan"],
                ["id_jurusan" => 45, "nama_jurusan" => "Manajemen Sumberdaya Perairan"],
                ["id_jurusan" => 46, "nama_jurusan" => "Akuakultur"]
            ]
        ]
    ];
}
