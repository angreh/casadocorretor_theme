<?php
    $estados = $Mktz->Cidades()->getEstados();
?>
<div id="home-banner">
    <div class="container clearfix">

        <div class="slogan">
            <h1>
                Aqui <strong>a</strong> <br/>
                sua <strong>saúde</strong> <br/>
                <strong>está em casa</strong>
            </h1>
        </div>

        <div class="family"></div><!-- .family -->

        <div class="form-wrapper">
            <div class="pre-form"></div>
            <div class="form">
                <form id="lead-gen" method="post">

                    <p class="slogan">
                        CONVERSE COM <strong>NOSSOS CORRETORES</strong>
                    </p>

                    <div class="radio-wrapper">

                        <div class="input-radio-container">
                            <input type="radio" name="args[tipo_plano]" id="pfisica" class="with-gap" value="familiar">
                            <label for="pfisica"><strong>Pessoa física</strong></label>
                        </div>

                        <div class="input-radio-container">
                            <input type="radio" name="args[tipo_plano]" id="pme" class="with-gap" value="adesao" checked="checked">
                            <label for="pme">
                                <strong>PME</strong><br>
                                (de 3 a 99 vidas)
                            </label>
                        </div>

                        <div class="input-radio-container">
                            <input type="radio" name="args[tipo_plano]" id="pjuridica" class="with-gap" value="empresarial">
                            <label for="pjuridica">
                                <strong>Pessoa Jurídica</strong><br>
                                (+ de 100 vidas)
                            </label>
                        </div>

                    </div><!-- .radio-wrapper -->

                    <input type="hidden" name="args[qtd_vidas]" value="1">

                        <div class="input-container">
                            <!--                        <label for="name">Nome:</label>-->
                            <input type="text" id="name" name="args[nome]" placeholder="Nome">
                        </div>
                    <div class="phoneRow">

                        <div class="input-container">
                            <input type="text" name="args[ddd]" id="dddTel" placeholder="DDD" />
                        </div>

                        <div class="input-container">
    <!--                        <label for="phone">Telefone:</label>-->
                            <input type="text" id="phone" name="args[telefone]" placeholder="Telefone">
                        </div>
                    </div>

                    <div class="input-container">
<!--                        <label for="email">E-mail:</label>-->
                        <input type="text" id="email" name="args[email]" placeholder="E-mail">
                    </div>

                    <div class="input-container">
<!--                        <label for="planType">Tipo de Plano:</label>-->
                        <select name="args[tipo_desejado]" id="planType">
                            <option value="0">Selecione um tipo de plano:</option>
                            <option value="S">Saúde</option>
                            <option value="O">Odonto</option>
                            <option value="A">Saúde e Odonto</option>
                        </select>
                    </div>

                    <div class="input-container">
<!--                        <label for="planType">Tipo de Plano:</label>-->
                        <select name="args[estado]" id="estado">
                            <option value="0">Selecione um estado:</option>
                            <?php foreach($estados as $estado): ?>
                                <option value="<?php echo $estado->Uf; ?>"><?php echo $estado->Nome; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="input-container">
                        <!--                        <label for="email">E-mail:</label>-->
                        <input type="text" name="args[cidade]" id="cidade" placeholder="Cidade">
                    </div>

                    <input type="hidden" name="args[msg]" value="desabilitado" />
                    <?php $Mktz->Form()->gen(); ?>

                    <p class="warning">
                        * campos que devem ser preenchidos
                    </p>

                    <div class="right">
                        <button type="submit" class="submit">ENVIAR</button>
                    </div>

                </form><!-- .form -->
            </div><!-- .form -->
            <div class="pos-form"></div>

            <!-- #modal -->
            <div data-remodal-id="modal-return"
                 data-remodal-options="hashTracking: false">

                <button data-remodal-action="close" class="remodal-close"></button>

                <div class="modal-content">
                    <img src="/wp-content/themes/mktz_CDCorretor/assets/img/loading.gif" alt=""/>
                </div>
            </div>

        </div><!-- .form-wrapper -->

    </div><!-- .container -->
</div><!-- #home-banner -->