<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function login(Request $req){      
      $retorno =  DB::select('call sp_usr_valida_login(?,?)', [$req['usuario'],$req['senha']]);      
      if (count($retorno)==1) {
        return view('admin');        
      }else{
        return view('index');
      }                  
    }

    public function simulacao(){
      return view ('simulacao');
    }

    public function enviarDados(Request $req){                  
      
      $nome = $req['nome'];
      $email = $req['email'];
      $idade = $req['idade'];
      $telefone = $req['telefone'];                  
      $dependentes = $req['dependentes'];
      $last_record = DB::select('call sp_clt_insere(?,?,?,?,?)', [$nome,$email,$idade,$telefone,$dependentes]);                         
      $last_id = $last_record[0]->clt_id_int; 
      $paramBag = $req->request;      
      foreach ($paramBag as $key => $value) {                                                                        
        if(strpos($key,'dependente_') !== false)
        {                                                               
          $idade = (int)$req[$key];                                                   
          DB::select('call  sp_idt_insere(?,?)', [$last_id,$idade]);                    
        }        
      }
      /*
      sleep(3);
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo "<h5 class='text-primary text-center'>Registro inserido com sucesso</h5>";
      return view('index');
      */



      
    }
}
