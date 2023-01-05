<?php

namespace App\Exports;

use App\Models\Apprentice;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportApprentice implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Apprentice::select('firstName', 'lastName','email','phoneNumber','adresse')->get();
    }
}
