<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')
            ->insert([
                [
                    'nome'=>'José da Silva'
                ],
                [
                    'nome'=>'João dos Santos'
                ],
            ]                
            );
    }
}
