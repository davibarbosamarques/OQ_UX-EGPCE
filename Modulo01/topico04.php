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
                        <h2 class="Titulo fw-bolder">04 - Quem é Usuário?</h2>
                        <!-- Título -->

                        <p>
                            Agora vamos entender quem é o usuário que citamos durante todo o curso. Afinal, se vamos
                            trazê-lo ao centro do design, precisamos saber de que forma devemos encontrá-lo.
                        </p>

                        <p>
                            Uma premissa bastante utilizada durante reuniões em equipes de desenvolvimento de software
                            é: “Eu, como usuário, faria …”. A partir deste momento algum desenvolvedor ou outro perfil
                            da equipe se coloca no papel de usuário e estabelece alguma opinião sobre a interface ou
                            interação que ele próprio está construindo. Vemos dois grandes problemas nessa forma de dar
                            opinião:
                        </p>

                        <ul class="none">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa-solid fa-circle-check" style="color: #44833d;"></i>
                                Os usuários reais em sua maioria não desenvolvem os sistemas que utilizam;
                            </li>

                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i
                                    class="fa-solid fa-circle-check" style="color: #44833d;"></i>
                                Perfis dentro de uma equipe de desenvolvimento de sistemas tendem a ter um conhecimento
                                avançado em tecnologias, isto também é algo muito diferente da realidade da maioria dos
                                usuários.
                            </li>
                        </ul>

                        <p>
                            Apesar de o termo ser simples, há muitas interpretações para o termo “usuário” e envolvê-los
                            de forma correta é fundamental para um design centrado no usuário bem-sucedido. De acordo
                            com Rogers e Preece (2013), a definição mais óbvia diz respeito às <strong>“pessoas que
                                interagem diretamente com o produto para realizar uma tarefa”.</strong> Porém, outros
                            autores apresentam mais definições relacionadas.
                        </p>

                        <p>
                            Rogers e Preece (2013) citam outro autor que elenca usuário primários, secundários e
                            terciários, que são definidos como:
                        </p>

                        <ul class="none srool">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i
                                    class="fa-solid fa-circle-check" style="color: #44833d;"></i>
                                <strong>usuários primários:</strong> são aqueles propensos a serem usuários frequentes
                                do sistema;
                            </li>

                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i
                                    class="fa-solid fa-circle-check" style="color: #44833d;"></i>
                                <strong>Usuários secundários:</strong> são usuários ocasionais ou aqueles que usam
                                através de um intermediário;
                            </li>

                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i
                                    class="fa-solid fa-circle-check" style="color: #44833d;"></i>
                                <strong>Usuários terciários:</strong> são aqueles afetados pela introdução do sistema ou
                                que influenciarão sua compra.
                            </li>
                        </ul>

                        <p>
                            Os projetos, em geral, possuem um conjunto grande de pessoas que estão relacionadas a ele,
                            que são chamadas de stakeholders, ou partes interessadas em português. As partes
                            interessadas têm influência direta ou indireta sobre os requisitos do sistema. Sobre todos
                            esses perfis, é importante ressaltar que o cliente nem sempre é o usuário final. Então, para
                            manter o foco no usuário, é interessante se questionar se os requisitos que são recebidos
                            pelo cliente estão resolvendo as necessidades do usuário. Esse questionamento não é fácil de
                            ser colocado dentro do contexto empresarial, mas é importante para o resultado final.
                        </p>

                        <p>
                            Outra premissa que surge dentro do contexto de desenvolvimento do software é que “os
                            usuários são burros” quando não conseguem se adequar à uma interação proposta. Alguns
                            opositores do movimento de usabilidade também utilizam-se dessa premissa, afirmando que
                            usabilidade se foca em usuários burros e que a maioria dos “outros” usuários podem
                            facilmente superar a complexidade proposta por um sistema (NIELSEN, 2001).
                        </p>

                        <!-- Citação com borda verde (esquerda) -->
                        <div class="bd-callout bd-callout-success m-3">
                            <!-- blockquote do bootstrap -->
                            <figure>
                                <blockquote class="blockquote">
                                    <p>
                                        Como vimos anteriormente, nem sempre o modelo conceitual apresentado numa
                                        interface irá representar o modelo mental de seus usuários. Porém a resposta a
                                        este questionamento não está de fato nessa questão. De acordo com Nielsen
                                        (2001), até usuários inteligentes preferem atingir seus próprios objetivos ao
                                        navegar em sistemas de forma pessoal. Não é uma questão de saber se os usuários
                                        são capazes de superar a complexidade e aprender uma interface de usuário
                                        avançada. É uma questão de saber se eles estão dispostos a fazê-lo.
                                    </p>
                                </blockquote>
                            </figure>
                        </div>
                        <!-- Citação com borda verde (esquerda) -->


                    </div>

                </div>

            </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="topico05.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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