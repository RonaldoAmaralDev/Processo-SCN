<?php

namespace App\Http\Controllers;
use App\Models\Precos;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;

class RelatoriosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth:web');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('relatorios.index');
    }

    public function relatorio_import(Request $request) {


        //Limpa a tabela provisoria do relatório
        DB::table('temp_relatorio_import')->delete();


        //Pega o arquivo CSV e suas informações


        $row = 1;
        $arrResult  = array();
        if (($handle = fopen($request->file('file'), "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);


                $quantidade = '';
                $custo_total = '';

                foreach($data as $row) {

                    $cliente_id = DB::table('clientes')->select('id')->where('cpf_cnpj', $row[1])->value('id');
                    $produto_id = DB::table('produtos')->select('id')->where('codigo', $row[2])->value('codigo');

                    $produto_custo = DB::table('produtos')->select('id')->where('id', $produto_id)->value('codigo');
                    $produto_margem = DB::table('produtos')->select('margem')->where('id', $produto_id)->value('margem');

                    $valor_venda = DB::table('precos')->select('valor')->where('cliente_id', $cliente_id)->where('produto_id', $produto_id)->value('valor');

                    //Calcula e vai somando a quantidade x custo
                    $custo_total = $row[3] * $produto_custo;
                    $valor_venda = $row[3] * $valor_venda;



                }


                //Verifica se já foi inserido o

//                DB::table('banks')->insert(
//                    array('bank_name' => $data[1], 'ifsc' => $data[2], 'micr' => $data[3], 'branch_name' => $data[4],'address' => $data[5], 'contact' => $data[6], 'city' => $data[7],'district' => $data[8],'state' => $data[9])
//                );
            }
            fclose($handle);
        }

    }


}
