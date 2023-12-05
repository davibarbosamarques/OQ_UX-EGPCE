<?php
include('layout/head.php');
?>

<body>

    <!-- NAV -->
    <?php 
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- MENU LATERAL -->
    <?php
    include('layout/menu.php');
    ?>
    <!-- FIM DO MENU LATERAL -->

    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">01 - Interação Humano-Computador</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->

                        <p>O exemplo que foi apresentado na seção de “Apresentação” explora
                            conceitos de Interação Humano-Computador aplicados a produtos físicos.
                            IHC, entretanto, tem foco em sistemas computacionais. Desta forma
                            seguiremos a partir daqui com exemplos de sistemas que podem ser
                            aplicativos de celulares, como Whatsapp, softwares que você utiliza no
                            computador, como Microsoft Word, sistemas embarcados em outros
                            dispositivos, como sistemas que estão presentes nos caixas eletrônicos do seu
                            banco, dentre outros. Isto não impede, porém, que os conceitos sejam
                            utilizados de forma ampla em outros aspectos da vida.
                        </p>
                        <p>
                            Interação Humano-Computador (IHC) é uma subárea da computação
                            que está interessada na qualidade de uso de sistemas e no impacto destes
                            sistemas na vida de seus usuários (BARBOSA; SILVA, 2010). IHC tem um foco
                            diferente de Engenharia de Software, que busca proporcionar sistemas
                            interativos mais eficientes, robustos, livres de erros e de fácil manutenção.
                            Essas características de Engenharia de Software não garantem qualidade de
                            uso, logo é possível ter um sistema robusto e livre de erros, que seja difícil de
                            ser compreendido pelo usuário e pouco útil para ele.

                        </p>
                        <p>
                            Diante desse cenário, há duas possibilidades para construção de um software:
                        </p>

                        <!-- COLUNA COM AS DUAS IMAGENS -->
                        <!-- Imagem 01 -->
                        <div class="row">
                            <div class="text-center col-12 col-md-6">
                                <p class="TituloFigura">(a) De dentro para fora</p>
                                <div class="zoom">
                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img src="imgs/topico01/Figura02.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>BARBOSA; SILVA,
                                    2010</p>
                            </div>

                            <!-- imagem 03 -->
                            <div class="text-center col-12 col-md-6">
                                <p class="TituloFigura">(b) De fora para dentro</p>
                                <div class="zoom">
                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                        <img src="imgs/topico01/Figura02.1.png" alt="Imagem que remete a organização"
                                            id="img-1">
                                    </a>
                                </div>
                                <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>BARBOSA; SILVA,
                                    2010</p>
                            </div>
                        </div>
                        <!-- Imagem 02 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/Figura02.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 2</strong> - Abordagens de desenvolvimento
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End  (Audi)-->


                        <!-- Imagem 03 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem02" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/Figura02.1.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Fonte:</strong> - Abordagens de desenvolvimento
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 03 - End  (Audi)-->
                        <!-- COLUNA COM AS DUAS IMAGENS -->

                        <p>Qual destas abordagens você considera a mais correta? A resposta é que não há
                            uma abordagem correta e sim especificidades de construção do software que necessitam de uma
                            ou outra abordagem.</p>

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
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">Cada projeto possui uma realidade própria que
                                            inclui tecnologias escolhidas, limitações de recursos, processo de
                                            desenvolvimento etc, assim como há um propósito para o qual o projeto
                                            existe. É necessário analisar esta realidade para definir características de
                                            projeto, como, por exemplo, a abordagem de desenvolvimento. Este é um dos
                                            papéis dos analistas de sistemas.</p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->

                        <p>A concepção de dentro para fora tem ênfase na representação de dados e
                            algoritmos que processam estes dados, assim como na arquitetura do sistema. Não é dada
                            atenção a como esse software será utilizado e normalmente se pressupõe que haverá um esforço
                            de quem o utiliza para que compreendê-lo bem. Por exemplo, sistemas que interagem somente
                            com outros sistemas podem utilizar-se bem dessa abordagem para ter qualidade de construção
                            como prioritária e se ajustar corretamente às limitações dos projetos</p>

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
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">Esta abordagem é concebida em grande parte da
                                            Computação (BARBOSA; SILVA, 2010) e como resultado é comum que sistemas que
                                            possuem uma grande abrangência de usuários tenham interfaces não
                                            apropriadas.</p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <p>Para uma interface mais alinhada com o uso real do sistema, podemos utilizar a
                            abordagem de fora para dentro, que começa investigando os atores envolvidos, seus
                            interesses, objetivos, atividades, responsabilidades, motivações, os artefatos utilizados, o
                            domínio, o contexto de uso, dentre outros (BARBOSA; SILVA, 2010), para somente depois
                            identificar oportunidades de intervenção na interação atual e como essa estrutura será
                            viabilizada pelas tecnologias utilizadas.</p>

                        <h3 class="Subtopico fw-bolder" id="item1">02.1 - Áreas de estudo em IHC</h3>

                        <p>IHC é uma disciplina interessada no projeto, implementação e avaliação
                            de sistemas computacionais interativos (HEWETT et al., 1992). IHC, nesse
                            sentido, fornece explicações e previsões para fenômenos de interação
                            usuário-sistema e resultados práticos para design da interface de
                            usuário. A Figura 3 apresenta essa definição, estabelecendo a conexão entre
                            previsão e design e entre explicação e avaliação. Design e avaliação são duas
                            áreas de atuação em IHC e consequentemente em design UX.
                        </p>

                        <div class="text-center img-01">Figura 03:
                            <div class="zoom">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img src="imgs/topico01/figura03.png" alt="Imagem que remete a organização"
                                        id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>BARBOSA; SILVA, 2010
                            </p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura03.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 03: </strong>Principais conceitos de IHC
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                        <p>De acordo com Hewett, em seu livro sobre currículo para IHC ACM
                            SIGCHI curricula for human-computer interaction (HEWETT et al., 1992), é
                            possível entender IHC dentro de um contexto de 5 aspectos interrelacionados:
                        </p>

                        <ol id="txt_final">
                            <li>Natureza da interação;</li>
                            <li>Contexto de uso;</li>
                            <li>Características humanas;</li>
                            <li>Sistemas computacionais;</li>
                            <li>Processo de desenvolvimento.</li>
                        </ol>

                        <p>Algumas das inter-relações entre esses tópicos estão representadas na
                            <strong> Figura 4 </strong>(HEWETT et al., 1992).
                        </p>

                        <div class="text-center img-04">
                            <div class="zoom">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                    <img src="imgs/topico01/figura04.png" alt="Imagem que remete a organização"
                                        id="img-4">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>BARBOSA; SILVA, 2010
                            </p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem04" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura04.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 04: </strong>Abordagens de desenvolvimento
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                        <p>Na imagem, vemos que os sistemas computacionais existem em um
                            ambiente <strong>social, organizacional e de trabalho </strong> mais amplo. Dentro deste
                            contexto existem <strong>aplicações</strong> para as quais desejamos empregar esses
                            sistemas. Porém o processo de colocar os computadores para funcionar
                            significa que os <strong>aspectos humanos,</strong> técnicos e de trabalho da situação do
                            aplicativo devem ser ajustados uns aos outros por meio da aprendizagem
                            humana, adaptabilidade do sistema ou outras estratégias. </p>

                        <p>Além do uso e do contexto social dos computadores, do lado humano
                            também devemos levar em consideração as características de
                            <strong>processamento da informação </strong>humana, <strong>comunicação</strong> e
                            características
                            físicas dos usuários, que envolvem a <strong>ergonomia.</strong>
                        </p>

                        <p>Do lado do computador, que hoje representa uma infinidade de
                            dispositivos, como smartphones, relógios inteligentes (smartwatches),
                            dispositivos de assistentes inteligentes e outros, temos uma variedade de tecnologias
                            desenvolvidas para dar suporte à interação com humanos. Essas
                            tecnologias estabelecem <strong>dispositivos de entrada e saída</strong> que conectam o
                            humano e a máquina. Estes dispositivos, também conhecidos por periféricos,
                            que podem ser teclados, câmeras e até batimentos cardíacos, são usados a
                            partir de várias <strong>técnicas</strong> para organizar um diálogo. Essas técnicas, por
                            sua
                            vez, são usadas para implementar elementos de design maiores, como a
                            metáfora da interface. Aprofundando-se nos substratos da máquina que dão
                            suporte ao diálogo, o diálogo pode fazer uso extensivo de técnicas de
                            computação gráfica. </p>

                        <h4 class="subsubtopico fw-bolder">02.1.1 - Natureza da Interação</h4>

                        <p>A natureza da interação envolve investigar o que ocorre enquanto as
                            pessoas utilizam sistema interativos em suas atividades (HEWETT et al., 1992).
                            Envolve também entender alguns paradigmas dessa comunicação, como
                            avaliar os diversos pontos de vista, como do ponto de vista de trabalho, onde
                            se vê o sistema como ferramenta, ou do ponto de vista de controle, quando é
                            necessário supervisionar atividades de alguém.</p>

                        <p>É também parte da natureza da interação que se compreenda os
                            objetivos de uso de um sistema, por exemplo, produtividade ou capacitação
                            do usuário. É neste âmbito que deve se discutir qual a consequência da
                            interação do uso de um sistema para as pessoas e para sociedade.</p>

                        <p> <strong>Você em algum momento já ouviu seu telefone tocar ou vibrar sem
                                ele estar tocando de fato?</strong> Se sim, este fenômeno pode ser considerado
                            como a “Síndrome do Toque Fantasma”. Ele pode estar relacionado à
                            nomofobia. </p>

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
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">A <a target="blank"
                                                href="https://pt.wikipedia.org/wiki/Nomofobia"
                                                class="aref">nomofobia</a> é a fobia causada pelo desconforto ou
                                            angústia
                                            resultante da incapacidade de acesso à comunicação por meio de
                                            aparelhos celulares ou computadores. Surge quando alguém se sente
                                            impossibilitado de se comunicar ou se vê incontactável estando em algum
                                            lugar sem um aparelho de celular ou dispositivo com internet. É um termo
                                            muito recente e tem origem nos diminutivos ingleses No-Mo, ou NoMobile, que
                                            significa sem celular. Daí a expressão "nomofobia" ou fobia de
                                            ficar sem um aparelho de comunicação móvel.</p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                        <p>Recentemente uma reportagem do jornal Diário do Nordeste apresentou
                            uma matéria sobre o uso abusivo de celulares. No texto, a psicóloga Anna
                            Lucia Spear King, doutora em saúde mental do <a href="https://institutodelete.com/quemsomos"
                                class="aref">Instituto Delete (UFRJ)</a>, explica
                            que a dependência por celulares, também chamada de nomofobia, tem vários
                            níveis: vai da falta de educação digital, que inclui a dificuldade de equilíbrio
                            sobre o tempo e locais de uso, até o nível patológico.</p>

                        <p>Pesquisadores do Instituto Delete identificaram transtornos relacionados
                            ao uso abusivo de celulares, como “o medo de ficar sem o celular”. Entre os
                            transtornos estudados, citam o “Efeito Google”, que é quando as pessoas
                            começam a reter menos informações já que podem obter respostas rápidas
                            no Google.</p>

                        <p>Outro transtorno relacionado que causa comportamentos não esperados
                            do indivíduo em sociedade é a “Invisibilidade Social”. A invisibilidade social
                            vem sendo bastante explorada em filmes e séries que trazem a tecnologia
                            como tema principal. Dois filmes que trazem essa discussão de forma mais
                            leve são: o filme <a target="blank" href="https://www.youtube.com/watch?v=aywJ39-0l9I"
                                class="aref">“Modo avião”</a>, que explora de forma divertida a falta do
                            celular em uma jovem que é influenciadora digital e é obrigada a ir à casa do
                            avô, onde não pega rede de celular, após pôr em risco sua própria vida em
                            função da vida digital; e o filme <a target="blank"
                                href="https://www.netflix.com/br/title/81004099" class="aref">“Nada a esconder”</a>, que
                            coloca em discussão
                            o impacto das informações pessoais que recebemos pelos celulares em um jogo entre amigos.
                            Apesar de a discussão nestes filmes ocorrer de forma mais
                            leve, o problema é sério e pode desenvolver transtornos mais graves.
                        </p>

                        <p>Você já se deu conta destes efeitos e de como o design tem
                            responsabilidade sobre isto? Em outro exemplo recente, o documentário <a
                                href="https://www.youtube.com/watch?v=7X54fS0SQyw" class="aref">“O
                                Dilema das Redes”</a> expõe uma opinião sobre a manipulação sofrida pelos
                            usuários das redes sociais com o objetivo de propiciar ganhos financeiros às
                            empresas, analisando o papel das redes sociais e os danos que elas causam à
                            sociedade.
                        </p>

                        <p>Outro ponto importante sobre a natureza da interação é como a
                            comunicação é estabelecida com os usuários. A UNESCO apresentou em 2019
                            um documento intitulado como “I'd blush if I could" (WEST et al., 2019). O
                            título da publicação toma emprestado o nome da resposta dada por Siri, a
                            assistente de voz feminina usada nos iPhones, quando um usuário dizia a 'ela'
                            um insulto de gênero, e a resposta era “Eu ficaria envergonhada se pudesse”.
                            De acordo com o manual, essa resposta apresenta submissão da assistente
                            em face ao abuso. Apesar de já ter sido corrigida, essa situação fornece uma
                            ilustração poderosa dos preconceitos de gênero codificados em produtos de
                            tecnologia, difundidos no setor de tecnologia e aparentes na educação de
                            habilidades digitais.</p>

                        <div class="text-center img-05">
                            <div class="zoom">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                    <img src="imgs/topico01/figura05.png" alt="Imagem que remete a organização"
                                        id="img-5">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong>UNESCO</p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem05" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura05.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 05: </strong>- Documento da UNESCO sobre
                                        gêneros em sistemas computacionais</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                        <p>Na área da comunicação com sistemas, o “Manual para uso não sexista
                            da linguagem”, do Governo do Rio Grande do Sul, levanta questões sobre o uso da linguagem e
                            expõe soluções práticas e aplicadas a textos para uma
                            comunicação mais apropriada. Esses conceitos surgem em áreas distintas e
                            devem ser incorporados ao design de sistemas. O efeito dessa evolução pode
                            ser visto como o que a plataforma GitHub realizou ao substituir termos
                            considerados <a
                                href="https://www.tecmundo.com.br/software/154174-github-substituir-termos-considerados-racistas-plataforma.htm"
                                class="aref">racistas</a>, como 'master' (mestre) e 'slave' (escravo) por
                            alternativas como 'principal', 'padrão', 'primário' e 'secundário'. </p>

                        <p>Há muita responsabilidade no design de sistemas, mas também é fato
                            que essa responsabilidade se altera com o tempo. Cada geração resolve
                            novos problemas e se depara com outros. A exemplo disso, vejam na <strong>Figura
                                6</strong> a evolução da embalagem de um chocolate voltado para crianças que teve
                            em sua primeira versão em 1959 uma imitação aos cigarros, que eram
                            comuns na época e representavam status e elegância.</p>

                        <div class="text-center img-06">
                            <div class="zoom">
                                <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                    <img src="imgs/topico01/figura06.png" alt="Imagem que remete a organização"
                                        id="img-5">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary"><strong>Fonte:</strong><a
                                    href="https://vejasp.abril.com.br/coluna/memoria/por-onde-anda-menino-cigarrinhos-pan"
                                    class="aref">Veja SP, 2017,</a></p>
                        </div>

                        <!-- Imagem 01 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem06" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura06.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 06: </strong>- Evolução das embalagens do
                                        produto Reprodução</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->
                        <p>Olhando para o futuro, nos deparamos com a responsabilidade de
                            planejar sistemas com tecnologias como inteligência artificial. De acordo com
                            o artigo científico de Bostrom e Yudkowsky (2014) “The Cambridge handbook
                            of artificial intelligence”, a possibilidade de criar máquinas pensantes levanta
                            uma série de questões éticas. Essas questões se referem tanto a garantir que
                            tais máquinas não prejudiquem os humanos e outros seres moralmente
                            relevantes, quanto ao status moral das próprias máquinas. Para essas
                            tecnologias mais avançadas e complexas, se espera critérios de aceitação
                            como responsabilidade, transparência e auditabilidade.
                        </p>

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
                                        <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong>
                                        </p>
                                        <p class="txt-caixasecundaria">Todo produto é de responsabilidade de quem o
                                            planeja (designer), de quem o constrói e de quem o utiliza.</p>
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA FIQUE ATENTO -->
                        <h4 class="subsubtopico fw-bolder">02.1.2 - Contexto de uso</h4>

                        <p>O contexto de uso envolve investigar a interação de pessoas com
                            sistemas levando em conta a cultura, a sociedade, a organização e a
                            linguagem. Assim como lidamos com os fenômenos da natureza, no contexto
                            de uso entendemos as diferenças entre como as pessoas utilizam os sistemas
                            computacionais e os dispositivos de acordo com seu contexto de uso.</p>

                        <p>Um problema comum no desenvolvimento de sistemas está ligado ao
                            fato de que a equipe que desenvolve não está no contexto de uso do sistema
                            e pode inferir de forma errada como alguém irá interagir com o sistema. A
                            <strong>Figura 7</strong> mostra como estes mundos podem ser distintos.
                        </p>

                        <!-- COLUNA COM AS DUAS IMAGENS -->
                        <div class="row text-center">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 7, 7.1</strong> -
                                Contexto de uso x Contexto de Desenvolvimento</p>
                            <div class="col-12 col-md-6 ">
                                <div class="zoom img-07">
                                    <a href="imagens/Figura07.png" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                        <img src="imgs/topico01/Figura07.png" alt="Imagem que remete a organização"
                                            id="img-7" class="w-75">
                                    </a>
                                </div>
                            </div>

                            <!-- imagem 07.1 -->
                            <div class="col-12 col-md-6">
                                <div class="zoom">
                                    <a href="imagens/Figura07png" data-bs-toggle="modal" data-bs-target="#Imagem07-1">
                                        <img src="imgs/topico01/Figura07-1.png" alt="Imagem que remete a organização"
                                            id="img-7-1" class="w-75">
                                    </a>
                                </div>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary ">Fontes: (1) <a target="blank"
                                    href="https://www.youtube.com/watch?v=uuzTSTmIaUc" class="aref">Vídeo do Instituto
                                    Socioambiental</a> e (2) <a
                                    href="https://www.pexels.com/pt-br/foto/foto-de-pessoas-fazendo-apertos-de-mao-3183197/"
                                    class="aref">Pexels</a> </p>
                        </div>


                        <!-- Imagem 07 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem07" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/Figura07.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 7</strong> </p>
                                </div>
                            </div>
                        </div>

                        <!-- Imagem 07.1 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem07-1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/Figura07-1.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figuar 7.1</strong></p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->
                        <!-- COLUNA COM AS DUAS IMAGENS -->

                        <p>De acordo com o contexto, um sistema pode utilizar uma linguagem
                            mais formal ou menos formal. Esta também é uma decisão de design. Veja na
                            <strong>Figura 8</strong> três exemplos de recursos de linguagem: (1) uma linguagem
                            informal para um site de intercâmbio, (2) uma linguagem mais amigável para
                            informar um erro no Google Chrome e (3) uma linguagem conversacional
                            para a ferramenta <a target="blank" href="https://www.dropbox.com/paper/start?no_redirect=1"
                                class="aref">Paper do Dropbox</a>. Veja que cada exemplo está dentro de um contexto de
                            uso e possivelmente a escolha das palavras foi uma decisão
                            tomada no momento do planejamento do sistema. Isto pode acontecer para
                            se aproximar do público-alvo, como no primeiro exemplo da agência de
                            intercâmbio ao apresentar uma linguagem mais jovem, ou para facilitar o uso,
                            como no exemplo do Paper.
                        </p>


                        <div class="text-center img-08">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 8, 8.1 e 8.2</strong>
                                - Linguagens e contextos de uso</p>
                            <div class="zoom">
                                <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                    <img src="imgs/topico01/figura08.png" alt="Imagem de uma bússula" id="img-2">
                                </a>
                            </div>
                        </div>

                        <div class="text-center img-08">
                            <div class="zoom">
                                <a href="imagens/Figura08-1.png" data-bs-toggle="modal" data-bs-target="#Imagem08-1">
                                    <img src="imgs/topico01/figura08-1.png" alt="Imagem de uma bússula" id="img-2">
                                </a>
                            </div>
                        </div>
                        <div class="text-center img-08">
                            <div class="zoom">
                                <a href="imagens/Figura08-2.png" data-bs-toggle="modal" data-bs-target="#Imagem08-2">
                                    <img src="imgs/topico01/figura08-2.png" alt="Imagem de uma bússula" id="img-2">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary ">Fontes: (1) <a target="blank"
                                    href="https://www.worldpackers.com/pt-BR" class="aref">Worldpackers</a> e (2) Google
                                Chrome e (3) <a target="blank" href="https://www.dropbox.com/paper/start?no_redirect=1"
                                    class="aref">Dropbox Paper</a></p>
                        </div>

                        <!-- Imagem 02 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura08.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary">Figura 8</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End (Audi)-->
                        <!-- Imagem 02 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem08-1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura08-1.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary">Figura 8.1</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End (Audi)-->
                        <!-- Imagem 02 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem08-2" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura08-2.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary">Figura 8.2</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 02 - End (Audi)-->


                        <p>O contexto de uso pode destacar uma cultura, como mostra o artigo
                            científico “Kawaii/ Interação fofa", do inglês “Kawaii/Cute Interactive Media”,
                            (CHEOK, 2010). Se você já teve contato com cultura japonesa possivelmente
                            já ouviu falar sobre o termo Kawaii. De acordo com o artigo, a aplicação de
                            elementos considerados fofos em sistemas interativos têm raízes na estética
                            de muitos elementos históricos e culturais, como a cultura japonesa Kawaii.
                            Nesse estudo o autor percebeu que há uma correlação entre o que se
                            percebe como atraente e bonito em interfaces com a presença de elementos
                            fofos. Essa é uma forma de mostrar a ligação do design à cultura.</p>

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
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria">A palavra <a target="blank"
                                                href="https://www.dicionariopopular.com/kawaii/" class="aref">Kawaii</a>
                                            surgiu em 1970 na cultura japonesa e pode ser
                                            considerada um neologismo. O kanji ( 可 爱 ) utilizado para representar o
                                            termo é semelhante ao que usam na China. Kawaii é uma palavra japonesa
                                            com vários significados por não ter uma tradução exata. Ela pode ser usada
                                            para adjetivos como fofo, adorável, amável, doce, doçura e etc. A palavra é
                                            usada principalmente pelos otakus, os fãs de anime e cultura pop
                                            japonesa, como uma forma de elogio.</p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->
                        <h4 class="subsubtopico fw-bolder">02.1.3 - Características Humanas</h4>

                        <p>As características humanas envolvem investigar a forma como as pessoas
                            se comunicam e interagem entre si e com outros artefatos utilizando visão,
                            audição, processos cognitivos e outros fenômenos humanos para
                            compreensão. A interação com qualquer artefato novo, principalmente os
                            sistemas computacionais interativos, que lidam com informações, requer
                            capacidade cognitiva para processar informações e aprender a utilizá-los
                            (BARBOSA; SILVA, 2010).</p>
                        <p>Voltando ao exemplo inicial deste curso, do rádio bluetooth, podemos
                            relembrar que houve uma expectativa de funcionalidade para o elemento da interface que
                            parecia um botão comum em outros dispositivos semelhantes.
                            Isto é explicado pela nossa <strong>tendência a repetir interações cotidianas</strong>.</p>

                        <p>É possível aproveitar essas capacidades do usuário respeitando suas
                            limitações. Por exemplo, algumas interfaces de sistemas que tocam músicas
                            apresentam elementos semelhantes aos botões de volume de dispositivos
                            físicos. Esse estilo de design é chamado de skeumorfismo.
                        </p>

                        <!-- COLUNA COM AS DUAS IMAGENS -->
                        <div class="row text-center">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 9, 9.1</strong> -
                                Contexto de uso x Contexto de Desenvolvimento</p>
                            <div class="col-12 col-md-6 img-09">
                                <div class="zoom">
                                    <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                        <img src="imgs/topico01/Figura09.png" alt="Imagem que remete a organização"
                                            id="img-9" class="w-75">
                                    </a>
                                </div>
                            </div>

                            <!-- imagem 07.1 -->
                            <div class="col-12 col-md-6 ">
                                <div class="zoom">
                                    <a href="imagens/Figura09-1png" data-bs-toggle="modal" data-bs-target="#Imagem09-1">
                                        <img src="imgs/topico01/Figura09-1.png" alt="Imagem que remete a organização"
                                            id="img-9-1" class="w-75">
                                    </a>
                                </div>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary ">Fonte: Google</p>
                        </div>


                        <!-- Imagem 09 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem09" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/Figura09.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 9</strong> </p>
                                </div>
                            </div>
                        </div>

                        <!-- Imagem 09.1 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem09-1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/Figura09-1.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figuar 9.1</strong></p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->
                        <!-- COLUNA COM AS DUAS IMAGENS -->

                        <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloSaibaMais">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="saibamais">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria"><strong>Skeumorfismo</strong>, do grego, skeuos,
                                            recipiente ou ferramenta; e morphe,
                                            forma. O termo se refere a truques visuais ou ao uso de talhes e
                                            ornamentações para imitar outros materiais e formas físicas. A estratégia
                                            existe pelo menos desde a GUI (Interface Gráfica do Usuário) dos
                                            computadores da Apple, de 1984, que introduziu o conceito de área de
                                            trabalho com ícones semelhantes às pastas e pedaços de papel. O recurso
                                            se mostrou extremamente útil naquela época, pois tais interfaces gráficas
                                            constituíam conceitos estranhos para a maioria dos usuários, de modo que
                                            o uso desses itens familiares representava um auxílio significativo para a
                                            compreensão do seu funcionamento e operação (DE SOUSA; GRIMALDI,
                                            2015).
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->

                        <p>Para compreender as características humanas envolvidas, é necessário
                            separar os elementos principais da interação: o <strong>sistema</strong>, a
                            <strong>interface e o
                                usuário (Figura 10)</strong>. A interface compreende toda a opção do sistema com a qual
                            o usuário mantém contato físico (motor ou perceptivo) ou conceitual
                            durante a interação (MORAN, 1996). A interface é muitas vezes confundida
                            com o próprio sistema, mas o sistema pode envolver outras partes de uma
                            arquitetura que é invisível ou inacessível ao usuário. Entre o usuário e o
                            sistema nós temos os processos de ação e de interpretação por meio da
                            interface.
                        </p>
                        <!-- IMAGEM -->
                        <div class="text-center">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 10</strong> - Contexto
                                de uso x Contexto de Desenvolvimento</p>
                            <div class="zoom">
                                <a href="imagens/Figura010.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                    <img src="imgs/topico01/figura10.png" alt="Imagem que remete a organização"
                                        id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary">Fonte: <a target="blank"
                                    href="https://thiagoesser.wordpress.com/2013/04/05/modelo-mental-vs-modelo-conceitual/"
                                    class="aref">Blog Thiago Esser</a></p>
                        </div>

                        <!-- Imagem 10 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem10" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura10.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary">Figura 10</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

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
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria"><a target="blank"
                                                href="https://www.youtube.com/watch?v=dEAQkHj25hg" class="aref">Clique
                                                aqui</a> ou aponte a câmera do seu celular para o QRCode caso
                                            queira expandir um pouco mais os conceitos de usuário e interface, veja o
                                            vídeo de um comercial de um Pet-commerce.
                                        </p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->
                        <div class="text-center">
                            <img src="imgs/topico01/QRCode.png" alt="QRCode">
                        </div>
                        <p>Imagine agora que você nunca viu um iPad, mas acabei de lhe entregar
                            um e dizer que você pode ler livros nele. Antes de ligar o iPad, antes de usálo, você tem um
                            modelo em sua cabeça de como será a leitura de um livro no
                            iPad. Você tem suposições sobre como o livro será apresentado na tela, como
                            será possível interagir, como passar uma página. Você tem um “modelo
                            mental” de leitura de um livro no iPad, mesmo que nunca o tenha feito antes
                            (Figura 11).
                        </p>

                        <!-- IMAGEM 11-->
                        <div class="text-center">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 11</strong> - Contexto
                                de uso x Contexto de Desenvolvimento</p>
                            <div class="zoom">
                                <a href="imagens/Figura011.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                    <img src="imgs/topico01/figura11.png" alt="Imagem que remete a organização"
                                        id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary">Fonte: <a target="blank"
                                    href="https://uxmag.com/articles/the-secret-to-designing-an-intuitive-user-experience"
                                    class="aref"> UXMag</a></p>
                        </div>

                        <!-- Imagem 11 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem11" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura11.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary">Figura 11</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                        <p>A aparência e o comportamento desse modelo mental na sua cabeça
                            depende de muitas coisas: se você já usou um iPad antes, seu modelo mental
                            de ler um livro em um iPad será diferente do de alguém que nunca usou um.
                            Assim que você utilizar o iPad para ler algum livro, qualquer modelo mental
                            que você tinha em sua cabeça antes começará a mudar e se ajustar para
                            refletir sua experiência (WEINSCHENK, 2010). </p>

                        <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                        <section class="container">
                            <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloSaibaMais">
                                        <div class="div_teste">
                                            <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                                            <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                        </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="saibamais">
                                        <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                    Passe o mouse acima
                                                </strong></strong></p>
                                        <p class="txt-caixasecundaria"><strong>Modelo mental</strong> é a representação
                                            do processo de <strong>pensamento de
                                                alguém para saber como algo funciona</strong>(ou seja, a compreensão da
                                            pessoa sobre o mundo que a envolve). Os modelos mentais são <strong>baseados
                                                em informações incompletas, experiências passadas e até mesmo
                                                percepções intuitivas</strong>. Eles ajudam a moldar ações e
                                            comportamentos,
                                            influenciando naquilo que as pessoas devem prestar atenção em situações
                                            complicadas e como elas abordam e resolvem os problemas (CAREY,
                                            1986).</p><!--caixa secundaria-->
                                    </div>
                                </section>
                        </section>
                        <!-- FIM DA CAIXA SAIBA MAIS  -->
                        <p>Para entender por que os modelos mentais são tão importantes para
                            projetar interfaces de usuário, você também precisa entender o que é um
                            modelo conceitual. Um <strong>modelo conceitual</strong> é o modelo real que é fornecido
                            ao usuário por meio da interface do produto (WEINSCHENK, 2010). No
                            exemplo da leitura do livro no iPad, você tem um modelo mental sobre como
                            será a leitura de um livro no dispositivo, como funcionará e o que você pode
                            fazer com o dispositivo pela interface. Mas quando você senta com o iPad, o
                            “sistema” (o iPad) exibe o que o modelo conceitual do aplicativo de livro
                            realmente é. <strong>O modelo conceitual é formado por telas, botões e ações
                                que acontecem independentemente do que você esperava</strong>(WEINSCHENK,
                            2010). A interface real representa o modelo conceitual. Alguém projetou uma
                            interface de usuário e essa interface está comunicando a você o modelo
                            conceitual do produto.</p>

                        <p>Encerramos esta sessão de características humanas com dois conceitos
                            importantes para design UX: modelos conceituais e modelos mentais. O
                            designer, ou quem tenha esse papel na equipe, é um elo entre os dois
                            modelos. Com técnicas apropriadas e uma visão ampla dos projetos, ele é
                            capaz de reduzir a distância entre o que se espera (modelo mental) do que se
                            projeta e constrói (modelo conceitual).
                        </p>

                        <h4 class="subsubtopico fw-bolder">02.1.4 - Sistemas computacionais</h4>

                        <p>Sistemas de computadores envolvem utilizar arquiteturas, técnicas e
                            interfaces buscando construir sistemas que favoreçam a experiência de uso. É
                            possível aproveitar modelos conceituais para entregar sistemas mais
                            adequados aos usuários. Diversas tecnologias e dispositivos têm sido
                            desenvolvidos para permitir e facilitar a interação com pessoas (BARBOSA;
                            SILVA, 2010). </p>

                        <p>O uso de técnicas de Computação Gráfica e Inteligência Artificial podem
                            beneficiar a interação com um sistema a partir do poder das tecnologias. Mas
                            o que poderia de fato ser esse benefício? Em que áreas podemos melhorar
                            com tecnologias mais avançadas?
                        </p>

                        <p>O <a target="blank" href="https://leadfortaleza.com.br/portal/atuacao"
                                class="aref">LEAD</a>, Centro de Pesquisa, Desenvolvimento e Inovação Dell, por
                            exemplo, é um local que explora conhecimento avançado em tecnologia para
                            resolver problemas de acessibilidade. Um dos projetos de pesquisa que
                            desenvolvem é o ARTRADE <strong>(Figura 12).</strong> O ARTRADE é uma aplicação mobile,
                            para smartphones, que auxilia na montagem de hardware, ensinando os
                            funcionários da fábrica da Dell a como montar peças completas de
                            dispositivos da marca. Este projeto utiliza óculos de realidade aumentada e é
                            acessível para pessoas com deficiência auditiva.
                        </p>

                        <!-- IMAGEM 12-->
                        <div class="text-center">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 12</strong> - ARTRADE
                            </p>
                            <div class="zoom">
                                <a href="imagens/Figura012.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                    <img src="imgs/topico01/figura12.png" alt="Imagem que remete a organização"
                                        id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary">Fonte: <a target="blank"
                                    href="https://leadfortaleza.com.br/portal/atuacao">LEAD</a></p>
                        </div>

                        <!-- Imagem 12 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem12" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura12.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary">Figura 12</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->

                        <h4 class="subsubtopico fw-bolder">02.1.5 - Processo de Desenvolvimento</h4>

                        <p>O processo de desenvolvimento influencia na qualidade do produto final.
                            É no processo de desenvolvimento que é possível aplicar abordagens de IHC,
                            que podem ser métodos, técnicas e ferramentas de construção de interface e
                            de avaliação. O processo de desenvolvimento pode incluir, por exemplo, uma
                            análise de casos de sucesso e de insucesso de interfaces.</p>

                        <p>A prototipação é uma prática comum no processo de desenvolvimento.
                            O <strong>protótipo</strong> é uma representação do sistema ou produto real de forma que
                            seja possível imaginá-lo sem a necessidade de ser desenvolvido. É uma
                            técnica utilizada para discutir, testar e documentar uma solução. É possível
                            trabalhar com prototipação em vários níveis de fidelidade. A <strong>Figura 13 </strong>
                            apresenta protótipos que vão de um nível de fidelidade mais baixos, também
                            conhecidos por wireframes, até níveis de fidelidade com a realidade mais
                            altos, que podem ser feitos em softwares especializados, como Adobe XD,
                            Figma, dentre outros.
                        </p>

                        <!-- IMAGEM 12-->
                        <div class="text-center">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 13</strong> -
                                Prototipação</p>
                            <div class="zoom">
                                <a href="imagens/Figura013.png" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                    <img src="imgs/topico01/figura13.png" alt="Imagem que remete a organização"
                                        id="img-1">
                                </a>
                            </div>
                            <p class="FonteFigura FonteMenor text-secondary">Fonte: Ironhack ux design</p>
                        </div>

                        <!-- Imagem 12 - MODAL (Audi)-->
                        <div class="modal fade text-center" id="Imagem13" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/topico01/figura13.png"
                                        alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary">Figura 13</p>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End  (Audi)-->
                        <p>No processo de desenvolvimento, devemos estabelecer qual nível de
                            qualidade que se espera de um sistema ou produto. De acordo com Barbosa
                            e Silva (2010), os critérios de qualidade de uso enfatizam certas características
                            da interação e da interface que as tornam adequadas aos efeitos esperados
                            do uso do sistema. Os critérios de qualidade de uso são:
                        </p>

                        <ol id="txt_final">
                            <!-- lista ordenada  -->
                            <li>Usabilidade: facilidade de aprendizado da interface e satisfação do usuário;</li>
                            <li>Experiência do usuário: emoções e sentimentos do usuário;</li>
                            <li>Acessibilidade: remoção das barreiras que impedem os usuários de interagir com a
                                interface;</li>
                            <li>Comunicabilidade: comunicar ao usuário as intenções de design e alógica que rege o
                                comportamento da interface.</li>
                            <!-- fim da lista ordenada  -->
                        </ol>

                        <p>A parte do processo de desenvolvimento que engloba as práticas e
                            conceitos de qualidade em IHC é chamada de “Processo de Design”. Existem
                            diversas metodologias para processos de design, como Design de Interação
                            (ROGER; PREECE, 2013), <a target="blank" href="https://www.gv.com/sprint/"
                                class="aref">Design Sprint</a>, Lean UX (GOTHELF, 2013), dentre
                            outros.</p>
                    </div>
                </div>
        </section>


        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true"> <i
                    class="fa-solid fa-chevron-left"></i> Voltar </a>
            <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="fa-solid fa-chevron-right"></i></a>
        </div>

        <!-- FOOTER -->
        <?php
    include('layout/footer.php');
    ?>
        <!-- FIM DO FOOTER -->
        <!-- BOTÃO BACK TO TOP COM UMA BARRA DE PROGRESSO -->
        <div id="back_to_top">
            <div id="btn_back">
                <i id="icon_up" class="fa-solid fa-arrow-up"></i>
            </div>
        </div>
        <!-- FIM DAS CONFIGURAÇÕES DO BOTÃO BACK TO TOP-->

</body>

</html>