<?php

namespace Database\Seeders;

use App\Models\Directive;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirectiveSeeder extends Seeder
{

    public function run(): void
    {
        Directive::truncate();

        $csvFile = fopen(base_path("database/data/od.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Directive::create([
                    "number" => $data['0'],
                    "reference" => $data['1'],
                    "title" => $data['2'],
                    "effective_date" => $data['3'],
                    "expiry_condition" => $data['4'],
                    "status" => $data['5'],
                    "url" => $data['6'],
                    "prepared_by" => $data['7'],
                    "endorsed_by" => $data['8'],
                    "endorsed_at" => $data['9'],
                    "checked_by" => $data['10'],
                    "checked_at" => $data['11'],
                    "approved_by" => $data['12'],
                    "approved_at" => $data['13'],
                    "publisher" => $data['14'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
