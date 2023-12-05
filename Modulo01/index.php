<!-- heade -->
<?php
    include( 'layout/head.php' );
    ?>

<body>
    <!-- nav -->
    <?php
    include( 'layout/nav.php' );
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
                        <h2 class="Titulo fw-bolder">Apresentação</h2>
                        <!-- Título -->

                        <div class="tudo">
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-sm-12 col-md-5 img-index">
                                    <img src="imgs-pessoas/Group 10.png" alt="Imagem que remete a organização"
                                        id="img-1" class="w-75 wow animate__zoomIn img-apresentacao">
                                </div>

                                <div class="col-sm-12 col-md-7 mt-5">
                                    <div class="row container mt-6 wow animate__zoomIn">
                                        <div class="texto_apresentacao md-5">
                                            <p class=" text-left paragrafo mb-4">
                                                <strong>Olá [Nome_Completo]</strong>, bem-vindo ao curso sobre
                                                <strong>Design de experiência do usuário: O que é UX?</strong>. <br>
                                                Antes de entender o que é de fato design UX, ou design de experiência do
                                                usuário, precisamos
                                                entender conceitos fundamentais da área. O que vamos aprender neste
                                                curso são os conceitos
                                                básicos, a história e quem é o usuário. Ao longo deste material vamos
                                                utilizar o termo
                                                design UX, como é comumente chamado no mundo da tecnologia da
                                                informação. UX é um acrônimo
                                                do termo inglês User eXperience, que em português é experiência do
                                                usuário.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CAIXA DE TEXTO IMPORTANTE -->
                            <section class="container wow animate__zoomIn">
                                <div class="accordion">
                                    <section id="content">
                                        <div class="caixaprincipal" id="tituloimportante">
                                            <div class="div_teste">
                                                <div><i class="bi bi-exclamation-circle"></i> DICA </div>
                                                <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                            </div>
                                        </div>
                                        <!--caixa Principal-->
                                        <div class="accordion-content" id="importante">
                                            <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima
                                                </strong>
                                            </p>
                                            <p class="txt-caixasecundaria">
                                                Este é um curso introdutório. Então vamos conhecer o que é fundamental
                                                para
                                                você entender design UX na área de tecnologia ou em outros âmbitos da
                                                vida.
                                            </p>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- FIM DA CAIXA IMPORTANTE -->

                            <p>
                                Quando você compra algum dispositivo, objeto ou mesmo um aplicativo de celular, alguém
                                pensou e planejou como esse objeto ou aplicativo iria se comunicar com você, isto é, de
                                que
                                forma você interagiria com ele. Vamos a um exemplo prático!
                            </p>

                            <!-- img modal -->
                            <div class="text-center img-01 wow animate__zoomIn">
                                <p class="TituloFigura FonteMenor text-secondary p-2">
                                    <strong>Figura 1:</strong> rádio bluetooth
                                </p>
                                <div class="zoom">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img src="imgs/apresentação/figura1.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> Autor</p>
                            </div>

                            <!-- Imagem 01 - MODAL (Audi)-->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                    <div class="modal-content w-75">
                                        <img class="img-fluid" src="imgs/apresentação/figura1.png"
                                            alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer w-75 bg-light justify-content-center">
                                        <p class="text-secondary"><strong>Fonte:</strong> Autor</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 01 - End  (Audi)-->

                            <p>
                                Na <strong>Figura 1</strong> você está vendo um rádio bluetooth que foi comprado em uma
                                loja
                                de eletrônicos no Beco da Poeira, no Centro de Fortaleza. Com uma marca desconhecida que
                                o
                                identifica como N80, o dispositivo tinha um “ar” vintage, que trazia características
                                belas e
                                antigas, como o acabamento externo que lembrava madeira, e funcionalidades modernas,
                                como
                                tocar áudio se conectado ao celular. Com um valor bem mais acessível que as marcas
                                famosas,
                                o objeto ganhou apreço e um espaço na minha sala de estar. Apesar de não conhecer a
                                marca ou
                                o dispositivo, o vendedor falou de funcionalidades e características que eu já conhecia:
                            </p>

                            <div class="apresentacao mb-5">
                        <div class="img_apresentacao wow animate__zoomIn">
                            <img src="imgs-pessoas/pessoa.png" class="w-100" alt="">
                        </div>
                        <div>
                            <!-- lista ordenada  -->
                            <ul class="wow fadeIn" data-wow-delay="0.3s" id="txt_final">
                                <li class="wow animate__zoomIn texto_apresentacao_lista" data-wow-delay="0.3s"><i class="bi bi-1-circle"></i> Tem caixas de som;
                                </li>
                                <li class="wow animate__zoomIn texto_apresentacao_lista" data-wow-delay="0.3s"><i class="bi bi-2-circle"></i> Toca som via bluetooth ou pen drive (dispositivo de armazenamento USB);
                                </li>
                                <li class="wow animate__zoomIn texto_apresentacao_lista" data-wow-delay="0.3s"><i class="bi bi-3-circle"></i> Toca rádio AM e FM.
                                </li>
                            </ul>
                            <!-- fim da lista ordenada  -->
                        </div>
                    </div>
                            <p>
                                Em casa, após retirá-lo da caixa, analisei o objeto que acabei de comprar e olhei tudo
                                aquilo que parecia ser clicável ou que se movimentava: botões, antena etc. É comum
                                analisarmos objetos novos. Algo que chamou bastante atenção foi um item brilhoso logo na
                                parte da frente dele...
                            </p>
                            <div class="text-center wow fadeIn" data-wow-delay="0.3s">
                            <h4><span class="badge bg-warning text-dark-ênfase"><i class="fa fa-lightbulb"
                                        style="color:white"></i> Clique abaixo.</span></h4>
                            </div>
                            <!-- começo das questões de fixação -->
                            <div id="base">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapse"
                                                aria-expanded="false" aria-controls="flush-collapse" id="titulo">

                                                <i id="puzzle" class="fa-solid fa-puzzle-piece"></i>
                                                TESTE SEUS CONHECIMENTOS
                                    </div>
                                    </button>
                                    </h2>
                                    <div id="flush-collapse" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div id="caixa-de-pergunta">

                                                <h4 id="pergunta-principal">
                                                    Para você fazer parte dessa experiência de primeiro uso, analise o
                                                    N80,
                                                    Figura 1. O que este item metálico faz? Qual a sua principal
                                                    funcionalidade? Escolha uma das opções abaixo:
                                                </h4>

                                                <div id="grupo-botao">


                                                    <!-- resposta errada -->

                                                    <button type="button" class="btn " id="botao-resposta"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                        Sintoniza as rádios
                                                    </button>

                                                    <!-- Modal com a respota errada -->
                                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header" id="header-modal">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        id="botao-fechar"></button>
                                                                </div>
                                                                <div class="modal-body imagem">
                                                                    <img id="imagem-erro" src="imgs/quizz&logo/ERRO.png"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- resposta errada -->

                                                    <button type="button" class="btn " id="botao-resposta"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                        Passa e retorna as músicas
                                                    </button>
                                                    <!-- Modal com a reposta errada -->
                                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header" id="header-modal">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        id="botao-fechar"></button>
                                                                </div>
                                                                <div class="modal-body imagem">
                                                                    <img id="imagem-erro" src="imgs/quizz&logo/ERRO.png"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- resposta certa  -->

                                                    <button type="button" class="btn " id="botao-resposta"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        É um item de enfeite
                                                    </button>

                                                    <!-- Modal com a respota certa -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header" id="header-modal">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        id="botao-fechar"></button>
                                                                </div>
                                                                <div class="modal-body imagem">
                                                                    <img id="imagem-acerto"
                                                                        src="imgs/quizz&logo/ACERTO.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- resposta errada -->

                                                    <button type="button" class="btn" id="botao-resposta"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                        Aumenta e reduz o volume
                                                    </button>
                                                    <!-- Modal com resposta errada -->
                                                    <div class="modal fade" id="exampleModal1" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header" id="header-modal">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"
                                                                        id="botao-fechar"></button>
                                                                </div>
                                                                <div class="modal-body imagem">
                                                                    <img id="imagem-erro" src="imgs/quizz&logo/ERRO.png"
                                                                        alt="">
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

                            <!-- final da questao de fixacao -->

                            <p>
                                A resposta correta é o item C, mas provavelmente você escolheu um dos itens a, b ou d.
                                Por
                                que isso acontece?
                            </p>

                            <p>
                                Isso acontece porque guardamos lembranças dos dispositivos que já utilizamos. Este
                                componente visual e físico lembra botões que aumentam volume ou têm outras ações
                                conhecidas
                                de outros rádios que já utilizamos. Tornar um item que se assemelha a um botão como item
                                decorativo é algo que pode confundir quem o utiliza. O design de um produto ou de um
                                processo deve ser algo bem estruturado e pautado em quem o utiliza, que chamaremos de
                                usuário.
                            </p>

                            <p>
                                Neste exemplo podemos fazer perguntas importantes que devem ser respondidas pelo
                                processo de
                                design e que são a base do conceito de design UX:
                            </p>

                            <div class="processo">
                                <div class="ex ex-1 mb-5 wow animate__backInDown" data-wow-delay="0.5s">É fácil de aprender?</div>
                                <div class="ex ex-1 mb-5 wow animate__backInDown" data-wow-delay="0.7s">É fácil de recordar?</div>
                                <div class="ex ex-1 mb-5 wow animate__backInDown" data-wow-delay="0.9s">Você se sente satisfeito?</div>
                            </div>

                            <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                            <section class="container">
                                <div class="accordion ">
                                    <section id="content">
                                        <div class="caixaprincipal" id="titulofiqueatento">
                                            <div class="div_teste">
                                                <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO
                                                </div>
                                                <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                            </div>
                                        </div> <!--caixa Principal-->
                                        <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                            <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima
                                                </strong>
                                            </p>
                                            <p class="txt-caixasecundaria">
                                                Estas perguntas podem ser direcionadas somente ao “botão”, um item da
                                                interface, mas também podem ser aplicadas de forma global ao produto. Em
                                                alguns aspectos do design UX, é possível mensurar até a experiência
                                                completa
                                                que se inicia na compra ou no ato de desembalar o produto da caixa após
                                                comprar. Vamos à teoria?
                                            </p>
                                        </div>
                                    </section>
                            </section>
                            <!-- FIM DA CAIXA FIQUE ATENTO -->

                            <br>

                            <h2 class="Titulo fw-bolder">OBJETIVOS</h2>

                            <ol>
                                <li>Apresentar o termo UX (“experiência do usuário”);</li>
                                <li>Discutir as áreas de estudo relacionadas ao tema;</li>
                                <li>Apresentar uma breve história de UX;</li>
                                <li>Questionar quem é o usuário;</li>
                                <li>Entender os benefícios da aplicação de design UX.</li>
                            </ol>

                        </div>

                    </div>

                </div>

        </section>

        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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