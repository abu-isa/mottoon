<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Student;

class StudentImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        return new Student([
        	'nama' => $collection[1],
        	'nama_arab' => $collection[2],
        ]);
    }
}
