<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();


class Tags extends CI_Controller
{


    //Construtor
    public function __construct()
    {

        parent::__construct();

        if (!$this->session->userdata('logado') == TRUE) {

            $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
            redirect('login');
        }

        //Load do Model
        $this->load->model('tags_model');

        //Load Form_validation
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->salvartags();
    }


    public function salvartags($id = 1)
    {

        $query = $this->tags_model->getTagID($id);
        $this->form_validation->set_rules('tagHeader', 'Tag Header', 'trim');
        $this->form_validation->set_rules('tagBody', 'Tag Body', 'trim');
        $this->form_validation->set_rules('tagFooter', 'Tag Footer', 'trim');

        if ($this->form_validation->run() == TRUE) {

            $inputStore['tag_header'] = $this->input->post('tagHeader');
            $inputStore['tag_body'] = $this->input->post('tagBody');
            $inputStore['tag_footer'] = $this->input->post('tagFooter');

            $this->tags_model->atualizarTag($inputStore, ['id' => $this->input->post('idTag')]);
            redirect('admin', 'refresh');
        
        
        } else {
            
            
            $data['titulo_pagina'] = 'Inserir Tags';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/tags/inserirTag');
            $this->load->view('dashboard/footer');
        }
    }
}
