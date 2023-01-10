<?php

namespace Database\Seeders;


use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->azienda = 'Trenitalia';
            $new_train->stazione_di_partenza = 'Termini';
            $new_train->stazione_di_arrivo = 'Stazione Centrale';
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->randomNumber(4, true);
            $new_train->numero_carrozze = $faker->randomDigitNotNull();
            $new_train->is_on_time = $faker->boolean();
            $new_train->is_canceled = $faker->boolean();
            $new_train->save();
        }

        // $new_train = new Train();
        // $new_train->azienda = 'Trenitalia';
        // $new_train->stazione_di_partenza = 'Termini';
        // $new_train->stazione_di_arrivo = 'Stazione Centrale';
        // $new_train->orario_di_partenza = '11:00:00';
        // $new_train->orario_di_arrivo = '17:00:00';
        // $new_train->codice_treno = '1111';
        // $new_train->numero_carrozze = '5';
        // $new_train->is_on_time = '1';
        // $new_train->is_canceled = '0';
        // $new_train->save();
    }
}
