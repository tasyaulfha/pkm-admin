<?php

namespace App\Exports;
namespace App\Exports;

use App\Models\Admin\Dosen;
use Maatwebsite\Excel\Concerns\FromCollection;

class DosenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dosen::all();
    }
}
