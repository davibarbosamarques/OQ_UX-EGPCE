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
            <h2 class="Titulo fw-bolder">02 - História de UX</h2>
            <!-- Título -->

            <p>
              Experiência de usuário é uma área multidisciplinar de estudo, que, ao longo do tempo,
              evoluiu a partir de disciplinas diferentes. Experiência de usuário é o estudo do uso que as
              pessoas fazem de artefatos por meio de atividades guiadas e essa base vem das ciências de
              comportamento, especificamente ergonomia, psicologia e <span class="fst-italic">‘human
                factors’</span> (MACEDO, 2014).
            </p>

            <p>
              A evolução do termo ao que conhecemos hoje é resultado de mais de 30 anos em pesquisas
              científicas aplicadas no mercado. Contar essa história será sempre de uma forma breve, já
              que não é possível contar a história de todas as disciplinas que esse tema abrange. Vamos
              agora voltar no tempo para conhecer onde essas disciplinas se encontram para resolver
              problemas no uso de sistemas
            </p>

            <h4 class="Titulo corsub">1857 - Ergonomia</h4>

            <p>
              A revolução industrial proveu meios para a estruturação dos estudos sobre como criar
              ferramentas com as quais os trabalhadores das fábricas pudessem realizar suas atividades de
              forma mais eficiente. O desenvolvimento dessas metodologias resultou na Ergonomia, termo
              cunhado por Wojciech Jastrzębowski em 1857 (MACEDO, 2014).
            </p>

            <!-- CAIXA DE TEXTO SAIBA-MAIS -->
            <section class="container">
              <div class="accordion">
                <section id="content">
                  <div class="caixaprincipal" id="tituloSaibaMais">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="saibamais">
                    <p class="txt-aviso"><strong class="opacity-75">Passe o mouse acima</strong>
                    </p>
                    <p class="txt-caixasecundaria">
                      O termo <strong>ergonomia</strong> deriva das palavras gregas ergon
                      ("trabalho") e <strong>nomos</strong> ("lei natural").
                    </p><!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA SAIBA MAIS  --> <br>

            <h4 class="Titulo corsub">1885 - Pós-Revolução Industrial</h4>

            <p>
              Após o período da Revolução Industrial, o legado dos novos ambientes de trabalho manteve a
              necessidade de compreender como funcionários poderiam interagir com máquinas ou processos
              para entregar resultados de forma mais eficiente. A produtividade era o centro da produção
              Fordista e Taylorista, comumente aplicados na época.
            </p>
            <div class="row">
              <div class="col-md-6">
                <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                <section class="container">
                  <div class="accordion">
                    <section id="content">
                      <div class="caixaprincipal" id="tituloSaibaMais">
                        <div class="div_teste">
                          <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                          <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                        </div>
                      </div> <!--caixa Principal-->
                      <div class="accordion-content" id="saibamais">
                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                        </p>
                        <p class="txt-caixasecundaria">
                          <a href="https://www.significados.com.br/taylorismo-fordismo-e-toyotismo/#:~:text=O%20Taylorismo%20e%20o%20Fordismo,grande%20produtividade%20com%20menor%20custo."
                            class="aref" target="_blank">O Taylorismo e o Fordismo</a> enfatizaram
                          os princípios de fabricação. O Taylorismo iniciou a partir do estudo da mão
                          de obra na produção industrial, organizando o trabalho de modo a obter
                          grande produtividade com menor custo. O Fordismo manteve o mecanismo de
                          produção e organização semelhante ao taylorismo, porém adicionou a esteira
                          rolante, ditando um novo ritmo de trabalho. O filme “Tempos Modernos”, de
                          Charlie Chaplin representa bem esse estilo, como pode ser visto na
                          <strong>Figura 14.</strong>
                        </p><!--caixa secundaria-->
                      </div>
                    </section>
                </section>
                <!-- FIM DA CAIXA SAIBA MAIS  -->
              </div>
              <div class="col-md-6">
                <!-- img modal -->
                <div class="text-center img-01">
                  <p class="TituloFigura FonteMenor text-secondary p-2">
                    <strong>Figura 14:</strong> Uma esteira rolante industrial no filme “Tempos Modernos”
                  </p>
                  <div class="zoom">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem01">
                      <img src="imgs/topico02/figura14.gif">
                    </a>
                  </div>
                  <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> google</p>
                </div>

                <!-- Imagem 01 - MODAL (Audi)-->
                <div class="modal fade text-center" id="Imagem01" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                    <div class="modal-content w-50">

                      <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem01">
                        <img src="imgs/topico02/figura14.gif" class="object-fit-contain w-100 ">
                      </a>
                    </div>
                    <div class="modal-footer w-50 bg-light justify-content-center">
                      <p class="text-secondary"><strong>Fonte:</strong> google</p>
                    </div>
                  </div>
                </div>
                <!-- Imagem 01 - End  (Audi)-->
              </div>
            </div>
            <p>
              Dentro desse contexto um casal de estudiosos se destacou: <strong>Lillian Gilbreth e Frank
                Gilbreth (Figura 15).</strong> Ambos engenheiros e ela doutora em psicologia, uniram as
              duas áreas de atuação para entender sobre otimização de tempo e produtividade, aplicando
              resultados de um profundo estudo psicológico nos hábitos e produções industriais. Lillian
              Gilbreth ainda avançou em áreas como ergonomia de materiais, ferramentas e equipamentos
              voltados para atividades diárias.
            </p>

            <p>
              O casal Gilbreth é mais conhecido no âmbito da Administração, mas, como mencionado
              anteriormente, a experiência de usuário é multidisciplinar e a bem conhecida <strong>análise
                de tempos e movimentos</strong> do casal influenciou no que aplicamos e entendemos hoje
              como UX. Afinal, nós continuamos em busca da otimização do tempo e de processos para
              simplificar tarefas e em busca de melhor produtividade.
            </p>

            <!-- img modal1 -->
            <p class="TituloFigura FonteMenor text-secondary p-2 text-center">
              <strong>Figura 15 e 15.1:</strong> Casal Gilbreth e o livro sobre análise de tempos e
              movimentos
            </p>
            <section class="divpaiimg d-flex justify-content-evenly row">

              <!-- img modal -->
              <div class="text-center img-01 col-12 col-md-6 mb-4">
                <div class="zoom">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem02">
                    <img src="imgs/topico02/figura15.png" alt="Imagem que remete a organização" id="img-1"
                      class="imgmodal">
                  </a>
                </div>
              </div>

              <!-- Imagem 01 - MODAL (Audi)-->
              <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                  <div class="modal-content w-50">
                    <img class="img-fluid" src="imgs/topico02/figura15.png" alt="Alt da imagem fica aqui">
                  </div>
                  <div class="modal-footer w-50 bg-light justify-content-center">
                    <p class="text-secondary"><strong>Fonte:</strong> <a
                        href="https://professorluizroberto.com/seguidores-de-taylor-o-casal-gilbreth/" class="aref"
                        target="_blank">Casal Gilbreth</a> e <a
                        href="https://www.marilia.unesp.br/Home/Eventos/2016/rodrigo-moreira-vieira.pdf" class="aref"
                        target="_blank">Blog Marília UNESP</a></p>
                  </div>
                </div>
              </div>
              <!-- Imagem 01 - End  (Audi)-->

              <!-- img modal2 -->

              <div class="text-center img-01 col-12 col-md-6">
                <div class="zoom">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem03">
                    <img src="imgs/topico02/figura15.1.png" alt="Imagem que remete a organização" id="img-1">
                  </a>
                </div>
              </div>

              <!-- Imagem 01 - MODAL (Audi)-->
              <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                  <div class="modal-content w-50">
                    <img class="img-fluid" src="imgs/topico02/figura15.1.png" alt="Alt da imagem fica aqui">
                  </div>
                  <div class="modal-footer w-50 bg-light justify-content-center">
                    <p class="text-secondary"><strong>Fonte:</strong> <a
                        href="https://professorluizroberto.com/seguidores-de-taylor-o-casal-gilbreth/" class="aref"
                        target="_blank">Casal Gilbreth</a> e <a
                        href="https://www.marilia.unesp.br/Home/Eventos/2016/rodrigo-moreira-vieira.pdf" class="aref"
                        target="_blank">Blog Marília UNESP</a></p>
                  </div>
                </div>
              </div>
            </section>
            <p class="FonteFigura FonteMenor text-secondary text-center"><strong>Fonte:</strong> <a
                href="https://professorluizroberto.com/seguidores-de-taylor-o-casal-gilbreth/" class="aref"
                target="_blank">Casal Gilbreth</a> e <a
                href="https://www.marilia.unesp.br/Home/Eventos/2016/rodrigo-moreira-vieira.pdf" class="aref"
                target="_blank">Blog Marília UNESP</a></p>
            <!-- Imagem 01 - End  (Audi)-->

            <!-- CAIXA DE TEXTO SAIBA-MAIS -->
            <section class="container">
              <div class="accordion">
                <section id="content">  
                  <div class="caixaprincipal" id="tituloSaibaMais">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="saibamais">
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                    </p>
                    <p class="txt-caixasecundaria">
                      <a href="https://www.significados.com.br/taylorismo-fordismo-e-toyotismo/#:~:text=O%20Taylorismo%20e%20o%20Fordismo,grande%20produtividade%20com%20menor%20custo."
                        class="aref" target="_blank">Lillian Gilbreth</a> foi fundamental no
                      desenvolvimento da cozinha moderna. A ela é creditada a invenção de latas de
                      lixo com pedal e as prateleiras internas dos refrigeradores. Quando
                      trabalhava na General Electric, ela entrevistou mais de quatro mil mulheres
                      para desenvolver fogões, pias e outros equipamentos de cozinha com a altura
                      e peso adequados.</strong>
                    </p><!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA SAIBA MAIS  -->

            <h4 class="Titulo corsub">1879 - Psicologia aplicada</h4>
            <div class="row">
              <div class="col-md-5 d-flex align-items-center">
                <p>
                  Em outros lugares do mundo, cientistas estudavam os modelos de pensamento, sobre como
                  realizamos as tarefas de maneira cognitiva, e o que nos motiva. Em 1879, Wilhelm Wundt
                  fundou o primeiro laboratório de psicologia aplicada, como sensações táteis, percepções
                  espaciais, processos atencionais, sentimentos e afetos, processos de associação e memória,
                  etc (ARAUJO, 2009). A criação desse laboratório teve impacto em como as pesquisas eram
                  realizadas e conduzidas. O protocolo de avaliação de UX hoje evoluiu a partir desse formato.
                </p>
              </div>
              <div class="col-md-7">
                <!-- img modal -->
                <div class="text-center img-01">
                  <p class="TituloFigura FonteMenor text-secondary p-2">
                    <strong>Figura 16:</strong> Wilhelm Wundt e sua equipe no laboratório de psicologia
                    aplicada na Universidade de Leipzig, Alemanha
                  </p>
                  <div class="zoom">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem04">
                      <img src="imgs/topico02/figura16.png">
                    </a>
                  </div>
                  <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> <a
                      href="https://psicoativo.com/2016/08/quem-criou-o-primeiro-laboratorio-de-psicologia-experimental.html#:~:text=Wilhelm%20Wundt,para%20uma%20disciplina%20cient%C3%ADfica%20%C3%BAnica."
                      class="aref">Psicoativo</a></p>
                </div>

                <!-- Imagem 01 - MODAL (Audi)-->
                <div class="modal fade text-center" id="Imagem04" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                    <div class="modal-content w-75 ">

                      <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem01">
                        <img src="imgs/topico02/figura16.png" class="object-fit-contain w-100 ">
                      </a>
                    </div>
                    <div class="modal-footer w-75 bg-light justify-content-center">
                      <p class="text-secondary"><strong>Fonte:</strong> <a
                          href="https://psicoativo.com/2016/08/quem-criou-o-primeiro-laboratorio-de-psicologia-experimental.html#:~:text=Wilhelm%20Wundt,para%20uma%20disciplina%20cient%C3%ADfica%20%C3%BAnica."
                          class="aref">Psicoativo</a></p>
                    </div>
                  </div>
                </div>
                <!-- Imagem 01 - End  (Audi)-->
              </div>
            </div>
            <h4 class="Titulo corsub">1918 - Primeira Guerra Mundial</h4>

            <p>
              Com a Primeira Guerra Mundial, houve um aumento da importância de carros e aviões, e a
              emergência em estabelecer a nova ciência “human factors”, ou “fatores humanos” em português.
              As metodologias e insights da ergonomia e da psicologia foram usados para entender como as
              pessoas se comportavam enquanto utilizavam ferramentas complexas e submetidas a diferentes
              ambientes (MACEDO, 2014).
            </p>

            <h4 class="Titulo corsub">1960 - Interface e indústria da computação</h4>

            <p>O termo “interface” foi inventado por volta de 1880, mas a palavra não
              teve muita repercussão até 1960 quando começou a ser utilizada pela
              indústria computacional (REBELO, 2009). Enquanto <strong>interação</strong> tem um
              enfoque mais amplo com novos campos de estudo envolvendo a
              comunicação entre usuários e computadores ou outros tipos de produtos, o
              termo <strong>interface</strong> estabelece o conceito de ponto de interação entre um
              computador e outra entidade (REBELO, 2009).
            </p>

            <p>
              Ainda na década de 60, Richard Saul Wurman foi uma das primeiras
              pessoas a usar o termo <strong>“Arquitetura da Informação”</strong>, que hoje integra um
              dos principais fundamentos de UX. O termo esteve presente em seus livros da
              época e em 1976 ele presidiu um evento que tinha esse nome e deu origem
              ao termo.
            </p>

            <!-- CAIXA DE TEXTO SAIBA-MAIS -->
            <section class="container">
              <div class="accordion scool">
                <section id="content">
                  <div class="caixaprincipal" id="tituloSaibaMais">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="saibamais">
                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                    <p class="txt-caixasecundaria">O livro intitulado “Information Anxiety” (WURMAN, 1991), traduzido
                      para português como “Ansiedade de informação: como transformar
                      informação em compreensão”, defende que <strong>não temos explosão de
                        informação, mas sim de dados</strong>. Segundo Wurman, há uma distância
                      grande entre os dados se tornarem informação, que é ainda maior para se
                      tornarem algo compreensível. </p><!--caixa secundaria-->
                  </div>
                </section>
            </section>
            <!-- FIM DA CAIXA SAIBA MAIS  -->

            <!-- CAIXA DE TEXTO CURIOSIDADE -->
            <section class="container">
              <div class="accordion ">
                <section id="content">
                  <div class="caixaprincipal" id="tituloCuriosidade">
                    <div class="div_teste">
                      <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

                      <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                    </div>
                  </div> <!--caixa Principal-->
                  <div class="accordion-content" id="Curiosidade">
                    <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75"> Passe o mouse acima
                        </strong></strong></p>
                    <p class="txt-caixasecundaria">Wurman é também um dos criadores do famoso <a target="blank"
                        href="https://www.ted.com/" class="aref">TED — Technology
                        Entertainment and Design Enterta</a>, que é um círculo de palestras rápidas que
                      explora temas diversos em um formato inovador.</p><!--caixa secundaria-->
                  </div>
                </section>
              </div>
            </section>
            <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

            <h4 class="Titulo corsub">1970 - UI</h4>

            <p>
              Por volta de 1970, pesquisadores da área computacional iniciam estudos
              sobre a <strong>interface com o usuário</strong>, do inglês <strong>UI – user interface</strong>, também
              conhecida por interface homem-máquina. A sofisticação dos sistemas
              computacionais iriam solicitar um termo mais abrangente na década
              seguinte.
            </p>

            <h4 class="Titulo corsub">1980 - IHC</h4>

            <p>
              Em meados dos anos 80, o termo <strong>IHC</strong> é adotado por possuir um enfoque
              mais multidisciplinar, como é necessário para a nova área de estudo. Preece
              (2013) esclarece que, mais do que o projeto de interface, a área de IHC se
              preocupa com as comunicações ou interações entre usuários e
              computadores, definição já discutida na seção “2.1. Áreas de estudo em IHC”.
            </p>

            <h4 class="Titulo corsub">1988 - “O design do dia-a-dia”</h4>
            <div class="row mt-4 mb-4">
              <div class="col-md-6">
                <p>
                  Em 1988 Don Norman, cientista cognitivo, publicou o livro O Design do
                  Dia-a-dia. No livro, Norman descreve a psicologia por trás do que ele chama
                  de design “bom” e “ruim” por meio de estudos de caso. Baseado nestes
                  resultados, ele propõe princípios de design.
                </p>

                <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                <section class="container">
                  <div class="accordion">
                    <section id="content">
                      <div class="caixaprincipal" id="tituloSaibaMais">
                        <div class="div_teste">
                          <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                          <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                        </div>
                      </div> <!--caixa Principal-->
                      <div class="accordion-content" id="saibamais">
                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                        <p class="txt-caixasecundaria"><a target="blank"
                            href="https://pt.wikipedia.org/wiki/Donald_Norman">Don Norman</a> é Design Thinker, Cientista
                          Cognitivo, e um dos maiores
                          estudiosos de design UX. É professor emérito de ciência cognitiva na
                          Universidade da Califórnia em San Diego, professor de ciência da
                          computação na Universidade Northwestern, leciona na Universidade de
                          Stanford e é co-fundador do Nielsen Norman Group, considerado
                          atualmente o grupo mais consolidado da área.
                        </p><!--caixa secundaria-->
                      </div>
                    </section>
                </section>
                <!-- FIM DA CAIXA SAIBA MAIS  -->
              </div>
              <div class="col-md-6">
                <!-- img modal -->
                <div class="text-center img-01">
                  <p class="TituloFigura FonteMenor text-secondary p-2">
                    <strong>Figura 17:</strong> Don Norman
                  </p>
                  <div class="zoom">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem17">
                      <img src="imgs/topico02/figura17.webp" alt="Imagem que remete a organização" id="img-1">
                    </a>
                  </div>
                  <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte: </strong> <a target="blank"
                      href="https://uxdesign.blog.br/don-norman-e-o-termo-ux-6dffb3f8d218">UXDesign</a></p>
                </div>

                <!-- Imagem 01 - MODAL (Audi)-->
                <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                    <div class="modal-content w-75">
                      <img class="img-fluid" src="imgs/topico02/figura17.webp" alt="Alt da imagem fica aqui">
                    </div>
                    <div class="modal-footer w-75 bg-light justify-content-center">
                      <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong> <a target="blank"
                          href="https://uxdesign.blog.br/don-norman-e-o-termo-ux-6dffb3f8d218"> UXDesign</a></p>
                    </div>
                  </div>
                </div>
                <!-- Imagem 01 - End  (Audi)-->
              </div>
            </div>
            <h4 class="Titulo corsub">1990 - UX</h4>

            <p>
              Don Norman popularizou o termo <strong>“user experience”</strong> enquanto
              trabalhava na Apple nos anos 90. Recentemente Norman falou sobre o <a target="blank"
                href="https://www.youtube.com/watch?v=9BdtGjoIN4E">termo
                UX</a> em um vídeo da NNGroup e relembrou de como a experiência de utilizar
              um computador era fraca, complexa e chegava até a dar medo. Eram estes
              pontos que o departamento de Arquitetura de Experiência do Usuário da
              Apple, onde ele trabalha, buscava melhorar. Ele também afirma que o termo
              hoje está sendo utilizado de forma indevida, pois desenhar uma interface não
              significa trabalhar na experiência do usuário. De acordo com ele, experiência
              do usuário <strong>“é a forma como você vê o mundo, a forma como você
                experimenta sua vida, ou um serviço, ou um aplicativo”</strong>
            </p>
            <p>
              Além do termo UX, Norman disseminou termos da área bastante
              utilizados hoje. Entre estes,<strong>“design centrado no usuário”</strong> (User Centered
              System Design), que é utilizado para descrever o design baseado nas
              necessidades do usuário, considerando estética, por exemplo, como algo
              secundário. O design centrado no usuário envolve simplificar a estrutura de
              tarefas, tornando coisas mais visíveis, criando correspondências corretas para
              controles e funcionalidades, explorando o poder das limitações, e projetando
              interfaces para suportar erros.
            </p>

            <h4 class="Titulo corsub">1994 - Heurísticas de Nielsen</h4>

            <p>
              É nesse momento que conhecemos o segundo nome mais importante
              atualmente na área: <strong>Jakob Nielsen</strong>. Em 1994, Jakob Nielsen publicou o livro Engenharia de
              Usabilidade, que traz uma definição sobre métodos de
              pesquisa para usuários e compila boas práticas da área.
            </p>

            <p>
              Em 1994, Nielsen publicou as <strong>10 heurísticas de usabilidade</strong>, ainda hoje
              bastante utilizadas. As heurísticas de Nielsen, como são chamadas, são a base
              dos critérios de boas práticas de usabilidade. Elas servem como base para
              criação de outras heurísticas e práticas. Apesar de não terem sido as
              primeiras, ao longo do tempo passaram a ser as mais populares. Hoje as
              heurísticas são utilizadas em vários momentos do processo de design. Junto
              com as heurísticas, Nielsen divulgou um método de inspeção de usabilidade
              que era barato, rápido e fácil de aplicar.
            </p>

            <div class="row">
              <div class="col-md-6">
                <!-- img modal -->
                <div class="text-center img-01 scool">
                  <p class="TituloFigura FonteMenor text-secondary p-2">
                    <strong>Figura 18</strong>- Jakob Nielsen
                  </p>
                  <div class="zoom">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem18">
                      <img src="imgs/topico02/figura18.png">
                    </a>
                  </div>
                  <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>Google</p>
                </div>

                <!-- Imagem 01 - MODAL (Audi)-->
                <div class="modal fade text-center" id="Imagem18" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                    <div class="modal-content w-50">

                      <a href="#" data-bs-toggle="modal" data-bs-target="#Imagem01">
                        <img src="imgs/topico02/figura18.png" class="object-fit-contain w-100 ">
                      </a>
                    </div>
                    <div class="modal-footer w-50 bg-light justify-content-center">
                      <p class="text-secondary"><strong>Fonte:</strong> google</p>
                    </div>
                  </div>
                </div>
                <!-- Imagem 01 - End  (Audi)-->
              </div>
              <div class="col-md-6">
                <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                <section class="container">
                  <div class="accordion">
                    <section id="content">
                      <div class="caixaprincipal" id="tituloSaibaMais">
                        <div class="div_teste">
                          <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                          <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                        </div>
                      </div> <!--caixa Principal-->
                      <div class="accordion-content" id="saibamais">
                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                        <p class="txt-caixasecundaria"><a target="blank"
                            href="https://pt.wikipedia.org/wiki/Jakob_Nielsen">Jakob Nielsen</a> é um cientista da
                          computação com Ph.D. em interação
                          homem-máquina. É um <strong>User Advocate</strong> (a prática de usar porta-vozes
                          designados para facilitar a interação entre usuários e designers dos
                          produtos que utilizam) e diretor da Nielsen Norman Group, que ele cofundou com o Don Norman. </p>
                        <!--caixa secundaria-->
                      </div>
                    </section>
                </section>
                <!-- FIM DA CAIXA SAIBA MAIS  -->
              </div>
            </div>
            <h4 class="Titulo corsub">2000 - A era dos dispositivos portáteis</h4>

            <p>
              Neste início de século XXI, nós vivemos a popularização dos smartphones
              e mais recentemente de dispositivos vestíveis, como relógios inteligentes. Os critérios de usabilidade
              tornaram-se mais especializados a cada evolução dos
              sistemas e ganham cada vez mais espaço no mundo da tecnologia.
            </p>

            <p>
              Hoje não é mais um privilégio das grandes empresas ter um
              departamento ou equipe dedicada à experiência do usuário. O número de
              profissionais e especialistas na área de projeto de interação cresce na medida
              em que a demanda por produtos mais usáveis é solicitada por usuários
              (REBELO, 2009). Aos poucos todos se dão conta que há um retorno positivo
              no cuidado com a qualidade da interação.
            </p>
            <p>
              Em meio a uma pandemia, percebemos o quanto os dispositivos e
              sistemas nos conectam e estão presentes em nosso dia a dia. Como vocês
              viram, ao longo da história dessa área de estudo, muitos termos e
              especialidades foram envolvidos para tratar do mesmo assunto: interação
              com interfaces de sistemas. Hoje é possível falar tanto de UX quanto da
              arquitetura da informação de um sistema, pois os termos que vieram de
              diferentes disciplinas coexistem. Essa rede complexa de disciplinas busca as
              soluções mais adequadas às pessoas. Como você vê o futuro dessa área?
            </p>

            <h4 class="Titulo corsub scool">A evolução das interfaces</h4>

            <p>
              Todos os fatos históricos apresentados acompanharam a evolução das
              interfaces computacionais. Entender de uma forma global a evolução das
              interfaces explica como a área cresceu e se popularizou. Segundo Fernandez
              (2007), a evolução das interfaces se apresenta da seguinte forma:
            </p>

            <div class="apresentacao mb-5">
                        <div class="img_apresentacao wow animate__zoomIn">
                            <img src="imgs-pessoas/Group 11.png" class="w-100" alt="">
                        </div>
                        <div>
                            <!-- lista ordenada  -->
                            <ul class="wow fadeIn" data-wow-delay="0.3s" id="txt_final">
                                <li class="wow animate__zoomIn texto_apresentacao_lista_verde_menor" data-wow-delay="0.3s"><i class="fa-solid fa-check" style="color: #ffffff;"></i> <strong>Anos 1950:</strong> Interface de hardware “para engenheiros” com diversos
                                botões de interação
                                </li>
                                <li class="wow animate__zoomIn texto_apresentacao_lista_verde_menor" data-wow-delay="0.3s"><i class="fa-solid fa-check" style="color: #ffffff;"></i> <strong>Anos 1960-1970:</strong> Interface de programação (COBOL, FORTRAN)
                                </li>
                                <li class="wow animate__zoomIn texto_apresentacao_lista_verde_menor" data-wow-delay="0.3s"><i class="fa-solid fa-check" style="color: #ffffff;"></i> <strong>Anos 1970-1990:</strong> Interface de terminais (linguagens de comando)
                                </li>
                                <li class="wow animate__zoomIn texto_apresentacao_lista_verde_menor" data-wow-delay="0.3s"><i class="fa-solid fa-check" style="color: #ffffff;"></i> <strong>Anos 1980:</strong> Interface de interação para diálogo (GUIs, multimídia)
                                </li>
                                <li class="wow animate__zoomIn texto_apresentacao_lista_verde_menor" data-wow-delay="0.3s"><i class="fa-solid fa-check" style="color: #ffffff;"></i> <strong>Anos 1990:</strong> Interface para realizar trabalho (redes e grupos)
                                </li>
                                <li class="wow animate__zoomIn texto_apresentacao_lista_verde_menor" data-wow-delay="0.3s"><i class="fa-solid fa-check" style="color: #ffffff;"></i> <strong>A partir de 2000:</strong> Interface torna-se onipresente (Aparelhos celulares,
                                bluetooth, dispositivos móveis, eletrônicos, por toda a parte, telas
                                interativas e muitas tecnologias embarcada)
                                </li>
                            </ul>
                            <!-- fim da lista ordenada  -->
                        </div>
                    </div>

          </div>

        </div>

      </div>

    </section>

    <!-- Botões de navegação -->
    <div class="text-center">
      <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
          class="fa-solid fa-chevron-left"></i> Voltar </a>
      <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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