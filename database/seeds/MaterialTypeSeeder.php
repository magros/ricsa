<?php

use App\MaterialType;
use Illuminate\Database\Seeder;

class MaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $Types = [
            'ACERO AL CARBON',
            'ACERO FORJADO',
            'ACERO INOXIDABLE',
            'BRONCE',
            'BUNA-N',
            'EPDM',
            'ESTAÑO',
            'FUND NODULAR',
            'GARLOCK',
            'GYLON BLUE',
            'HIERRO COLADO',
            'HULE SANITARIO',
            'LATON'

        ];
        foreach($Types as $type){
            MaterialType::firstOrCreate(['name'=>$type]);
        }
    }
}
