<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produto_tem_tipo_produto_model extends CI_Model
{

    public function salvar($produto, $tipo)
    {
        $this->produto_id    	= $produto;
        $this->tipo_id    		= $tipo;
        
        return $this->db->insert('app_produto_tem_tipo_produto', $this);
    }


    public function limpar_por_produto( $produto )
    {
        return $this->db->query("DELETE FROM app_produto_tem_tipo_produto WHERE produto_id = $produto");
    }


    public function verificar_pertence_produto( $produto, $tipo )
    {
        $q = $this->db->query("SELECT COUNT(*) AS qtd FROM app_produto_tem_tipo_produto WHERE produto_id = $produto AND tipo_id = $tipo")->row();
        return $q->qtd;
    }

}
