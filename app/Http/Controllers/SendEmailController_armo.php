<?php

namespace App\Http\Controllers;

use App\Mail\SendMail_armo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController_armo extends Controller
{
    function index()
    {
        return view('parceiro-armo');
    }
    function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
        ]);


        $data = array(
            'name' => $request->name,
            'check1' => $request->check1,
        );

        $name = $request->input('name');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $empresa = $request->input('empresa');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $termos = $request->input('termos');

        $data1 = Carbon::now();

        $storage=array('name' => $name,'email'=>$email,'data'=>$data1,'telefone'=>$telefone,
            'empresa'=>$empresa,'cidade'=>$cidade,'estado'=>$estado,'termos'=>$termos);
        DB::table('cadastros_armo')->insert($storage);

        Mail::to($request->email)->send(new SendMail_armo($data));

        return back()->with('Success','Cadastro concluído com sucesso, verifique seu e-mail!');
    }
    public function rules()
    {
        return [

        ];
    }

    public function mailindex()
    {
        return view('dynamic_email_template1');
    }
}
