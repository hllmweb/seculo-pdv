<?php
//
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Deletar extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        //libreris e helprs
        $this->load->helper(array('form', 'url', 'html', 'directory', 'funcoes_helper'));
        $this->load->library(array('session','form_validation', 'autenticacao'));
    
        //models
        $this->load->model('m_datapdv', 'datapdv', true);
    }

   
    function produto_carrinho($id_prd){
        // $this->session->sess_destroy();
        // $carrinho = $this->session->userdata('carrinho');
        //$this->session->unset_userdata($carrinho[$id_prd]);
        // print_r($this->session->userdata('carrinho'));
        // $item = $this->session->userdata('carrinho')[$id_prd];
        // $this->session->unset_userdata($item[$id_prd]['cd_usuario']);
        // $this->session->unset_userdata($item[$id_prd]['produto']);
        // $this->session->unset_userdata($item[$id_prd]['preco']);
        // $this->session->unset_userdata($item[$id_prd]['qtd']);
        // $this->session->unset_userdata($item[$id_prd]['desconto']);
        // $this->session->unset_userdata($item[$id_prd]['resultado']);
        //$this->session->set_userdata('carrinho', $item);
        // $this->session->unset_userdata($item[0][$id_prd]['cd_usuario']);
        // $this->session->unset_userdata($item[0][$id_prd]['id_produto']);
        // $this->session->unset_userdata($item[0][$id_prd]['produto']);
        // $this->session->unset_userdata($item[0][$id_prd]['preco']);
        // $this->session->unset_userdata($item[0][$id_prd]['qtd']);
        // $this->session->unset_userdata($item[0][$id_prd]['desconto']);
        // $this->session->unset_userdata($item[0][$id_prd]['resultado']);
        // session_start();
        // unset($_SESSION['carrinho'][$id_prd][2247]);   
        // $this->session->sess_destroy();
        // print_r($item[$id_prd]);
        // $this->session->unset_userdata($this->session->userdata('carrinho')[$id_prd][0]['cd_usuario']);
        $card = array($this->session->userdata('carrinho')[$id_prd][0]);
        
        // $this->session->set_userdata('carrinho', $card);
        // $this->session->unset_userdata('carrinho');
        // $this->session->sess_destroy();
        echo "<br><pre>";
        print_r($card[0]);
        unset($card[0]);

        echo "<br><br><br><pre>";
        print_r($this->session->userdata('carrinho'));
    }
}
