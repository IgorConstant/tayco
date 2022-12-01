<?php
class Filter_model extends CI_Model
{
  function fetch_filter_type($type)
  {
    $this->db->distinct();
    $this->db->select($type);
    $this->db->from('app_product');
    $this->db->where('product_status', '1');
    $this->db->order_by('id', 'DESC');
    return $this->db->get();
  }

  function make_query($categoria, $cor, $tamanho, $classe, $linha)
  {
    $query = "
    SELECT * FROM app_product
    WHERE product_status = '1'
    ";

    if (isset($categoria)) {
      $categoria_filter = implode("','", $categoria);
      $query .= "
       AND categoria IN('" . $categoria_filter . "')
      ";
    }

    if (isset($cor)) {
      $cor_filter = implode("','", $cor);
      $query .= "
       AND cor IN('" . $cor_filter . "')
      ";
    }

    if (isset($tamanho)) {
      $tamanho_filter = implode("','", $tamanho);
      $query .= "
       AND tamanho IN('" . $tamanho_filter . "')
      ";
    }

    if (isset($classe)) {
      $classe_filter = implode("','", $classe);
      $query .= "
       AND classe IN('" . $classe_filter . "')
      ";
    }

    if (isset($linha)) {
      $linha_filter = implode("','", $linha);
      $query .= "
       AND linha IN('" . $linha_filter . "')
      ";
    }

    return $query;
  }

  function fetch_data($limit, $start, $categoria, $cor, $tamanho, $classe, $linha, $quimico)
  {

    $query = $this->make_query($categoria, $cor, $tamanho, $classe, $linha);

    $query .= ' LIMIT ' . $start . ', ' . $limit;

    $data = $this->db->query($query);

    $output = '';

    if ($data->num_rows() > 0) {
      foreach ($data->result_array() as $row) {
        $output .= '
        <div>
        <a href="produtos/' . $row['slug'] . '">
        <div class="uk-card uk-card-default uk-card-body">
          <img src="' . base_url() . 'upload/produtos/' . $row['imagem_destaque'] . '" alt="">
        </div>
        <div class="titleProdBlock">
        <small>' . $row['categoria'] . '</small>
        <h6 class="titleProduct">' . $row['nome'] . '</h6>
        </div>
        </a>
      </div>
        ';
      }
    } else {
      $output = '<h3>Não foi encontrado nenhum produto</h3>';
    }

    return $output;
  }

  function count_all($categoria, $cor, $tamanho, $classe, $linha, $quimico)
  {
    $query = $this->make_query($categoria, $cor, $tamanho, $classe, $linha);
    $data = $this->db->query($query);
    return $data->num_rows();
  }

  function buscar_cores()
  {
	return $this->db->query("SELECT * FROM app_cor ORDER BY nome_cor ASC")->result();
  }

  function buscar_tipos()
  {
	return $this->db->query("SELECT * FROM app_tipo_produto ORDER BY nome_tipo ASC")->result();
  }

  function buscar_linhas()
  {
	return $this->db->query("SELECT * FROM app_linha ORDER BY nome_linha ASC")->result();
  }

  function buscar_mecanicas()
  {
	return $this->db->query("SELECT * FROM app_filtragem_mecanica ORDER BY nome_filtragem ASC")->result();
  }

  function buscar_quimicas()
  {
	return $this->db->query("SELECT * FROM app_filtragem_quimica ORDER BY nome_filtragem ASC")->result();
  }

}
