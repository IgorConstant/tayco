
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site_model extends CI_Model
{

    public function listarBanners()
    {
        return $this->db->get('app_banner')->result();
    }

    public function listarProdutos()
    {
        return $this->db->get('app_product')->result();
    }

    public function getProductInd($id = NULL)
    {
        $this->db->where('id', $id);
        return $this->db->get('app_product')->result();
    }

    public function getProductBySlug($slug = NULL)
    {
        $this->db->where('slug', $slug);
        return $this->db->get('app_product')->result();
    }

    public function getGalleryInd($id = NULL)
    {
        $this->db->where('id_app_product', $id);
        return $this->db->get('app_gallery')->result();
    }

    public function getAcessoriesInd($id = NULL)
    {
        $this->db->where('id_app_product', $id);
        return $this->db->get('app_acessorio')->result();
    }

    public function pageAcessories($id = NULL)
    {
        $this->db->where('id', $id);
        return $this->db->get('app_acessorio')->result();
    }

    public function listarPosts()
    {
        return $this->db->get('app_blog')->result();
    }

    public function getPostInd($id = NULL)
    {
        $this->db->where('id', $id);
        return $this->db->get('app_blog')->result();
    }

    public function buscar_cores_produto( $id )
    {
        $q = $this->db->query("SELECT GROUP_CONCAT(`nome_cor` separator ', ') AS cores FROM app_cor WHERE id IN (SELECT cor_id FROM app_produto_tem_cor WHERE produto_id = $id)")->row();
        return $q->cores;
    }

    public function buscar_linhas_produto( $id )
    {
        $q = $this->db->query("SELECT GROUP_CONCAT(`nome_linha` separator ', ') AS linhas FROM app_linha WHERE id IN (SELECT linha_id FROM app_produto_tem_linha WHERE produto_id = $id)")->row();
        return $q->linhas;
    }


    public function buscar_mecanicas_produto( $id )
    {
        $q = $this->db->query("SELECT GROUP_CONCAT(`nome_filtragem` separator ', ') AS mecanicas FROM app_filtragem_mecanica WHERE id IN (SELECT filtragem_id FROM app_produto_tem_filtragem_mecanica WHERE produto_id = $id)")->row();
        return $q->mecanicas;
    }
}

/* End of file ModelName.php */
