<?php

namespace Database\Seeders;

use App\Models\Diak;
use App\Models\Osztaly;
use Illuminate\Database\Seeder;

class DiakSeeder extends Seeder
{
    public function run(): void
    {

        $osztalyok = Osztaly::all();

        foreach ($osztalyok as $osztaly) {

            Diak::create([
                'name' => $osztaly->name . ' béla 1',
                'osztaly_id' => $osztaly->id,
            ]);

            Diak::create([
                'name' => $osztaly->name . ' béla 2',
                'osztaly_id' => $osztaly->id,
            ]);
        }
    }
}