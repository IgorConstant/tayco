<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produto_tem_linha_model extends CI_Model
{

    public function salvar($produto, $linha)
    {
        $this->produto_id    	= $produto;
        $this->linha_id    		= $linha;
        
        return $this->db->insert('app_produto_tem_linha', $this);
    }


    public function limpar_por_produto( $produto )
    {
        return $this->db->query("DELETE FROM app_produto_tem_linha WHERE produto_id = $produto");
    }


    public function verificar_pertence_produto( $produto, $linha )
    {
        $q = $this->db->query("SELECT COUNT(*) AS qtd FROM app_produto_tem_linha WHERE produto_id = $produto AND linha_id = $linha")->row();
        return $q->qtd;
    }

}
