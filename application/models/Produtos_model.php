<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produtos_model extends CI_Model
{
    public function listarProdutos()
    {
        return $this->db->get('app_product')->result();
    }

    public function addProduto($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_product', $dados);
        }
    }

    public function getprodutoID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_product')->row();
        }
    }

    public function apagarProduto($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_product', ['id' => $id]);
        }
    }

    public function atualizarProduto($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_product', $dados, $condicao);
        }
    }

    public function get_products() {
        $this->db->select('slug');
        $query = $this->db->get('app_product');
        return $query->result();
    }
}
