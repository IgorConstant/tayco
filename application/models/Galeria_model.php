<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeria_model extends CI_Model
{

  // Função para editar as galerias.
  public function getGallerybyProject($id = NULL)
  {
    if ($id) {
      $this->db->where('id', $id);
      $this->db->limit(1);
      return $this->db->get('app_gallery')->row();
    }
  }

  // Lista todas as imagens dentro da query que está no controller Site.
  function listarImagensProjeto($id = NULL)
  {
    $this->db->where('id_app_product', $id);
    return $this->db->get('app_gallery')->result();
  }


  // Insert de imagens múltiplas, no controller Galeria
  public function multipleImages($image = array())
  {
    return $this->db->insert_batch('app_gallery', $image);
  }


  public function listarGalerias()
  {
    return $this->db->get('app_gallery')->result();
    $this->db->limit(1);
  }


  public function deletarGaleria($id = NULL)
  {
    if ($id) {
      $this->db->delete('app_gallery', ['id' => $id]);
    }
  }
}
