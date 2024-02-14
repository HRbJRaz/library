<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publication::truncate();

        $csvFile = fopen(base_path("database/data/publications.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Publication::create([
                    "type" => $data['0'],
                    "number" => $data['1'],
                    "reference" => $data['2'],
                    "title" => $data['3'],
                    "issue_date" => $data['4'],
                    "url" => $data['5'],
                    "publisher" => $data['6'],
                    "prepared_by" => $data['7'],
                    "approved_by" => $data['8'],
                    "approved_at" => $data['9'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
