<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('produtos_model');
    }

    public function index()
    {

      $products = $this->produtos_model->get_products();

      $urls = [
        ['loc' => base_url(), 'changefreq' => 'daily', 'priority' => '1.0'],
      ];

      foreach ($products as $product) {
        $urls[] = [
            'loc' => base_url('produtos/' . $product->slug),
            'changefreq' => 'daily',
            'priority' => '0.5'
        ];
      }

      $data['urls'] = $urls;

      $this->output->set_content_type('application/xml');
      $this->load->view('sitemap', $data);
    }
}