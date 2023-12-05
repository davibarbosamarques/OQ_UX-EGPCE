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
                        <h2 class="Titulo fw-bolder">03 - Disciplinas de UX</h2>
                        <!-- Título -->

                        <p>
                            Com um mercado multidisciplinar, vários profissionais, como sociólogos, antropólogos,
                            dramaturgos, combinam habilidades para encontrar as melhores soluções de interação (REBELO,
                            2009). O campo de UX é situado junto com outras disciplinas e construído pelas intersecções
                            e metodologias de avaliação (MACEDO, 2014). As principais áreas envolvidas por UX são:
                            psicologia; sociologia; antropologia; sistemas de informação; ciências da computação; design
                            gráfico; e ergonomia.
                        </p>

                        <!-- CAIXA DE TEXTO CURIOSIDADE -->
                        <section class="container">
                            <div class="accordion">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloCuriosidade">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>
                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="Curiosidade">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">
                                            Você consegue imaginar o quão diferente é uma interface que é desenvolvida a
                                            partir de processos de UX com outra que não é? IHC é resultado da soma de
                                            esforços entre dois mundos: cientistas da computação, que desenvolvem
                                            sistemas, linguagens e arquiteturas, e psicólogos, envolvidos no projeto de
                                            interface, informam o cientista a respeito das capacidades humanas (REBELO,
                                            2009).
                                        </p>
                                    </div>
                                </section>
                            </div>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <p>
                            Dan Saffer, em seu livro “Designing for Interaction”, explica que o foco no tecido conectivo
                            entre as disciplinas torna os produtos holísticos. Cada disciplina só pode ir até certo
                            ponto com as restrições sob as quais trabalham. Desta forma, todas as disciplinas precisam
                            trabalhar juntas para descobrir soluções para as falhas do produto. Ainda nesse livro, cita
                            as disciplinas que estão relacionadas com UX. Baseado nesse conjunto, a Figura 17 apresenta
                            um infográfico que é a tradução do infográfico desenvolvido pela Envis Pricisely. Clique
                            aqui para ver o infográfico em detalhes.
                        </p>

                        <div class="text-center img-01">
                            <p class="TituloFigura FonteMenor text-secondary p-2">
                                <strong>Figura 19:</strong> Mapa das disciplinas de experiênciasdo usuário
                            </p>
                            <div class="zoom">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img src="imgs/topico03/figura19.png" alt="Imagem que remete a organização"
                                        id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> <a
                                    href="https://visual.ly/community/Infographics/computers/disciplines-user-experience-design"
                                    class="aref">Envis Pricisely</a></p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-50">
                                    <img class="img-fluid" src="imgs/topico03/figura19.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-50 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong> <a
                                            href="https://visual.ly/community/Infographics/computers/disciplines-user-experience-design"
                                            class="aref">Envis Pricisely</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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