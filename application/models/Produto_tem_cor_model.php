<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produto_tem_cor_model extends CI_Model
{

    public function salvar($produto, $cor)
    {
        $this->produto_id    	= $produto;
        $this->cor_id    		= $cor;
        
        return $this->db->insert('app_produto_tem_cor', $this);
    }


    public function limpar_por_produto( $produto )
    {
        return $this->db->query("DELETE FROM app_produto_tem_cor WHERE produto_id = $produto");
    }


    public function verificar_cor_pertence_produto( $produto, $cor )
    {
        $q = $this->db->query("SELECT COUNT(*) AS qtd FROM app_produto_tem_cor WHERE produto_id = $produto AND cor_id = $cor")->row();
        return $q->qtd;
    }

}
