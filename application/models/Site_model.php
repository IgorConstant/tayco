
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
}

/* End of file ModelName.php */
