<?php

class Mktz
{
    /**
     * @return Cidades
     */
    public function Cidades() {
        return $this->_getMktzInstance(__FUNCTION__);
    }

    /**
     * @return Form
     */
    public function Form()
    {
        return $this->_getMktzInstance(__FUNCTION__);
    }

    /**
     * Inclui o arquivo da classe solitidada através de $className e chama o
     * método getInstance(), que retorna uma instância da classe solicitada
     *
     * @param string $className nome da classe que vai ser instanciada
     * @return type instância da classe solicitada
     */
    private function _getMktzInstance($className) {
        require_once( $className . ".class.php" );
        return $className::getInstance();
    }
}

/**
 * Mktz
 */
$Mktz = new Mktz();