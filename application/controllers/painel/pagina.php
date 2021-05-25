<?php
//
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pagina extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        //libreris e helprs
        $this->load->helper(array('form', 'url', 'html', 'directory', 'funcoes_helper'));
        $this->load->library(array('session','form_validation', 'autenticacao'));
    
        //models
        $this->load->model('m_datapdv', 'datapdv', true);
    }

   //painel lista categoria
   function index() { 
        $param = array(
            'p_cdnatureza' => '0,6,7,8, 11'
        );
        $data_categoria      = $this->datapdv->get_categoria($param);

        /*$data_array = [];
        foreach($data_categoria as $row){
            array_push($data_array, array('id_categoria' => $row['CD_NATUREZA'], 'img_categoria'=> $row['IMAGEM'] ,'categoria' => $row['DESCRICAO']));
        }
        echo json_encode($data_array);*/

        session_start();
        $data = array(
            'titulo_page'       => 'Século AutoAtendimento',
            'lista_categoria'   => $data_categoria,
            'lista_carrinho'    => $_SESSION['carrinho']
        );

        $this->load->view('painel/pagina', $data);
    }

    //painel lista produto
    function filter_produto($id_categoria){
        $param = array(
            'p_id_loja' =>  1
        );

        $data_produto = $this->datapdv->get_sp_produto($param);
      
        //$id_categoria = $id_categoria;
        $filtered_array = array_filter($data_produto, function ($element) use ($id_categoria){
        return($element['CD_NATUREZA'] == $id_categoria); });

        //print_r($filtered_array);

        $data = array(
            'lista_produto' => $filtered_array
        );

        $this->load->view('painel/produto', $data);
    }


    function filter_modal($id_produto){
        $param = array(
            'p_id_loja' => 1
        );

        $data_produto = $this->datapdv->get_sp_produto($param);

        $filtered_array = array_filter($data_produto, function ($element) use ($id_produto){
        return($element['IDPRD'] == $id_produto); });
        
        //print_r($filtered_array);
        $data = array(
            'lista_produto' => $filtered_array
        );

        $this->load->view('painel/modal', $data);
    }


    //painel adicionar produto no carrinho
    function add_produto_carrinho(){
        $cdusuario  = $this->input->get_post('cdusuario');
        $id_prd     = $this->input->get_post('id_produto');
        $produto    = $this->input->get_post('produto');
        $preco      = $this->input->get_post('preco');
        $qtd        = $this->input->get_post('qtd');
        $desconto   = $this->input->get_post('desconto');
        $resultado  = $this->input->get_post('resultado');
  
        // $carrinho = array();
        // $this->session->set_userdata('carrinho', $carrinho);
        session_start();
        
        $item = array(
            $id_prd => array(
                'cd_usuario'    => $cdusuario,
                'id_produto'    => $id_prd,
                'produto'       => $produto,
                'preco'         => $preco,
                'qtd'           => $qtd,
                'desconto'      => $desconto,
                'resultado'     => $resultado
            )
        );

        $produto_selecionado = $item[$id_prd];
        if(!isset($_SESSION['carrinho']))
        {
            echo "carrinho criado";
            $_SESSION['carrinho'] = array();
        }

        if(!isset($_SESSION['carrinho'][$id_prd]))
        {
            $_SESSION['carrinho'][$id_prd][] = $produto_selecionado;        
        }

        $data = array(
            'lista_carrinho' => $_SESSION['carrinho']
        );

        $this->load->view('painel/carrinho', $data);

        //criando carrinho
        /*if(empty($this->session->userdata('carrinho')))
        {
            $carrinho = array();
            $this->session->set_userdata('carrinho', $carrinho);
        }
        $carrinho = $this->session->userdata('carrinho');
        
        if(!isset($carrinho[$id_prd]))
        {
            $carrinho[$id_prd][] = $produto_selecionado;
            $this->session->set_userdata('carrinho',$carrinho);
        }*/
        
        
    }

    public function listar_produto_carrinho(){
        session_start();
        $data = array(
            'lista_carrinho'    => $_SESSION['carrinho']
        );

        $this->load->view('painel/carrinho', $data);
        
        // if(count($_SESSION['carrinho']) == 0){
        //     echo "carrinho vazio";
        // }else{
          
        //     print_r($_SESSION['carrinho']);

        //     foreach($_SESSION['carrinho'] as $chave => $value){
        //         echo "<br>";
        //         echo $value[0]['produto'];
        //         echo "<a href='".base_url('painel/pagina/del_produto_carrinho')."/".$chave."'>Deletar Produto</a>";
        //     }

        // }





        // $data_array = array();
        // $data_carrinho = $this->session->userdata('carrinho');
        // var_dump($data_carrinho);

        // echo "<br>".$data_carrinho['p_produto'];
        // echo "<br><br><br><br>";
        // foreach($data_carrinho as $row){
        //     //array_push($data_array, $);
        //     $data_array[] = $row;
        // }

        // print_r($data_array);
        // echo "<pre>";
        // print_r($this->session->userdata('carrinho'));
        // echo "<br><br><br>";


        // foreach($this->session->userdata('carrinho') as $chave => $value)
        // {
        //     echo "cd_usuario: ".$value[0]['cd_usuario'];
        //     echo "<br>";
        //     echo "nome produto: ".$value[0]['produto'];
        //     echo "<br>";
        //     echo "preco: ".$value[0]['qtd'];
        //     echo "<br>";
        //     echo "<a href='".base_url('painel/pagina/del_produto_carrinho')."/".$chave."'>Deletar Produto</a>";
        //     echo "<br><br><hr>";
        // }


    }
 
    public function del_produto_carrinho($id_prd){
        session_start();
        
        unset($_SESSION['carrinho'][$id_prd]);   

        // print_r($this->session->userdata('carrinho')[$id_prd]);
        // $session_data = $this->session->userdata('carrinho')[$id_prd];


    
    }
}
