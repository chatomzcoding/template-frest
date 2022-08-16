<?php 

// data status anak (kepegawaian anak)
if (! function_exists('data_statusanak')) {
    function data_statusanak()
    {
        $data  = [
            'ak' => 'ak',
            'at' => 'at',
            'aa' => 'aa',
        ];
        return $data;
    }
}
if (! function_exists('data_berkebutuhankhusus')) {
    function data_berkebutuhankhusus()
    {
        $data  = [
            'netra (A)' => 'netra (A)',
            'netra (B)' => 'netra (B)',
            'grahita sedang (C1)' => 'grahita sedang (C1)',
            'grahita sedang (C)' => 'grahita sedang (C)',
            'daksa sedang (D)' => 'daksa sedang (D)',
            'daksa ringan (D1)' => 'daksa ringan (D1)',
            'laras (E)' => 'laras (E)',
            'wicara (F)' => 'wicara (F)',
            'hyperaktif (H)' => 'hyperaktif (H)',
            'cerdas istimewa (I)' => 'cerdas istimewa (I)',
            'bakat istimewa (J)' => 'bakat istimewa (J)',
            'kesulitan belajar (K)' => 'kesulitan belajar (K)',
            'narkoba (N)' => 'narkoba (N)',
            'indigo (O)' => 'indigo (O)',
            'down syndrome (P)' => 'down syndrome (P)',
            'autis (Q)' => 'autis (Q)',
        ];
        return $data;
    }
}

// data jenis tinggal siswa dengan wali/ortu/lainnya
if (! function_exists('data_jenistinggal')) {
    function data_jenistinggal()
    {
        $data  = [
            'bersama orang tua',
            'wali',
            'kost',
            'asrama',
            'panti asuhan',
            'lainnya'
        ];
        return $data;
    }
}
// data pekerjaan
if (! function_exists('data_pekerjaan')) {
    function data_pekerjaan()
    {
        $data  = [
           'Tidak bekerja',
           'Nelayan',
           'Petani',
           'Peternak',
           'PNS/TNI/Polri',
           'Karyawan swasta',
           'Pedagang Kecil',
           'Pedagang Besar',
           'Wiraswasta',
           'Wirausaha',
           'Buruh',
           'Pensiun',
        ];
        return $data;
    }
}
// data pendidikan
if (! function_exists('data_pendidikan')) {
    function data_pendidikan()
    {
        $data  = [
           'Tidak Sekolah',
           'PAUD',
           'TK/sederajat',
           'Putus SD',
           'SD/sederajat',
           'SMP/sederajat',
           'SMA/sederajat',
           'Paket A',
           'Paket B',
           'Paket C',
           'D1',
           'D2',
           'D3',
           'D4',
           'S1',
           'S2',
           'S3',
           'Non Formal',
           'Informal',
           'Lainnya',
        ];
        return $data;
    }
}
// data penghasilan wali/ortu
if (! function_exists('data_penghasilan')) {
    function data_penghasilan()
    {
        $data  = [
           'Kurang dari Rp. 500.00',
           'Rp. 500.000 - Rp. 999.999',
           'Rp. 1.000.000 - Rp. 1.999.999',
           'Rp. 2.000.000 - Rp. 4.999.999',
           'Rp. 5.000.000 - Rp. 20.000.000',
           'Lebih dari Rp. 20.000.000',
        ];
        return $data;
    }
}