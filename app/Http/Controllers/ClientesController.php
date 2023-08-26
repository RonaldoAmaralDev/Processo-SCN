<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Clientes;
use RealRashid\SweetAlert\Facades\Alert;


use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Clientes::get();


        return view('clientes.index', compact('clientes'));
    }


    public function NovoCliente() {

        return view('clientes.novocliente');

    }

    public function ClienteAdd(Request $request) {

        $carbon= Carbon::now();

        //Verifica se já existe um e-mail cadastrado
        $verifica = Clientes::wherecpf($request->get('novocliente_codigo'))->count();

        if($verifica > 0) {

            Alert::error('Erro!', 'Já existe um registro cadastrado com este CPF.');

        }
        //Insert na tabela produtos
            $values = array(
        
              'nome' => $request->get('novocliente_nome'),
              'cpf' => $request->get('novocliente_codigo'),
              'dt_nascimento' => $request->get('novocliente_dtnascimento'),
              'sexo' => $request->get('novocliente_sexo'),
              'endereco' => $request->get('novocliente_endereco'),
              'cidade' => $request->get('novocliente_cidade'),
              'uf' => $request->get('novocliente_uf'),
              'created_at' => $carbon            );
            DB::table('clientes')->insert($values);  

        //Insert na tabela log
        $values = array(
            'user_id' => Auth::user()->id, 
            'descricao' => "Criação de um novo cliente: " . $request->get('novocliente_nome'),
            'created_at' => $carbon);
            DB::table('log')->insert($values);  


        Alert::success('Novo cliente!', 'Cliente cadastrado com sucesso!');

        return redirect()->route('clientes.index');

    } 

    public function ViewCliente($id) {


        $clientes = Clientes::whereId($id)->first();

        return view('clientes.view');

    }

    public function OcultarCliente($id) {

        $carbon= Carbon::now();

        Clientes::where('id',$id)->delete();

        Alert::success('Excluido!', 'Cliente excluido com sucesso!');

        return redirect()->route('clientes.index');

    }

    //API

    public function clientes_index_api()
    {
        return Clientes::all();


    }

    public function view_clientes_api(Clientes $clientes)
    {

        return $clientes;
    }

    public function insert_clientes_api(Request $request)
    {
        $clientes = Clientes::create($request->all());

        return response()->json($clientes, 201);
    }

    public function update_clientes_api(Request $request, Clientes $transacao)
    {
        $clientes->update($request->all());

        return response()->json($clientes, 200);
    }

    public function delete_clientes_api(Clientes $transacao)
    {
        $clientes->delete();

        return response()->json(null, 204);
    }




}