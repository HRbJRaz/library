<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        $csvFile = fopen(base_path("database/data/users.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    "name" => $data['0'],
                    "gred" => $data['1'],
                    "division" => $data['2'],
                    "unit" => $data['3'],
                    "email" => $data['4'],
                    "password" => env('DEFAULT_PASSWORD'),
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile); //
    }
}
