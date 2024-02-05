<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Produtos_admin extends CI_Controller
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
        $this->load->model('produtos_model');

        //Load Form_validation
        $this->load->library('form_validation');

        //Load Helper URL
        $this->load->helper('url');
    }

    public function index()
    {
        $this->listarprodutos();
    }

    public function listarprodutos()
    {
        //Titulo
        $data['titulo_site'] = 'Gerenciador de Conteúdo';
        $data['titulo_pagina'] = 'Produtos';
        $data['app_produtos'] = $this->produtos_model->listarProdutos();


        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/products/productList');
        $this->load->view('dashboard/footer');
    }

    public function adicionarprodutos()
    {


        $this->form_validation->set_rules('nomeProduto', 'Nome Produto', 'required', array('required' => 'O Campo Nome do Produto é obrigatório'));
        $this->form_validation->set_rules('descProduto', 'Descrição', 'required', array('required' => 'O Campo Descrição é obrigatório'));
        //$this->form_validation->set_rules('corProduto', 'Cor', 'required', array('required' => 'O Campo Cor é obrigatório'));
        $this->form_validation->set_rules('slugProduto', 'Slug', 'required', array('required' => 'O Campo Slug é obrigatório'));
        $this->form_validation->set_rules('tamProduto', 'Tamanho', 'required', array('required' => 'O Campo Tamanho é obrigatório'));
        $this->form_validation->set_rules('catProduto', 'Categoria', 'required', array('required' => 'O Campo Categoria é obrigatório'));
        //$this->form_validation->set_rules('classeProduto', 'Classe', 'required', array('required' => 'O Campo Classe é obrigatório'));
        $this->form_validation->set_rules('descCurta', 'Descrição Curta', 'required', array('required' => 'O Campo Descrição Curta é obrigatório'));
        $this->form_validation->set_rules('yoastKeywords', 'Keywords', 'required', array('required' => 'O Campo keywords é obrigatório'));
        $this->form_validation->set_rules('yoastDescription', 'Description', 'required', array('required' => 'O Campo description é obrigatório'));
        //$this->form_validation->set_rules('linhaProduto', 'Linha', 'required', array('required' => 'O Campo Linha é obrigatório'));

        if ($this->form_validation->run() == TRUE) {


            $data['nome'] = $this->input->post('nomeProduto');
            $data['descricao'] = $this->input->post('descProduto');
            $data['cor'] = $this->input->post('corProduto');
            $data['slug'] = $this->input->post('slugProduto');
            $data['tamanho'] = $this->input->post('tamProduto');
            $data['categoria'] = $this->input->post('catProduto');
            $data['classe'] = $this->input->post('classeProduto');
            $data['linha'] = $this->input->post('linhaProduto');
            $data['yoast_description'] = $this->input->post('yoastDescription');
            $data['yoast_keywords'] = $this->input->post('yoastKeywords');
            $data['descricao_curta'] = $this->input->post('descCurta');



            $this->load->library('upload');

            $config1 = array(
                'upload_path' => "./upload/produtos/pdf/",
                'allowed_types' => "pdf",
                'overwrite' => TRUE,
                'max_size' => "5000",
                'encrypt_name' => TRUE,
            );

            $this->upload->initialize($config1);
            if ($this->upload->do_upload('certAprovacao')) {
                echo "PDF 1 enviado com sucesso";
                $data['certificado_aprovacao'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $config2 = array(
                'upload_path' => "./upload/produtos/pdf/",
                'allowed_types' => "pdf",
                'overwrite' => TRUE,
                'max_size' => "5000",
                'encrypt_name' => TRUE,
            );

            $this->upload->initialize($config2);

            if ($this->upload->do_upload('fichaTec')) {
                echo "PDF 2 enviado com sucesso";
                $data['ficha_tecnica'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $config3 = array(
                'upload_path' => "./upload/produtos/pdf/",
                'allowed_types' => "pdf",
                'overwrite' => TRUE,
                'max_size' => "5000",
                'encrypt_name' => TRUE,
            );

            $this->upload->initialize($config3);

            if ($this->upload->do_upload('certConformidade')) {
                echo "PDF 3 enviado com sucesso";
                $data['certificado_conformidade'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }


            $config4 = array(
                'upload_path' => "./upload/produtos/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf|JPG|JPEG",
                'overwrite' => TRUE,
                'max_size' => "5000",
                'encrypt_name' => TRUE,
            );


            $this->upload->initialize($config4);
            if ($this->upload->do_upload('imagemProduto')) {
                echo "Imagem enviada com sucesso";
                $data['imagem_destaque'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $this->produtos_model->addProduto($data);
            $produto_id = $this->db->insert_id(); //pegando o último id inserido na tabela de produtos

            //Salvando a relação produto x cor
            if ($this->input->post('cores')) {

                $this->load->model('produto_tem_cor_model');

                foreach ($this->input->post('cores') as $cor) {
                    $this->produto_tem_cor_model->salvar($produto_id, $cor);
                }
            }


            //Salvando a relação produto x linha
            if ($this->input->post('linhas')) {

                $this->load->model('produto_tem_linha_model');

                foreach ($this->input->post('linhas') as $lin) {
                    $this->produto_tem_linha_model->salvar($produto_id, $lin);
                }
            }


            //Salvando a relação produto x tipo
            if ($this->input->post('tipos')) {

                $this->load->model('produto_tem_tipo_produto_model');

                foreach ($this->input->post('tipos') as $tipo) {
                    $this->produto_tem_tipo_produto_model->salvar($produto_id, $tipo);
                }
            }


            //Salvando a relação produto x filtragem química
            if ($this->input->post('quimicas')) {

                $this->load->model('produto_tem_filtragem_quimica_model');

                foreach ($this->input->post('quimicas') as $qui) {
                    $this->produto_tem_filtragem_quimica_model->salvar($produto_id, $qui);
                }
            }


            //Salvando a relação produto x filtragem mecânica
            if ($this->input->post('mecanicas')) {

                $this->load->model('produto_tem_filtragem_mecanica_model');

                foreach ($this->input->post('mecanicas') as $mec) {
                    $this->produto_tem_filtragem_mecanica_model->salvar($produto_id, $mec);
                }
            }


            $this->session->set_flashdata('msg', '<div class="alert alert-success">Produto adicionado com sucesso!</div>');
            redirect('produtos_admin', 'refresh');
        } else {

            //Titulo
            $data['titulo_site'] = 'Gerenciador de Conteúdo';
            $data['titulo_pagina'] = 'Novo produto';

            $this->load->model('cores_model');
            $this->load->model('linhas_model');
            $this->load->model('tipos_produtos_model');
            $this->load->model('filtragens_quimicas_model');
            $this->load->model('filtragens_mecanicas_model');
            $data['cores']      = $this->cores_model->listar();
            $data['linhas']     = $this->linhas_model->listar();
            $data['tipos']      = $this->tipos_produtos_model->listar();
            $data['quimicas']   = $this->filtragens_quimicas_model->listar();
            $data['mecanicas']  = $this->filtragens_mecanicas_model->listar();

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/products/productCreate');
            $this->load->view('dashboard/footer');
        }
    }

    public function editarproduto($id = NULL)
    {

        $query = $this->produtos_model->getprodutoID($id);


        $this->form_validation->set_rules('nomeProduto', 'Nome Produto', 'required', array('required' => 'O Campo Nome do Produto é obrigatório'));
        $this->form_validation->set_rules('descProduto', 'Descrição', 'required', array('required' => 'O Campo Descrição é obrigatório'));
        //$this->form_validation->set_rules('corProduto', 'Cor', 'required', array('required' => 'O Campo Cor é obrigatório'));
        $this->form_validation->set_rules('slugProduto', 'Slug', 'required', array('required' => 'O Campo Slug é obrigatório'));
        $this->form_validation->set_rules('tamProduto', 'Tamanho', 'required', array('required' => 'O Campo Tamanho é obrigatório'));
        $this->form_validation->set_rules('catProduto', 'Categoria', 'required', array('required' => 'O Campo Categoria é obrigatório'));
        //$this->form_validation->set_rules('classeProduto', 'Classe', 'required', array('required' => 'O Campo Classe é obrigatório'));
        $this->form_validation->set_rules('descCurta', 'Descrição Curta', 'required', array('required' => 'O Campo Descrição Curta é obrigatório'));
        //$this->form_validation->set_rules('linhaProduto', 'Linha', 'required', array('required' => 'O Campo Linha é obrigatório'));


        if ($this->form_validation->run() == TRUE) {

            $data['nome'] = $this->input->post('nomeProduto');
            $data['descricao'] = $this->input->post('descProduto');
            $data['cor'] = $this->input->post('corProduto');
            $data['slug'] = $this->input->post('slugProduto');
            $data['tamanho'] = $this->input->post('tamProduto');
            $data['categoria'] = $this->input->post('catProduto');
            $data['classe'] = $this->input->post('classeProduto');
            $data['linha'] = $this->input->post('linhaProduto');
            $data['descricao_curta'] = $this->input->post('descCurta');
            $data['yoast_description'] = $this->input->post('yoastDescription');
            $data['yoast_keywords'] = $this->input->post('yoastKeywords');

            $this->load->library('upload');

            $config1 = array(
                'upload_path' => "./upload/produtos/pdf/",
                'allowed_types' => "pdf",
                'overwrite' => TRUE,
                'max_size' => "100000",
                'encrypt_name' => TRUE,
            );

            $this->upload->initialize($config1);
            if ($this->upload->do_upload('certAprovacao')) {
                echo "PDF 1 enviado com sucesso";
                $data['certificado_aprovacao'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $config2 = array(
                'upload_path' => "./upload/produtos/pdf/",
                'allowed_types' => "pdf",
                'overwrite' => TRUE,
                'max_size' => "100000",
                'encrypt_name' => TRUE,
            );

            $this->upload->initialize($config2);

            if ($this->upload->do_upload('fichaTec')) {
                echo "PDF 2 enviado com sucesso";
                $data['ficha_tecnica'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $config3 = array(
                'upload_path' => "./upload/produtos/pdf/",
                'allowed_types' => "pdf",
                'overwrite' => TRUE,
                'max_size' => "100000",
                'encrypt_name' => TRUE,

            );

            $this->upload->initialize($config3);

            if ($this->upload->do_upload('certConformidade')) {
                echo "PDF 3 enviado com sucesso";
                $data['certificado_conformidade'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }


            $config4 = array(
                'upload_path' => "./upload/produtos/",
                'allowed_types' => "gif|jpg|png|jpeg|pdf|JPG|JPEG",
                'overwrite' => TRUE,
                'max_size' => "5000",
                'encrypt_name' => TRUE
            );


            $this->upload->initialize($config4);
            if ($this->upload->do_upload('imagemProduto')) {
                echo "Imagem enviada com sucesso";
                $data['imagem_destaque'] = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $this->produtos_model->atualizarProduto($data, ['id' => $this->input->post('idProduto')]);

            //Salvando a relação produto x cor
            if ($this->input->post('cores')) {

                $this->load->model('produto_tem_cor_model');
                $this->produto_tem_cor_model->limpar_por_produto($this->input->post('idProduto'));

                foreach ($this->input->post('cores') as $cor) {
                    $this->produto_tem_cor_model->salvar($this->input->post('idProduto'), $cor);
                }
            }


            //Salvando a relação produto x linha
            if ($this->input->post('linhas')) {

                $this->load->model('produto_tem_linha_model');
                $this->produto_tem_linha_model->limpar_por_produto($this->input->post('idProduto'));

                foreach ($this->input->post('linhas') as $lin) {
                    $this->produto_tem_linha_model->salvar($this->input->post('idProduto'), $lin);
                }
            }


            //Salvando a relação produto x tipos
            if ($this->input->post('tipos')) {

                $this->load->model('produto_tem_tipo_produto_model');
                $this->produto_tem_tipo_produto_model->limpar_por_produto($this->input->post('idProduto'));

                foreach ($this->input->post('tipos') as $tipo) {
                    $this->produto_tem_tipo_produto_model->salvar($this->input->post('idProduto'), $tipo);
                }
            }


            //Salvando a relação produto x filtragem quimica
            if ($this->input->post('quimicas')) {

                $this->load->model('produto_tem_filtragem_quimica_model');
                $this->produto_tem_filtragem_quimica_model->limpar_por_produto($this->input->post('idProduto'));

                foreach ($this->input->post('quimicas') as $qui) {
                    $this->produto_tem_filtragem_quimica_model->salvar($this->input->post('idProduto'), $qui);
                }
            }


            //Salvando a relação produto x filtragem mecanica
            if ($this->input->post('mecanicas')) {

                $this->load->model('produto_tem_filtragem_mecanica_model');
                $this->produto_tem_filtragem_mecanica_model->limpar_por_produto($this->input->post('idProduto'));

                foreach ($this->input->post('mecanicas') as $mec) {
                    $this->produto_tem_filtragem_mecanica_model->salvar($this->input->post('idProduto'), $mec);
                }
            }



            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Produto atualizado com sucesso!</div>');
            redirect('produtos_admin', 'refresh');
        } else {

            $this->load->model('cores_model');
            $this->load->model('linhas_model');
            $this->load->model('tipos_produtos_model');
            $this->load->model('filtragens_quimicas_model');
            $this->load->model('filtragens_mecanicas_model');
            $this->load->model('produto_tem_cor_model');
            $this->load->model('produto_tem_linha_model');
            $this->load->model('produto_tem_tipo_produto_model');
            $this->load->model('produto_tem_filtragem_quimica_model');
            $this->load->model('produto_tem_filtragem_mecanica_model');
            $data['cores']      = $this->cores_model->listar();
            $data['linhas']     = $this->linhas_model->listar();
            $data['tipos']      = $this->tipos_produtos_model->listar();
            $data['quimicas']   = $this->filtragens_quimicas_model->listar();
            $data['mecanicas']  = $this->filtragens_mecanicas_model->listar();

            $data['query'] = $query;
            $data['titulo_pagina'] = 'Editar produto';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/products/productEdit');
            $this->load->view('dashboard/footer');
        }
    }


    public function apagarproduto($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione um Produto.</div>');
            redirect('produtos_admin', 'refresh');
        }

        $query = $this->produtos_model->getprodutoID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Produto não encontrado.</div>');
        }


        $this->produtos_model->apagarProduto($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Produto excluido com sucesso!</div>');
        redirect('produtos_admin', 'refresh');
    }
}
