<?php

namespace Database\Seeders;

use App\Models\Osztaly;
use Illuminate\Database\Seeder;

class OsztalySeeder extends Seeder
{
    const OSZTALYOK = [
        '9b',
        '10c',
        '11e',
        '12g',
        '13p',
    ];

    public function run(): void
    {
        foreach (self::OSZTALYOK as $name) {
            Osztaly::create([
                'name' => $name,
            ]);
        }
    }
}