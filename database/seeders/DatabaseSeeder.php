<?php

namespace Database\Seeders;

use App\Models\Course\Course;
use App\Models\Course\CourseModule;
use App\Models\Course\CourseModuleClass;
use App\Models\Course\CourseModuleClassQuestion;
use App\Models\Course\CourseModuleClassQuestionAnswer;
use App\Models\Course\CourseModuleClassResource;
use App\Models\Course\CourseModuleClassVideo;
use App\Models\Course\CourseReview;
use App\Models\User;
use App\Models\Clientes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();

        DB::table('clientes')->insert([
            'nome' => 'Empresa 1',
            'cpf_cnpj' => '53.923.866/0001-30',
            'endereco_residencial_cep' => '307105-40',
            'endereco_residencial_numero' => '360',
            'endereco_residencial_complemento' => 'Apto 101',
            'endereco_comercial_cep' => '312300-60',
            'endereco_comercial_numero' => '120',
            'endereco_comercial_complemento' => 'CASA'
        ]);

        DB::table('clientes')->insert([
            'nome' => 'Pessoa 1',
            'cpf_cnpj' => '995.441.905-54',
            'endereco_residencial_cep' => '307105-30',
            'endereco_residencial_numero' => '607',
            'endereco_residencial_complemento' => 'Apto 302',
            'endereco_comercial_cep' => '',
            'endereco_comercial_numero' => '',
            'endereco_comercial_complemento' => ''
        ]);

        DB::table('produtos')->insert([
            'descricao' => 'Cheques Sem Fundo',
            'codigo' => 'CCF',
            'custo' => '1',
            'margem' => '100'
        ]);

        DB::table('produtos')->insert([
            'descricao' => 'Anotações Negativas',
            'codigo' => 'NEG',
            'custo' => '2',
            'margem' => '50'
        ]);

        DB::table('produtos')->insert([
            'descricao' => 'Veicular Estadual',
            'codigo' => 'EST',
            'custo' => '1.5',
            'margem' => '75'
        ]);

        DB::table('produtos')->insert([
            'descricao' => 'Rodas e Pneus',
            'codigo' => 'REP',
            'custo' => '0.5',
            'margem' => '150'
        ]);

        DB::table('produtos')->insert([
            'descricao' => 'Completa',
            'codigo' => 'COMP',
            'custo' => '10',
            'margem' => '20'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '1',
            'produto_id' => '1',
            'valor' => '2.5'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '1',
            'produto_id' => '2',
            'valor' => '3'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '1',
            'produto_id' => '3',
            'valor' => '3'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '1',
            'produto_id' => '4',
            'valor' => '1'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '1',
            'produto_id' => '5',
            'valor' => '15'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '2',
            'produto_id' => '1',
            'valor' => '1.9'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '2',
            'produto_id' => '2',
            'valor' => '3'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '2',
            'produto_id' => '3',
            'valor' => '3.5'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '2',
            'produto_id' => '4',
            'valor' => '1.5'
        ]);

        DB::table('precos')->insert([
            'cliente_id' => '2',
            'produto_id' => '5',
            'valor' => '11'
        ]);


    }

}
