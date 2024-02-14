<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Document::truncate();

        $csvFile = fopen(base_path("database/data/Documents.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Document::create([
                    "name" => $data['0'],
                    "type" => $data['1'],
                    "format" => $data['2'],
                    "number" => $data['3'],
                    "issue" => $data['4'],
                    "revision" => $data['5'],
                    "effective_date" => $data['6'],
                    "url" => $data['7'],
                    "coverpage" => $data['8'],
                    "owner" => $data['9'],
                    "reviewer" => $data['10'],
                    "review_date" => $data['11'],
                    "approver" => $data['12'],
                    "approval_date" => $data['13'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
