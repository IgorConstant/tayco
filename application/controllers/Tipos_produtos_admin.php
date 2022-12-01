<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class Tipos_produtos_admin extends CI_Controller
{

    //Construtor
    public function __construct()
    {

        parent::__construct();

        //Load do Model
        $this->load->model('tipos_produtos_model');

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
        $data['titulo_pagina']  = 'Tipos de Produtos';
        $data['objetos']        = $this->tipos_produtos_model->listar();


        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/tipos_produtos/list');
        $this->load->view('dashboard/footer');
    }


    public function adicionar()
    {


        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'É necessário informar o nome'));
        $this->form_validation->set_rules('nome', 'Slug', 'required', array('required' => 'É necessário informar o slug'));


        if ($this->form_validation->run() == TRUE) {
           
            $inputAddAcessorio['nome_tipo']    = $this->input->post('nome');
            $inputAddAcessorio['slug']          = $this->input->post('slug');


            $this->tipos_produtos_model->adicionar($inputAddAcessorio);
            $this->session->set_flashdata('msg', '<div class="alert alert-success">Adicionado com sucesso!</div>');
            redirect('tipos_produtos_admin', 'refresh');
            
        } else {


            //Titulo
            $data['titulo_site']    = 'Gerenciador de Conteúdo';
            $data['titulo_pagina']  = 'Adicionar Tipo de Produto';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/tipos_produtos/add');
            $this->load->view('dashboard/footer');
        }
    }


    public function editar($id = NULL)
    {

        $query = $this->tipos_produtos_model->getById($id);

        $this->form_validation->set_rules('nome', 'Nome', 'required', array('required' => 'É necessário informar o nome'));
        $this->form_validation->set_rules('slug', 'Slug', 'required', array('required' => 'É necessário informar o slug'));

        if ($this->form_validation->run() == TRUE) {

            $inputEditAcessorio['nome_tipo']    = $this->input->post('nome');
            $inputEditAcessorio['slug']         = $this->input->post('slug');

            $this->tipos_produtos_model->atualizar($inputEditAcessorio, ['id' => $this->input->post('id')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Atualizado com sucesso!</div>');
            redirect('tipos_produtos_admin', 'refresh');

        } else {

            //Titulo
            $data['titulo_pagina']  = 'Editar Tipo de Produto';
            $data['query']          = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/tipos_produtos/edit');
            $this->load->view('dashboard/footer');
        }
    }


    public function apagar($id = NULL)
    {

        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você deve selecionar um objeto</div>');
            redirect('tipos_produtos_admin', 'refresh');
        }

        $query = $this->tipos_produtos_model->getById($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Objeto não encontrado</div>');
        }

        $this->tipos_produtos_model->deletar($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Objeto Apagado com Sucesso!</div>');
        redirect('tipos_produtos_admin', 'refresh');
    }
}
