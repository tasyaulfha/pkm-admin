<?php

namespace App\Imports;
use App\Models\Admin\Dosen;
use Maatwebsite\Excel\Concerns\ToModel;

class DosenImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dosen([
            'nidn_dosen' => $row[1],
            'nama_dosen' => $row[2],
            'no_hp' => $row[3],
        ]);
    }
}
