<?php

class  Ctrl_Api2 extends \zfx\Controller 
{
   public $db, $retorno, $parms, $metodo;

    public function _init()
     {
        $this->db = New \zfx\DB();
     }

   public function _main()
     {
        $this->parms = New stdClass();
        $this->metodo = $_SERVER['REQUEST_METHOD'];            // obtenemos el metodo
        $this->parms->metodo = $this->metodo;
        $res = $this->_autoexec();
        if (!$res) 
           die("Action not found");
     }

   public function login()
     {
         if ($this->metodo === 'POST') 
          $this->login_post();   // Es una petición POST
         elseif ($this->metodo === 'DELETE') 
          $this->logout();
     }

   private function login_post()
     {
       // $this->parms->login = $_POST['login'];
       $json_data = file_get_contents('php://input');
       $this->parms->data = json_decode($json_data, true);
        echo "login" . var_dump($this->parms);
     }

   private function logout()
     {
        $this->parms->login = $_POST['login'];
        echo "logout" . var_dump($this->parms);
     }
}