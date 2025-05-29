<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'titolo' => 'Ottimo prodotto',
                'testo' => 'Mi sono trovato benissimo!',
                'valutazione' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titolo' => 'Non soddisfatto',
                'testo' => 'Il prodotto non ha rispettato le aspettative.',
                'valutazione' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titolo' => 'Servizio clienti eccellente',
                'testo' => 'Supporto rapido e gentile.',
                'valutazione' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
