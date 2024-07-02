<?php

namespace Database\Seeders\Area;

use Database\Seeders\Utilitas\CsvtoArray;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // District::truncate();

        // $csvFile = fopen(base_path("database/data/districts.csv"), "r");

        // $firstline = true;
        // while (($data = fgetcsv($csvFile, 1000)) !== false) {
        //     if (!$firstline) {
        //         District::create([
        //             "code" => $data['0'],
        //             "regency_code" => $data['1'],
        //             "name" => $data['2'],
        //         ]);
        //     }
        //     $firstline = false;
        // }
        // fclose($csvFile);

        $csvFile = __DIR__ . '/../../data/districts.csv';
        $csv = new CsvtoArray();
        $header = ['code', 'regency_code', 'name'];
        $data = $csv->csv_to_array($csvFile, $header);
        $collection = collect($data);
        foreach ($collection->chunk(100) as $chunk) {
            DB::table(env('INDONESIA_AREA_TABLE_PREFIX', '') . 'districts')->insertOrIgnore($chunk->toArray());
        }
    }
}
