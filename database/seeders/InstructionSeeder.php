<?php

namespace Database\Seeders;

use App\Models\Instruction;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instruction::truncate();

        $csvFile = fopen(base_path("database/data/uoi.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Instruction::create([
                    "type" => $data['0'],
                    "number" => $data['1'],
                    "reference" => $data['2'],
                    "title" => $data['3'],
                    "effective_date" => $data['4'],
                    "expiry_condition" => $data['5'],
                    "status" => $data['6'],
                    "url" => $data['7'],
                    "publisher" => $data['8'],
                    "prepared_by" => $data['9'],
                    "endorsed_by" => $data['10'],
                    "endorsed_at" => $data['11'],

                    "reviewed_by" => $data['12'],
                    "reviewed_at" => $data['13'],
                    "approved_by" => $data['14'],
                    "approved_at" => $data['15'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
