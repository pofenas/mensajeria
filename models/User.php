<?php
class user
{
    
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function buscarRegistro($numero) // busca en BD si el numero está registrado. Devuelve el id_usuario
    {
        $qry = "
        SELECT id_usuario 
        FROM registro
        WHERE numero = $numero";
        $ret = $this->db->qo($qry);
        return $ret;
    }


}