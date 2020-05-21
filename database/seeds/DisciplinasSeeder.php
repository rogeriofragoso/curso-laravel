<?php

use Illuminate\Database\Seeder;
use App\Model\Disciplina;
use App\Model\Professor;


class DisciplinassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professor = Professor::first();
        Disciplina::create(
            [
                'nome'=>'Algoritmos',
                'professor_id'=>$professor->id
            ]
        );
    }
}
