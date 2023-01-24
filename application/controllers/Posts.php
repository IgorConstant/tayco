<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Posts extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();


        if (!$this->session->userdata('logado') == TRUE) {

            $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
            redirect('login');
        }

        $this->load->model('blog_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['titulo_site'] = 'Gerenciador';
        $data['titulo_pagina'] = 'Blog';

        $data['app_blog'] = $this->blog_model->listarPosts();

        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/blog/listPosts');
        $this->load->view('dashboard/footer');
    }

    public function adicionarpost()
    {

        $this->form_validation->set_rules('tituloPost', 'TITULO', 'required', array('required' => 'O Campo título é obrigatório'));
        $this->form_validation->set_rules('slugPost', 'SLUG', 'required', array('required' => 'O Campo slug é obrigatório'));
        $this->form_validation->set_rules('categoriaPost', 'CATEGORIA', 'required', array('required' => 'O Campo categoria é obrigatório'));
        $this->form_validation->set_rules('conteudoPost', 'CONTEUDO', 'required', array('required' => 'O Campo conteúdo é obrigatório'));
        $this->form_validation->set_rules('yoastKeywords', 'KEYWORDS', 'required', array('required' => 'O Campo keywords é obrigatório'));
        $this->form_validation->set_rules('yoastDescription', 'DESCRIPTION', 'required', array('required' => 'O Campo description é obrigatório'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './upload/blog';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '5048';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('imagemPost')) {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro! Por favor, verifique se a imagem está no formato correto e tente novamente.</div>');
                redirect('blog/adicionarpost');
            } else {
                $inputAddPost['title'] = $this->input->post('tituloPost');
                $inputAddPost['slug'] = $this->input->post('slugPost');
                $inputAddPost['yoast_keywords'] = $this->input->post('yoastKeywords');
                $inputAddPost['yoast_description'] = $this->input->post('yoastDescription');
                $inputAddPost['category'] = $this->input->post('categoriaPost');
                $inputAddPost['content_post'] = $this->input->post('conteudoPost');
                $inputAddPost['imagem_destaque'] = $this->upload->data('file_name');

                $this->blog_model->addPost($inputAddPost);
                $this->session->set_flashdata('msg', '<div class="alert alert-success">Post adicionado com sucesso!</div>');
                redirect('posts', 'refresh');
            }
        } else {
            //Titulo
            $data['titulo_site'] = 'Módulo Blog';
            $data['titulo_pagina'] = 'Adicionar Post';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/blog/addPosts');
            $this->load->view('dashboard/footer');
        }
    }


    public function editarpost($id = NULL)
    {

        $query = $this->blog_model->getPostID($id);

        $this->form_validation->set_rules('tituloPost', 'TITULO', 'required', array('required' => 'O Campo título é obrigatório'));
        $this->form_validation->set_rules('slugPost', 'SLUG', 'required', array('required' => 'O Campo slug é obrigatório'));
        $this->form_validation->set_rules('categoriaPost', 'CATEGORIA', 'required', array('required' => 'O Campo categoria é obrigatório'));
        $this->form_validation->set_rules('conteudoPost', 'CONTEUDO', 'required', array('required' => 'O Campo conteúdo é obrigatório'));

        if ($this->form_validation->run() == TRUE) {

            $nome_imagem = NULL;

            //Upload Imagem
            $config['upload_path'] = './upload/blog';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = 5048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('imagemPost')) {
                $nome_imagem = $this->upload->data('file_name');
            }

            $inputEditPost['title'] = $this->input->post('tituloPost');
            $inputEditPost['slug'] = $this->input->post('slugPost');
            $inputEditPost['yoast_keywords'] = $this->input->post('yoastKeywords');
            $inputEditPost['yoast_description'] = $this->input->post('yoastDescription');
            $inputEditPost['category'] = $this->input->post('categoriaPost');
            $inputEditPost['content_post'] = $this->input->post('conteudoPost');

            if ($nome_imagem) {
                $inputEditPost['imagem_destaque'] = $nome_imagem;
            }

            $this->blog_model->atualizarPost($inputEditPost, ['id' => $this->input->post('idPost')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Post atualizado com sucesso!</div>');
            redirect('posts', 'refresh');
        } else {

            //Titulo
            $data['titulo_pagina'] = 'Editar Post';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/blog/editPost');
            $this->load->view('dashboard/footer');
        }
    }


    public function deletarpost($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você deve selecionar um Post</div>');
            redirect('posts', 'refresh');
        }

        $query = $this->blog_model->getPostID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Banner não encontrado</div>');
        }

        $this->blog_model->apagarPost($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Post Apagado com Sucesso!</div>');
        redirect('posts', 'refresh');
    }
}
