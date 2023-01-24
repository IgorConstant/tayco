<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class Filtragens_mecanicas_admin extends CI_Controller
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
        $this->load->model('filtragens_mecanicas_model');

        //Load Form_validation
        $this->load->library('form_validation');

        //Load Helper URL
        $this->load->helper('url');
    }

    public function index()
    {
        $this->listar();
    }

    public function listar()
    {
        //Titulo
        $data['titulo_site']    = 'Gerenciador de Conteúdo';
        $data['titulo_pagina']  = 'Filtragens Mecânicas';
        $data['objetos']        = $this->filtragens_mecanicas_model->listar();


        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/filtragens_mecanicas/list');
        $this->load->view('dashboard/footer');
    }


    public function adicionar()
    {


        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'É necessário informar o nome'));
        $this->form_validation->set_rules('nome', 'Slug', 'required', array('required' => 'É necessário informar o slug'));


        if ($this->form_validation->run() == TRUE) {

            $inputAddAcessorio['nome_filtragem']    = $this->input->post('nome');
            $inputAddAcessorio['slug']              = $this->input->post('slug');


            $this->filtragens_mecanicas_model->adicionar($inputAddAcessorio);
            $this->session->set_flashdata('msg', '<div class="alert alert-success">Adicionado com sucesso!</div>');
            redirect('filtragens_mecanicas_admin', 'refresh');
        } else {


            //Titulo
            $data['titulo_site']    = 'Gerenciador de Conteúdo';
            $data['titulo_pagina']  = 'Adicionar Filtragem Mecânica';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/filtragens_mecanicas/add');
            $this->load->view('dashboard/footer');
        }
    }


    public function editar($id = NULL)
    {

        $query = $this->filtragens_mecanicas_model->getById($id);

        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'É necessário informar o nome'));
        $this->form_validation->set_rules('slug', 'Slug', 'required', array('required' => 'É necessário informar o slug'));

        if ($this->form_validation->run() == TRUE) {

            $inputEditAcessorio['nome_filtragem']   = $this->input->post('nome');
            $inputEditAcessorio['slug']             = $this->input->post('slug');

            $this->filtragens_mecanicas_model->atualizar($inputEditAcessorio, ['id' => $this->input->post('id')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Atualizado com sucesso!</div>');
            redirect('filtragens_mecanicas_admin', 'refresh');
        } else {

            //Titulo
            $data['titulo_pagina']  = 'Editar Filtragem Mecânica';
            $data['query']          = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/filtragens_mecanicas/edit');
            $this->load->view('dashboard/footer');
        }
    }


    public function apagar($id = NULL)
    {

        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você deve selecionar um objeto</div>');
            redirect('filtragens_mecanicas_admin', 'refresh');
        }

        $query = $this->filtragens_mecanicas_model->getById($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Objeto não encontrado</div>');
        }

        $this->filtragens_mecanicas_model->deletar($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Apagado com Sucesso!</div>');
        redirect('filtragens_mecanicas_admin', 'refresh');
    }
}
