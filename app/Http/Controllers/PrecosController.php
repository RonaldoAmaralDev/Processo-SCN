<?php

namespace App\Http\Controllers;
use App\Models\Clientes;
use App\Models\Precos;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;

class PrecosController extends Controller
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

        $precos = DB::table('precos')
                  ->select('clientes.cpf_cnpj as cliente_codigo',
                           'clientes.nome as cliente_nome',
                           'produtos.codigo as produto_codigo',
                           'produtos.descricao as produto_descricao',
                           'produtos.custo as produto_custo',
                           'produtos.margem as produto_margem',
                           'precos.valor as valor')
                  ->join('clientes', 'clientes.id', '=', 'precos.cliente_id')
                  ->join('produtos', 'produtos.id', '=', 'precos.produto_id')
                  ->orderBy('produtos.descricao', 'ASC')
                  ->get();


        return view('precos.index', compact('precos'));
    }

    //API

    public function api_listagem()
    {
        $precos = DB::table('precos')
            ->select('clientes.cpf_cnpj as cliente_codigo',
                'clientes.nome as cliente_nome',
                'produtos.codigo as produto_codigo',
                'produtos.descricao as produto_descricao',
                'produtos.custo as produto_custo',
                'produtos.margem as produto_margem',
                'precos.valor as valor')
            ->join('clientes', 'clientes.id', '=', 'precos.cliente_id')
            ->join('produtos', 'produtos.id', '=', 'precos.produto_id')
            ->orderBy('produtos.descricao', 'ASC')
            ->get();

        return $precos;

    }


}
