<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppController extends Controller
{
    // 
    public function index()
    {
        return view('index');
    }

    public function cont()
    {
        return view('contato');
    }

    public function log()
    {
        return view('login');
    }

    public function testlog(Request $request)
    {
         
        //$sql = DB::select("SELECT * FROM senhas");
        $userName  =  $request->uname;
        $userPass  =  $request->pwd;

        //if(($userName == "admin") && $userPass == "admin")
          return redirect()->action('AppController@dedut'); 
    }

    public function dedut()
    {
        $sql = DB::select("SELECT * FROM PECLD");
        $datetime1 = new \DateTime('07-10-2014');
        $datetime2 = new \DateTime('06-10-2014');
        $dedutivel = 'Dedutivel';
        $indedutivel = 'Indedutivel';
             if($sql)
             {
                  foreach($sql as $caso)
                  {
                       $id = $caso->id;
                       $valorConta = $caso->valorConta;
                       $vencimento = $caso->vencimento;
                       $creditoGarantia = $caso->creditoGarantia;
                       $cobrancaAdm = $caso->cobrancaAdm;
                       $processoJudicial = $caso->processoJudicial;
                       
                       //caso 1 da hiposte 1
                       if(($valorConta <= 5000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                       {
                            //echo"Dedutivel por H1 "; //teste
                            $hipotese = "1.1";
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");

                            //UPDATE table1 set v1 == '$v1', v2 == '$v2', v3 == '$v3', v4 == '$v4' WHERE id = 1
                       }else if(($valorConta <= 5000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                       {
                            //echo" Dedutivel por H2"; //teste
                            $hipotese = '1.2';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(($valorConta <= 5000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                       {
                          //  echo"Dedutivel por H3"; //teste
                            $hipotese = '1.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }
                       else if(($valorConta <= 5000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                       {
                            echo"Dedutivel por H4";//teste
                            $hipotese = '1.4'; 
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       //caso 2 da hiposte 2 
                       }else if(((5000.01 < $valorConta) && ($valorConta <= 30000)) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '2.1';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }else if(((5000.01 < $valorConta) && ($valorConta <= 30000)) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '2.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(((5000.01 < $valorConta) && ($valorConta <= 30000)) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '2.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }
                       else if(((5000.01 < $valorConta) && ($valorConta <= 30000)) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '2.4';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       //caso 3 da hiposte 3
                       }else if(($valorConta > 30000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '3.1';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }else if(($valorConta > 30000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '3.2';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }else if(($valorConta > 30000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '3.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }
                       else if(($valorConta > 30000) && ($vencimento < $datetime1) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '3.4';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       //caso 4 da hiposte 4 
                       }else if(($valorConta > 0) && ($vencimento < $datetime1) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                       {
                       $hipotese = '4.1';
                       DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(($valorConta > 0) && ($vencimento < $datetime1) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '4.2';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }else if(($valorConta > 0) && ($vencimento < $datetime1) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '4.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }
                       else if(($valorConta > 0) && ($vencimento < $datetime1) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '4.4';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       //caso 5 da hiposte 5 
                       }else if(($valorConta <= 15000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '5.1';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(($valorConta <= 15000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '5.2';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(($valorConta <= 15000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '5.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }
                       else if(($valorConta <= 15000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '5.4';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       //caso 6 da hiposte 6 
                       }else if(((15000.01  < $valorConta) && ($valorConta > 100000)) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '6.1';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }else if(((15000.01  < $valorConta) && ($valorConta > 100000)) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '6.2';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(((15000.01  < $valorConta) && ($valorConta > 100000)) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '6.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }
                       else if(((15000.01  < $valorConta) && ($valorConta > 100000)) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '6.4';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       //caso 7 da hiposte 7 
                       }else if(($valorConta > 100000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '7.1';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }else if(($valorConta >  100000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '7.2';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }else if(($valorConta > 100000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '7.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }
                       else if(($valorConta >  100000) && ($vencimento > $datetime2) && ($creditoGarantia == 'N') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '7.4';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       //caso 8 da hiposte 8 
                       }else if(($valorConta <= 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '8.1';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(($valorConta <= 50000 ) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '8.2';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(($valorConta <= 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '8.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }
                       else if(($valorConta <= 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '8.4';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       //caso 9 da hiposte 9
                       }else if(($valorConta > 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '9.1';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(($valorConta > 50000 ) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'S') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '9.2';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }else if(($valorConta > 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'S'))
                       {
                            $hipotese = '9.3';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$dedutivel' WHERE id = '$id'");
                       }else if(($valorConta > 50000) && ($vencimento > $datetime2) && ($creditoGarantia == 'S') && ($cobrancaAdm == 'N') && ($processoJudicial == 'N'))
                       {
                            $hipotese = '9.4';
                            DB::update("UPDATE PECLD  SET hipotese = '$hipotese', dedutibilidade = '$indedutivel' WHERE id = '$id'");
                       }else 
                       {
                        echo "Erro! Entre em contato com Argos Contabilidade";
                        return redirect()->action('AppController@index'); // caso dê erro.
                  }
             }    
        } //end   
   return view('dedut'); //return redirect()->action('AppController@list');
}

    public function list()
    {
        $sql = DB::select("SELECT * FROM teste");
        return view('list')->with('sql', $sql);
    }
}




