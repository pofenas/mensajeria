<?php

class  Ctrl_Api2 extends \zfx\Controller 
{
    public $db, $retorno, $parms;

    public function _init()
     {
        $this->db = New \zfx\DB();
     }
    public function _main()
     {
        $parms = New object();
        $parms->metodo = $_SERVER['REQUEST_METHOD'];            // obtenemos el metodo
        $parms->parametros = json_decode(file_get_contents('php://input'),true); // y los parametros de la llamada
        $res = $this->_autoexec();
        if (!$res) 
           die("Action not found");
     }
    public function login()
     {
        echo var_dump($parms);
     }
}