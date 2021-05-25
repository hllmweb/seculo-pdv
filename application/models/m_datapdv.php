<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_datapdv extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    #query categoria
    function get_categoria($p){
        $query = $this->db->query("SELECT 'arquivos/'||T1.CD_NATUREZA||'.png' AS IMAGEM, T1.CD_NATUREZA, N.DESCRICAO FROM RM.GCONSIST N 
        LEFT JOIN RM.ZMDDET001 T1 ON T1.CD_NATUREZA = TO_NUMBER(N.CODCLIENTE) 
        WHERE N.CODTABELA = '2' AND N.CODCOLIGADA = 1 AND T1.CD_NATUREZA NOT IN(0,6,7,8,10,11)");
        return $query->result_array();
    }

    #pl/sql produto
    function get_sp_produto($p){
        $cursor = '';
        $dados = array(
            array('name' => ':P_ID_LOJA',              'value' => $p['p_id_loja']),
            array('name' => ':RC1',                    'value' => $cursor, 'type' => OCI_B_CURSOR)
        );

        $query = $this->db->procedure('BD_PDV','GET_PRODUTOS_TERMINAL2', $dados);   
        
        return $query;
    }
}