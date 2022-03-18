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

        $newTrains = new Train();


        $newTrains->azienda = 'Italo';
        $newTrains->stazione_di_partenza = 'FirenzeSMN';
        $newTrains->stazione_di_arrivo = 'MilanoCTL';
        $newTrains->orario_di_partenza = '12:03';
        $newTrains->orario_di_arrivo = '13:32';
        $newTrains->codice_treno_numero = 'AJSID223A';
        $newTrains->carrozze = 6;
        $newTrains->in_orario = 0;
        $newTrains->cancellato = 1;

        $newTrains->save();
    }
}
