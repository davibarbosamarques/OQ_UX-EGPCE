<!-- heade -->
<?php
    include('layout/head.php');
    ?>

<body>
    <!-- nav -->
    <?php
    include('layout/nav.php');
    ?>

    <!-- menu -->
    <?php
    include('layout/menu.php');
    ?>


    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">



                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!-- Título -->
                        <h2 class="Titulo fw-bolder">05 - Benefícios de UX</h2>
                        <!-- Título -->

                        <p>
                            Para finalizarmos o curso, vamos apresentar que benefícios a aplicação de um processo de UX
                            pode trazer a um projeto. Um olhar crítico na experiência do usuário pode aumentar a
                            qualidade de uso, reduzir o número e a gravidade dos erros cometidos pelos usuários, reduzir
                            o custo de treinamento, reduzir o custo de suporte técnico e aumentar as vendas e a
                            fidelidade do cliente.
                        </p>

                        <p>
                            Os benefícios de práticas da IHC, como metodologias e pesquisas, não se restringem ao uso de
                            sistemas, podem ter impacto também na aceitabilidade e permanência de um produto no mercado
                            (REBELO, 2009).
                        </p>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <section class="container">
                            <div class="accordion">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloimportante">
                                        <div class="div_teste">
                                            <div><i class="bi bi-exclamation-circle"></i> IMPORTANTE </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="importante">
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">
                                            Como já foi bastante apresentado, a experiência do usuário é uma disciplina
                                            multidisciplinar que surgiu a partir da junção de muitas áreas de estudo.
                                            Hoje o foco do design UX aplicado está em interfaces computacionais, mas em
                                            breve acompanhará a evolução das interfaces que irão existir em muitos
                                            objetos ao nosso redor e não somente em telas. Por isso, a área de UX
                                            continua muito próxima da ciência, pois necessita buscar novas respostas
                                            para acompanhar a evolução das interfaces.
                                        </p> <!--caixa secundaria-->
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA IMPORTANTE -->

                        <p>
                            Assim como as interfaces mudam, os usuários também. Chamá-lo de usuário não deve torná-lo
                            menos humano. Usuários são pessoas e estamos constantemente mudando individualmente e como
                            sociedade. Os acontecimentos históricos, como uma pandemia, podem alterar o curso de como
                            interagimos com os sistemas computacionais. O design UX deve acompanhar e entender essas
                            mudanças, sempre respeitando a realidade do local em que é aplicada.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="fa-solid fa-chevron-right"></i></a>
        </div>

        <!-- barra de progresso embaixo -->
        <div id="progress-bar"></div>
    </div>

    <!-- BUTTON BACK TO TOP (JAMILLE) -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

    <?php
    include('layout/footer.php');
    ?>
</body>

</html>