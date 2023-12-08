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

                    <div class="apresentacao mb-5">
                        <div class="img_apresentacao wow animate__zoomIn">
                            <img src="imgs-pessoas/pessoa.png" class="w-100" alt="">
                        </div>
                        <div>
                            <!-- lista ordenada  -->
                            <ul class="wow fadeIn" data-wow-delay="0.3s" id="txt_final">
                                <li class="wow animate__zoomIn texto_apresentacao_lista_verde_menor" data-wow-delay="0.3s"><i class="fa-solid fa-check" style="color: #ffffff;"></i> <strong>Anos 1950:</strong> Os usuários reais em sua maioria não desenvolvem os sistemas que utilizam;
                                </li>
                                <li class="wow animate__zoomIn texto_apresentacao_lista_verde_menor" data-wow-delay="0.3s"><i class="fa-solid fa-check" style="color: #ffffff;"></i> Perfis dentro de uma equipe de desenvolvimento de sistemas tendem a ter um conhecimento
                                avançado em tecnologias, isto também é algo muito diferente da realidade da maioria dos
                                usuários.
                                </li>
                            </ul>
                            <!-- fim da lista ordenada  -->
                        </div>
                    </div>
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

                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <p class="d-flex justify-content-center gap-1 mt-5 mb-5 collapse-pai wow animate__zoomIn"
                                    data-wow-deley="0.3s">
                                    <button class="btn btn-collapse text-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample2" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-regular fa-hand-pointer fa-beat me-1" style="color: #fff;"></i>
                                        <strong>Clique para
                                            saber mais...</strong>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample2">
                                    <div class="text-collapse body-collpse">
                                    <div class="text-center">
                                        <p><strong>Usuários primários:</strong></p>
                                    </div> 
                                    São aqueles propensos a serem usuários frequentes
                                do sistema;
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <p class="d-flex collapse-pai justify-content-center mb-5 gap-1 mt-5 wow animate__zoomIn"
                                    data-wow-deley="0.3s">
                                    <button class="btn btn-collapse text-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample3" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-regular fa-hand-pointer fa-beat me-1" style="color: #fff;"></i>
                                        <strong>Clique para
                                            saber mais...</strong>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample3">
                                    <div class="text-collapse body-collpse mb-3">
                                    <div class="text-center">
                                        <p><strong>Usuários secundários:</strong></p>
                                    </div> 
                                    São usuários ocasionais ou aqueles que usam
                                    através de um intermediário;
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <p class="d-flex collapse-pai justify-content-center mb-5 gap-1 mt-5 wow animate__zoomIn"
                                    data-wow-deley="0.3s">
                                    <button class="btn btn-collapse text-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample4" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        <i class="fa-regular fa-hand-pointer fa-beat me-1" style="color: #fff;"></i>
                                        <strong>Clique para
                                            saber mais...</strong>
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample4">
                                    <div class="text-collapse body-collpse mb-3">
                                    <div class="text-center">
                                        <p><strong>Usuários terciários:</strong></p>
                                    </div> 
                                    São aqueles afetados pela introdução do sistema ou
                                    que influenciarão sua compra.
                                    </div>
                                </div>
                            </div>
                        </div>
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

                        <div class="tudo">
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-5 img-index">
                                    <img src="imgs-pessoas/Group 4.png" alt="Imagem que remete a organização" id="img-1" class="w-75 wow animate__zoomIn img-apresentacao">
                                    <div class="text-center">
                                    <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> <a
                                            target="blank"
                                            href="https://br.freepik.com/vetores-premium/conceito-de-atividade-de-negocios_35481750.htm"> Imagem retirada do Freepik</a></p>
                                    </div>
                                </div>
                        <div class="col-sm-12 col-md-7 mt-5">
                                    <div class="row container mt-6 wow animate__zoomIn">
                                        <div class="texto_apresentacao md-5">
                                        <p class=" text-left paragrafo mb-4">
                                       Olá [Nome_Completo],
                                       antes de avançar para o próximo tópico clique abaixo e participe de um jogo sobre o conteúdo apresentado para solidificar o seu aprendizado.
                                        </p>
                                    </div>

                                    <!-- MODAL 1 - INSTRÇÕES DO JOGO -->
                                    <div>
                                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                                        tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="exampleModalToggleLabel"><i class="fa-solid fa-pen-clip"></i> Instruções do
                                                Teste</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body fw-medium">
                                                <ol id="instrucoes">
                                                <li>Esse será um jogo para relacionar duas colunas</li>
                                                <li>Para computador arraste a letra do item até o espaço vazio<br>
                                                    Para celular toque na letra do item e depois no espaço vazio
                                                </li>
                                                <li>Se for colocado duas letras no mesmo espaço será considerada a última letra colocada</li>
                                                <li>Se a resposta estiver correta ficara verde</li>
                                                <li>Este teste não influenciará na avaliação final.</li>
                                                </ol>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button class="btn" id="btn-continuar" data-bs-target="#exampleModalToggle2"
                                                data-bs-toggle="modal">Continuar</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>

                                        <!-- MODAL 2 - INÍCIO DO JOGO -->
                                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
                                        tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="exampleModalToggleLabel2"><i class="fa-solid fa-gamepad"></i> Relacione as
                                                colunas</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="Jogo">
                                                <ul class="column-A">
                                                <div id="item-A">
                                                    <li draggable="true">A</li>Usuários primários
                                                </div>
                                                <div id="item-A">
                                                    <li draggable="true">B</li>Usuários secundários
                                                </div>
                                                <div id="item-A">
                                                    <li draggable="true">C</li>Usuários terciários
                                                </div>
                                                </ul>

                                                <ul class="column-B">
                                                <div id="item-B">
                                                    <p>
                                                    <li class="dropzone" data-resposta="B"></li>São usuários ocasionais ou aqueles que usam através de um intermediário.
                                                    </p>
                                                </div>
                                                <div id="item-B">
                                                    <p>
                                                    <li class="dropzone" data-resposta="C"></li>São aqueles afetados pela introdução do sistema ou que influenciarão sua compra.
                                                    </p>
                                                </div>
                                                <div id="item-B">
                                                    <p>
                                                    <li class="dropzone" data-resposta="A"></li>São aqueles propensos a serem usuários frequentes do sistema.
                                                    </p>
                                                </div>
                                                </ul>
                                            </div>

                                            <div class="modal-footer d-flex justify-content-center">
                                                <button class="btn" id="btn-voltar" data-bs-target="#exampleModalToggle"
                                                data-bs-toggle="modal">Voltar</button>
                                                <button class="btn" id="btn-voltar" data-bs-dismiss="modal"
                                            aria-label="Close">Concluído</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <button class="btn d-flex align-items-center wow animate__bounceInRight" data-wow-delay="0.4s" data-bs-target="#exampleModalToggle"
                                        id="btn-game" data-bs-toggle="modal"><i class="fa-solid fa-puzzle-piece text-light" id="puzzle"></i>CLIQUE E TESTE SEUS CONHECIMENTOS</i></button>
                                    </div>
                                    </div>
                                    </div>

                                </div>
                        </div>
                        </div>
                    </div>

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