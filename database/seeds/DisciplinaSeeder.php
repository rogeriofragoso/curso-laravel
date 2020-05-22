<?php

use Illuminate\Database\Seeder;
use App\Model\Disciplina;
use App\Model\Professor;


class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Disciplina::class,40)->create();
    }
}
