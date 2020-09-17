<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadCertController extends Controller
{
    public function index()
    {
        return view('cadcert');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nome' => 'required',
            'email' => 'required|email',
            'g-recaptcha-response'=>'required',
            'telefone' => 'required',
            'empresa' => 'required',
            'rate' => 'required',
            'termos' => 'required',
            'cidade' => 'required',
            'estado'=> 'required',
        ]);
        $nome = $request->input('nome');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $empresa= $request->input('empresa');
        $rate = $request->input('rate');
        $termos = $request->input('termos');
        $treinamento = $request->input('treinamento');
        $comentario = $request->input('comentario');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $data1 = Carbon::now();

        $data=array('nome' => $nome,'email'=>$email,'telefone'=>$telefone,
            'empresa'=>$empresa,'rate'=>$rate,'termos'=>$termos,'treinamento'=>$treinamento,'comentario'=>$comentario
        ,'cidade'=>$cidade,'estado'=>$estado,'data'=>$data1);
        DB::table('cad')->insert($data);

        return back()->with('Success','Cadastro concluído com sucesso,em breve enviaremos o certificado!');
    }

}
