<?php

use App\Model\Disciplina;
use App\Model\Professor;
use Illuminate\Database\Seeder;

class DisciplinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $professor = Professor::first();
        Disciplina::create(
            [
                'nome'=>'Banco de dados',
                'professor_id'=> $professor->id
            ]
        );
    }
}
