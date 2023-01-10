<?php

namespace App\Imports;

use App\Models\Apprentice;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportApprentice implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Apprentice([
            'firstName' => $row[0],
            'lastName' => $row[1],
            'email' => $row[2],
            'phoneNumber' => $row[3],
            'adresse' => $row[4],
            'imageURL' => $row[5]
        ]);
    }
}
