<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Galeria extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('logado') == TRUE) {

      $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
      redirect('login');
    }

    $this->load->model('galeria_model');
    $this->load->model('produtos_model');
    $this->load->library('form_validation');
    $this->load->helper('url');
  }

  public function index()
  {

    $data['titulo_site'] = 'Gerenciador';
    $data['titulo_pagina'] = 'Galeria';
    $data['app_gallery'] = $this->galeria_model->listarGalerias();

    $this->load->view('dashboard/header', $data);
    $this->load->view('dashboard/galeria/list');
    $this->load->view('dashboard/footer');
  }

  public function adicionarfotos()
  {

    $this->form_validation->set_rules('nomeProduto', 'Nome Produto', 'required', array('required' => 'É necessário vincular a um produto'));

    if ($this->form_validation->run() == TRUE) {
      $config['upload_path'] = './upload/galeria';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = '10048';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload', $config);


      $image = array();
      $ImageCount = count($_FILES['fotos']['name']);
      for ($i = 0; $i < $ImageCount; $i++) {
        $_FILES['file']['name'] = $_FILES['fotos']['name'][$i];
        $_FILES['file']['type'] = $_FILES['fotos']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['fotos']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['fotos']['error'][$i];
        $_FILES['file']['size'] = $_FILES['fotos']['size'][$i]; // Configuração do Upload da Imagem $uploadPath='upload/projetos' ; $config['upload_path']=$uploadPath; $config['allowed_types']='jpg|jpeg|png|gif' ; // Inicialização de Library Upload $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // Upload do Arquivo para o servidor
        if ($this->upload->do_upload('file')) {
          // Uploaded file data
          $imageData = $this->upload->data();
          $uploadImgData[$i]['fotos'] = $imageData['file_name'];
          $uploadImgData[$i]['id_app_product'] = $this->input->post('nomeProduto');
        }
      }

      if (!empty($uploadImgData)) {
        // Insert das Fotos no MYSQL
        $this->galeria_model->multipleImages($uploadImgData);
      }

      $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Banner Adicionado com Sucesso!</div>');
      redirect('galeria', 'refresh');
    } else {
      $data['titulo_site'] = 'Gerenciador';
      $data['titulo_pagina'] = 'Adicionar Fotos';
      $data['app_nameproduct'] = $this->produtos_model->listarProdutos();


      $this->load->view('dashboard/header', $data);
      $this->load->view('dashboard/galeria/add');
      $this->load->view('dashboard/footer');
    }
  }

  public function apagarfotos($id = NULL)
  {
    if (!$id) {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione uma Galeria</div>');
      redirect('galeria', 'refresh');
    }

    $query = $this->galeria_model->getGallerybyProject($id);

    if (!$query) {
      $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Galeria não encontrada.</div>');
    }


    $this->galeria_model->deletarGaleria($query->id);
    $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Galeria excluida com sucesso!</div>');
    redirect('galeria', 'refresh');
  }
}
