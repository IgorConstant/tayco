<?php

class Blog_model extends CI_Model
{

    public function listarPosts()
    {
        return $this->db->get('app_blog')->result();
    }

    public function addPost($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_blog', $dados);
        }
    }

    public function getPostID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_blog')->row();
        }
    }

    public function apagarPost($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_blog', ['id' => $id]);
        }
    }

    public function atualizarPost($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_blog', $dados, $condicao);
        }
    }
}
