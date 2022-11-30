<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acessorios_model extends CI_Model
{
    public function listarAcessorios()
    {
        return $this->db->get('app_acessorio')->result();
    }

    public function adicionarAcessorio($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_acessorio', $dados);
        }
    }

    public function getacessorioID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_acessorio')->row();
        }
    }


    public function atualizarAcessorio($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_acessorio', $dados, $condicao);
        }
    }

    public function deletarAcessorio($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_acessorio', ['id' => $id]);
        }
    }
}
