<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produto_tem_filtragem_quimica_model extends CI_Model
{

    public function salvar($produto, $filtragem)
    {
        $this->produto_id    	= $produto;
        $this->filtragem_id     = $filtragem;
        
        return $this->db->insert('app_produto_tem_filtragem_quimica', $this);
    }


    public function limpar_por_produto( $produto )
    {
        return $this->db->query("DELETE FROM app_produto_tem_filtragem_quimica WHERE produto_id = $produto");
    }


    public function verificar_pertence_produto( $produto, $filtragem )
    {
        $q = $this->db->query("SELECT COUNT(*) AS qtd FROM app_produto_tem_filtragem_quimica WHERE produto_id = $produto AND filtragem_id = $filtragem")->row();
        return $q->qtd;
    }

}
