<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class Cores_admin extends CI_Controller
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
        $this->load->model('cores_model');

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
        $data['titulo_pagina']  = 'Cores';
        $data['objetos']        = $this->cores_model->listar();


        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/cores/list');
        $this->load->view('dashboard/footer');
    }


    public function adicionar()
    {


        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'É necessário informar o nome'));
        $this->form_validation->set_rules('nome', 'Slug', 'required', array('required' => 'É necessário informar o slug'));


        if ($this->form_validation->run() == TRUE) {
           
            $inputAddAcessorio['nome_cor']    = $this->input->post('nome');
            $inputAddAcessorio['slug']        = $this->input->post('slug');


            $this->cores_model->adicionar($inputAddAcessorio);
            $this->session->set_flashdata('msg', '<div class="alert alert-success">Adicionado com sucesso!</div>');
            redirect('cores_admin', 'refresh');
            
        } else {


            //Titulo
            $data['titulo_site']    = 'Gerenciador de Conteúdo';
            $data['titulo_pagina']  = 'Adicionar Cor';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/cores/add');
            $this->load->view('dashboard/footer');
        }
    }


    public function editar($id = NULL)
    {

        $query = $this->cores_model->getById($id);

        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'É necessário informar o nome'));
        $this->form_validation->set_rules('slug', 'Slug', 'required', array('required' => 'É necessário informar o slug'));

        if ($this->form_validation->run() == TRUE) {

            $inputEditAcessorio['nome_cor']   = $this->input->post('nome');
            $inputEditAcessorio['slug']       = $this->input->post('slug');

            $this->cores_model->atualizar($inputEditAcessorio, ['id' => $this->input->post('id')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Atualizado com sucesso!</div>');
            redirect('cores_admin', 'refresh');

        } else {

            //Titulo
            $data['titulo_pagina']  = 'Editar Cor';
            $data['query']          = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/cores/edit');
            $this->load->view('dashboard/footer');
        }
    }


    public function apagar($id = NULL)
    {

        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você deve selecionar um objeto</div>');
            redirect('cores_admin', 'refresh');
        }

        $query = $this->cores_model->getById($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Objeto não encontrado</div>');
        }

        $this->cores_model->deletar($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Apagado com Sucesso!</div>');
        redirect('cores_admin', 'refresh');
    }
}
