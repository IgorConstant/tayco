<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cores_model extends CI_Model
{
    public function listar()
    {
        return $this->db->get('app_cor')->result();
    }

    public function adicionar($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_cor', $dados);
        }
    }

    public function getById($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_cor')->row();
        }
    }


    public function atualizar($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_cor', $dados, $condicao);
        }
    }

    public function deletar($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_cor', ['id' => $id]);
        }
    }
}
