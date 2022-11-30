<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class Acessorios_admin extends CI_Controller
{

    //Construtor
    public function __construct()
    {

        parent::__construct();

        //Load do Model
        $this->load->model('acessorios_model');
        $this->load->model('produtos_model');

        //Load Form_validation
        $this->load->library('form_validation');

        //Load Helper URL
        $this->load->helper('url');
    }

    public function index()
    {
        $this->listaracessorios();
    }

    public function listaracessorios()
    {
        //Titulo
        $data['titulo_site'] = 'Gerenciador de Conteúdo';
        $data['titulo_pagina'] = 'Acessórios';
        $data['app_acessorio'] = $this->acessorios_model->listarAcessorios();


        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/acessorios/list');
        $this->load->view('dashboard/footer');
    }


    public function adicionaracessorio()
    {


        $this->form_validation->set_rules('nomeAcessorio', 'Nome Acessório', 'required', array('required' => 'É necessário informar o nome do acessório'));
        $this->form_validation->set_rules('slugAcessorio', 'Slug Acessório', 'required', array('required' => 'É necessário informar o slug do acessório'));
        $this->form_validation->set_rules('nomeProduto', 'Nome Produto', 'required', array('required' => 'É necessário vincular a um produto'));
        $this->form_validation->set_rules('appProduto', 'App Produto', 'required', array('required' => 'É necessário vincular a um produto'));


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './upload/produtos';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '5048';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('imagemAcessorio')) {


                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro! Por favor, verifique se a imagem está no formato correto e tente novamente.</div>');
                redirect('acessorios_admin/adicionaracessorio');
            } else {

                $inputAddAcessorio['nome_acessorio'] = $this->input->post('nomeAcessorio');
                $inputAddAcessorio['slug'] = $this->input->post('slugAcessorio');
                $inputAddAcessorio['id_app_product'] = $this->input->post('nomeProduto');
                $inputAddAcessorio['aplicacao'] = $this->input->post('appProduto');
                $inputAddAcessorio['imagem'] = $this->upload->data('file_name');


                $this->acessorios_model->adicionarAcessorio($inputAddAcessorio);
                $this->session->set_flashdata('msg', '<div class="alert alert-success">Acessório adicionado com sucesso!</div>');
                redirect('acessorios_admin', 'refresh');
            }
        } else {


            //Titulo
            $data['titulo_site'] = 'Gerenciador de Conteúdo';
            $data['titulo_pagina'] = 'Adicionar Acessório';
            $data['app_nameproduct'] = $this->produtos_model->listarProdutos();

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/acessorios/add');
            $this->load->view('dashboard/footer');
        }
    }


    public function editaracessorio($id = NULL)
    {

        $query = $this->acessorios_model->getacessorioID($id);

        $this->form_validation->set_rules('nomeAcessorio', 'Nome Acessório', 'required', array('required' => 'É necessário informar o nome do acessório'));
        $this->form_validation->set_rules('slugAcessorio', 'Slug Acessório', 'required', array('required' => 'É necessário informar o slug do acessório'));
        $this->form_validation->set_rules('nomeProduto', 'Nome Produto', 'required', array('required' => 'É necessário vincular a um produto'));
        $this->form_validation->set_rules('appProduto', 'App Produto', 'required', array('required' => 'É necessário vincular a um produto'));

        if ($this->form_validation->run() == TRUE) {

            $nome_imagem = NULL;

            //Upload Imagem
            $config['upload_path'] = './upload/produtos';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = 5048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagemAcessorio')) {
                $nome_imagem = $this->upload->data('file_name');
            }

            $inputEditAcessorio['nome_acessorio'] = $this->input->post('nomeAcessorio');
            $inputEditAcessorio['slug'] = $this->input->post('slugAcessorio');
            $inputEditAcessorio['id_app_product'] = $this->input->post('nomeProduto');
            $inputEditAcessorio['aplicacao'] = $this->input->post('appProduto');

            if ($nome_imagem) {
                $inputEditAcessorio['imagem'] = $nome_imagem;
            }

            $this->acessorios_model->atualizarAcessorio($inputEditAcessorio, ['id' => $this->input->post('idAcessorio')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Acessório atualizado com sucesso!</div>');
            redirect('acessorios_admin', 'refresh');
        } else {

            //Titulo
            $data['titulo_pagina'] = 'Editar Acessório';
            $data['app_nameproduct'] = $this->produtos_model->listarProdutos();
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/acessorios/edit');
            $this->load->view('dashboard/footer');
        }
    }


    public function apagaracessorio($id = NULL)
    {

        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você deve selecionar um Acessório</div>');
            redirect('acessorios_admin', 'refresh');
        }

        $query = $this->acessorios_model->getacessorioID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Acessório não encontrado</div>');
        }

        $this->acessorios_model->deletarAcessorio($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Acessório Apagado com Sucesso!</div>');
        redirect('acessorios_admin', 'refresh');
    }
}
