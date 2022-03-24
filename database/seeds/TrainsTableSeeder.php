<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        $trains = [
            [
            'azienda' => 'Trenitalia',
            'stazione_partenza' => 'Milano',
            'stazione_arrivo' => 'Torino',
            'orario_partenza' => '12:30',
            'orario_arrivo' => '14:30',
            'codice_treno' => '540959',
            'carrozze' => '1004BA',
            'in_orario' => true,
            'cancellato'  => false,
            ],
            [
            'azienda' => 'Trenitalia',
            'stazione_partenza' => 'Torino',
            'stazione_arrivo' => 'Milano',
            'orario_partenza' => '18:30',
            'orario_arrivo' => '20:30',
            'codice_treno' => '541239',
            'carrozze' => '1005BA',
            'in_orario' => false,
            'cancellato'  => false,
            ]

        ];

        
        foreach($trains as $train) {
            $my_train = new Train();
            $my_train->fill($train);
            $my_train->save();
        }
        
    }
}
