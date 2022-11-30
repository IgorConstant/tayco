<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->model('site_model');
        $this->load->model('filter_model');
        $this->load->model('galeria_model');
        $this->load->library('form_validation');
        $this->load->library('email');
    }

    public function index()
    {

        $data['titulo'] = 'Tayco';
        $data['app_home'] = $this->site_model->listarBanners();
        $data['app_product'] = $this->site_model->listarProdutos();

        $data['cor_data'] = $this->filter_model->fetch_filter_type('cor');
        $data['tamanho_data'] = $this->filter_model->fetch_filter_type('tamanho');
        $data['categoria_data'] = $this->filter_model->fetch_filter_type('categoria');

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/index');
        $this->load->view('web/layout/footer');
    }

    public function Produtos()
    {

        $data['titulo'] = 'Tayco - Produtos';

        $data['cor_data'] = $this->filter_model->fetch_filter_type('cor');
        $data['tamanho_data'] = $this->filter_model->fetch_filter_type('tamanho');
        $data['categoria_data'] = $this->filter_model->fetch_filter_type('categoria');
        $data['classe_data'] = $this->filter_model->fetch_filter_type('classe');
        $data['linha_data'] = $this->filter_model->fetch_filter_type('linha');

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/produtos', $data);
        $this->load->view('web/layout/footer');
    }

    function fetch_data()
    {
        sleep(1);
        $cor = $this->input->post('cor');
        $tamanho = $this->input->post('tamanho');
        $categoria = $this->input->post('categoria');
        $classe = $this->input->post('classe');
        $linha = $this->input->post('linha');

        $this->load->library('pagination');
        $config = array();
        $config["base_url"] = "#";
        $config["total_rows"] = $this->filter_model->count_all($categoria, $cor, $tamanho, $classe, $linha);
        $config["per_page"] = 8;
        $config["uri_segment"] = 3;
        $config['use_page_numbers'] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = '&gt;';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $config["num_links"] = 3;
        $this->pagination->initialize($config);
        $page = $this->uri->segment('3');
        $start = ($page - 1) * $config["per_page"];

        $output = array(
            'pagination_link'        =>    $this->pagination->create_links(),
            'product_list'            =>    $this->filter_model->fetch_data($config["per_page"], $start, $categoria, $cor, $tamanho, $classe, $linha)
        );
        echo json_encode($output);
    }


    public function Sobre()
    {
        $data['titulo'] = 'Tayco - Sobre';

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/sobre');
        $this->load->view('web/layout/footer');
    }

    public function Contato()
    {
        $data['titulo'] = 'Tayco - Contato';

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/contato');
        $this->load->view('web/layout/footer');
    }

    public function View()
    {

        $slug = $this->uri->segment(2);

        $data['titulo'] = 'Tayco - Produtos';

        $query  = $this->site_model->getProductBySlug($slug);

        $id     = $query[0]->id;

        $projectGallery = $this->site_model->getGalleryInd($id);
        $acessories = $this->site_model->getAcessoriesInd($id);

        $data['acessories'] = $acessories;
        $data['projectGallery'] = $projectGallery;
        $data['query'] = $query;

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/template-produto');
        $this->load->view('web/layout/footer');
    }


    public function Blog()
    {
        $data['titulo'] = 'Tayco - Blog';

        $data['app_blog'] = $this->site_model->listarPosts();

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/blog');
        $this->load->view('web/layout/footer');
    }


    public function ViewBlog($id)
    {
        $data['titulo'] = 'Tayco - Blog';

        $query = $this->site_model->getPostInd($id);
        $data['query'] = $query;

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/template-blog');
        $this->load->view('web/layout/footer');
    }


    public function viewAcessorios($id)
    {

        $data['titulo'] = 'Tayco - Acessórios';

        $query = $this->site_model->getAcessoriesInd($id);
        $page = $this->site_model->pageAcessories($id);

        $data['query'] = $query;
        $data['page'] = $page;

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/template-acessorios');
        $this->load->view('web/layout/footer');
    }
}
