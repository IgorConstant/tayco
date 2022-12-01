<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filtragens_mecanicas_model extends CI_Model
{
    public function listar()
    {
        return $this->db->get('app_filtragem_mecanica')->result();
    }

    public function adicionar($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_filtragem_mecanica', $dados);
        }
    }

    public function getById($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_filtragem_mecanica')->row();
        }
    }


    public function atualizar($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_filtragem_mecanica', $dados, $condicao);
        }
    }

    public function deletar($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_filtragem_mecanica', ['id' => $id]);
        }
    }
}
