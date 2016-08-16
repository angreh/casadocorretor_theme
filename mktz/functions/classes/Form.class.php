<?php

class Form
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

    /**
     * Imprime um getex sec para a função recebida
     */
    function getex_sec($func = '')
    {
        if (empty($func))
            return;
        echo wp_create_nonce('func-nonce-' . $func);
    }


    /**
     * Desenha os hidden inputs de getex form
     */
    function getex_hide_inputs($func = '')
    {
        ?>
        <input type="hidden" name="n_getex" value="<?php echo $func; ?>" >
        <input type="hidden" name="sec" value="<?php $this->getex_sec($func); ?>" >
        <input type="hidden" name="inputs" value="on" >
        <?php
    }

    function gen()
    {
        $this->getex_hide_inputs('getex_home_cotar');
    }
}