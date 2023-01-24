<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tags_model extends CI_Model
{

    // Listar Tags
    public function listarTags()
    {
        return $this->db->get('app_tags')->result();
    }

    public function getTagID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_tags')->row();
        }
    }

    public function atualizarTag($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_tags', $dados, $condicao);
        }
    }
}
