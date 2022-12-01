<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filtragens_quimicas_model extends CI_Model
{
    public function listar()
    {
        return $this->db->get('app_filtragem_quimica')->result();
    }

    public function adicionar($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_filtragem_quimica', $dados);
        }
    }

    public function getById($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_filtragem_quimica')->row();
        }
    }


    public function atualizar($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_filtragem_quimica', $dados, $condicao);
        }
    }

    public function deletar($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_filtragem_quimica', ['id' => $id]);
        }
    }
}
