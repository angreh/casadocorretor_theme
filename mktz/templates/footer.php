    <div id="footer">
        <div class="container clearfix">

            <div class="logo"></div>

            <div class="menu-wrapper">
                <?php wp_nav_menu(array(
                    'menu' => 'footer_menu'
                )); ?>
            </div>

            <div class="others">
                <div class="social" data-remodal-target="modal-form">
                    <a href="/fb" class="fb">Facebook</a>
                    <a href="/phone" class="ph">Telefone</a>
                    <a href="/email" class="em">Email</a>
                </div>



                <div class="corretor">
                    <a data-remodal-target="modal-form">Corretor</a>
                    <a data-remodal-target="modal-ask">Parceiros</a>
                </div>

                <div data-remodal-id="modal-form"
                     data-remodal-options="hashTracking: false">

                    <button data-remodal-action="close" class="remodal-close"></button>

                    <form
                        name="loginform_topo"
                        id="loginform_topo"
                        action="http://casadocorretor.net/wp-login.php"
                        method="post">

                        <p class="login-username">
                            <input
                                type="text"
                                name="log"
                                id="user_login_topo"
                                placeholder="Usuário"
                                class="input"
                                value=""
                                size="20" />
                        </p>
                        <p class="login-password">
                            <input
                                type="password"
                                name="pwd"
                                id="user_pass_topo"
                                placeholder="Senha"
                                class="input"
                                value=""
                                size="20" />
                        </p>

                        <p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme_topo" value="forever" /> Lembrar</label></p>
                        <p class="login-submit">
                            <input type="submit" name="wp-submit" id="wp-submit_topo" class="button-primary" value="Entrar" />
                            <input type="hidden" name="redirect_to" value="http://casadocorretor.net/doc/" />
                        </p>

                    </form>
                </div>

                <div data-remodal-id="modal-ask"
                     data-remodal-options="hashTracking: false">

                    <button data-remodal-action="close" class="remodal-close"></button>
                    <h1>Selecione um ação:</h1>
                    <br>
                    <div class="tmz-remodal-options-wrapper">
                        <a target="_blank" href="http://servicos.casadocorretor.net/erp/login.php">ERP</a>
                        <a target="_blank" href="https://indicacao.sauti.com.br/">Sauti</a>
                        <a target="_blank" href="https://mail.casadocorretor.net/">E-mail</a>
                        <a target="_blank" href="http://casasulamerica.com.br/">Casa SulAmérica</a>
                        <a target="_blank" href="http://app.simuladoronline.com/login/44?layout=basic-login">Simulador On Line</a>
                        <a target="_blank" href="https://cotador-saude.appspot.com/autenticacao/login_vendedor">Cotador SulAmérica</a>
                        <a target="_blank" href="http://casadocorretor.net/doclist/">Tabelas e Documentação</a>
                    </div>
                </div>

            </div>

        </div><!-- .container -->
    </div><!-- #footer -->

    <script src="/wp-content/themes/mktz_CDCorretor/assets/js/plugins/jquery-3.1.0.min.js"></script>
    <script src="/wp-content/themes/mktz_CDCorretor/assets/js/plugins/remodal/remodal.js"></script>
    <script src="/wp-content/themes/mktz_CDCorretor/assets/js/plugins/autocomplete/jquery.autocomplete.min.js"></script>
    <script src="/wp-content/themes/mktz_CDCorretor/assets/js/plugins/mask/jquery.mask.js"></script>
    <script src="/wp-content/themes/mktz_CDCorretor/assets/js/plugins/mask/jquery.validate.min.js"></script>
    <script src="/wp-content/themes/mktz_CDCorretor/assets/js/index.js"></script>

</body>
</html>