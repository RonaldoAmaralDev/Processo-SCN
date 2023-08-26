<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Produtos;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;

class ProdutosController extends Controller
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

        $produtos = Produtos::get();


        return view('produtos.index', compact('produtos'));
    }


    public function create() {

        return view('produtos.create');

    }

    public function store(Request $request) {

        $carbon= Carbon::now();

        //Verifica se já existe um e-mail cadastrado
        $verifica = ProdutosController::wherecodigo($request->get('novoproduto_codigo'))->count();

        if($verifica > 0) {

            Alert::error('Erro!', 'Já existe um registro cadastrado com este CPF.');

        }
        //Insert na tabela produtos
        $values = array(

            'descricao' => $request->get('novoproduto_descricao'),
            'codigo' => $request->get('novoproduto_codigo'),
            'custo' => $request->get('novoproduto_custo'),
            'margem' => $request->get('novoproduto_margem'),
            'created_at' => $carbon
        );
        DB::table('produtos')->insert($values);

        //Insert na tabela log
        $values = array(
            'user_id' => 1,
            'descricao' => "Criação de um novo produto: " . $request->get('novocliente_nome'),
            'created_at' => $carbon);
        DB::table('log')->insert($values);


        Alert::success('Novo produto!', 'Produto cadastrado com sucesso!');

        return redirect()->route('produtos.index');

    }

    public function ViewProduto($id) {


        $produtos = Produtos::whereId($id)->first();

        return view('produtos.view', compact('produtos'));

    }

    public function delete($id) {

        $carbon= Carbon::now();

        Produtos::where('id',$id)->delete();

        Alert::success('Excluido!', 'Produto excluido com sucesso!');

        return redirect()->route('produtos.index');

    }






}
