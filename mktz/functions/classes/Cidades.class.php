<?php

class Cidades
{
    public static $_instance;

    /**
     * Pega a instancia ativa da classe ou cria uma caso nao exista e a retorna
     *
     * @return Cidades
     */
    public static function getInstance() {
        if (self::$_instance == null)
            self::$_instance = new self();
        return self::$_instance;
    }

    public function getEstados()
    {
        global $wpdb;
        return $wpdb->get_results( "SELECT Nome,Uf FROM Estado" );
    }

    public function getCidades($uf)
    {
        global $wpdb;
        $result = $wpdb->get_results( "SELECT Nome FROM Cidade WHERE Uf='" . $uf . "'" );

        $cidades = array();
        foreach($result as $row)
        {
            $cidades[] = array( 'value' => $row->Nome, 'data' => '' );
        }

        return json_encode( $cidades, JSON_UNESCAPED_UNICODE );
    }
}
