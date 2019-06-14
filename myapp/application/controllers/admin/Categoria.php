<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('categorias_model', 'modelcategorias');
        $this->categorias = $this->modelcategorias->listar_categorias();
        $this->load->model('usuarios_model','modelusuarios');
    }

    public function index()
    {
        $this->load->library('table');

        $dados['categorias'] = $this->categorias;

        //Dados para o cabeçalho
        $dados['titulo'] = "Painel de Controle";
        $dados['subtitulo'] = "Categoria";

        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/categoria');
        $this->load->view('backend/template/html-footer');


    }

}