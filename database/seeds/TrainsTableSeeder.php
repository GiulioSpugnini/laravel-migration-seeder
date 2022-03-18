<?php

use Illuminate\Database\Seeder;
use App\models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trains = [
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'FirenzeSMN',
                'stazione_di_arrivo' => 'MilanoCTL',
                'orario_di_partenza' => '12:03',
                'orario_di_arrivo' => '13:32',
                'codice_treno_numero' => 'AJSID223A',
                'carrozze' => 6,
                'in_orario' => 0,
                'cancellato' => 1
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'RomaTRM',
                'stazione_di_arrivo' => 'Napoli',
                'orario_di_partenza' => '13:32',
                'orario_di_arrivo' => '16:45',
                'codice_treno_numero' => 'JIOD23DJAS',
                'carrozze' => 12,
                'in_orario' => 1,
                'cancellato' => 0
            ],
        ];
        foreach ($trains as $train) {

            $newTrains = new Train();

            $newTrains->azienda = $train['azienda'];
            $newTrains->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrains->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrains->orario_di_partenza = $train['orario_di_partenza'];
            $newTrains->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrains->codice_treno_numero = $train['codice_treno_numero'];
            $newTrains->carrozze = $train['carrozze'];
            $newTrains->in_orario = $train['in_orario'];
            $newTrains->cancellato = $train['cancellato'];

            $newTrains->save();
        }
    }
}
