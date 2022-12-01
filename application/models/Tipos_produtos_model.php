<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tipos_produtos_model extends CI_Model
{
    public function listar()
    {
        return $this->db->get('app_tipo_produto')->result();
    }

    public function adicionar($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_tipo_produto', $dados);
        }
    }

    public function getById($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_tipo_produto')->row();
        }
    }


    public function atualizar($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_tipo_produto', $dados, $condicao);
        }
    }

    public function deletar($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_tipo_produto', ['id' => $id]);
        }
    }
}
