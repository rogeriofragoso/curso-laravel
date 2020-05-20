<?php

use Illuminate\Database\Seeder;

class ProfessoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('professores')
            ->insert([
                [
                    'nome'=>'Joao da Silva'
                ],
                [
                    'nome'=>'Silva do Joao'
                ],
            ]                
            );
    }
}
