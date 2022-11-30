<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Banners extends CI_Controller
{
    //Construtor
    public function __construct()
    {

        parent::__construct();

        //Load do Model
        $this->load->model('banners_model');

        //Load Form_validation
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->listarbanners();
    }

    public function listarbanners()
    {
        //Titulo
        $data['titulo_site'] = 'Gerenciador';
        $data['titulo_pagina'] = 'Banners';
        $data['app_home'] = $this->banners_model->listarBanners();


        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/banners/bannerList');
        $this->load->view('dashboard/footer');
    }


    public function adicionarbanner()
    {
        $this->form_validation->set_rules('tituloBanner', 'Titulo Banner', 'trim|required');
        $this->form_validation->set_rules('legendaBanner', 'Legenda Banner', 'trim|required');
        $this->form_validation->set_rules('textoSuporte', 'Texto Suporte', 'trim|required');
        $this->form_validation->set_rules('linkBanner', 'Link Banner', 'trim|required');

        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './upload/banners';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '3048';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('bannerHome')) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro!</div>');
                redirect('banners/adicionarbanner');
            } else {

                $inputAdicionarBanner['titulo_banner'] = $this->input->post('tituloBanner');
                $inputAdicionarBanner['legenda_banner'] = $this->input->post('legendaBanner');
                $inputAdicionarBanner['texto_suporte'] = $this->input->post('textoSuporte');
                $inputAdicionarBanner['link_banner'] = $this->input->post('linkBanner');
                $inputAdicionarBanner['imagem'] = $this->upload->data('file_name');


                $this->banners_model->criarBanner($inputAdicionarBanner);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Banner Adicionado com Sucesso!</div>');
                redirect('banners', 'refresh');
            }
        } else {


            //Titulo
            $data['titulo_site'] = 'Módulo Banner';
            $data['titulo_pagina'] = 'Adicionar Banner';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/banners/bannerAdd');
            $this->load->view('dashboard/footer');
        }
    }

    public function apagarbanners($id = NULL)
    {

        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você deve selecionar um Banner</div>');
            redirect('banners', 'refresh');
        }

        $query = $this->banners_model->getBannerID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Banner não encontrado</div>');
        }

        $this->banners_model->apagarBanner($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Banner Apagado com Sucesso!</div>');
        redirect('banners', 'refresh');
    }
}
