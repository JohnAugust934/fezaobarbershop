<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!------------------------HEAD DO SITE------------------------>
    <?php require_once 'conteudo/head.php' ?>
</head>

<body>
    <!------------------------TOPO MENU------------------------>

    <?php require_once 'conteudo/topoIndex.php' ?>

    <!------------------------CORPO DO SITE------------------------>
    <main>
        <!------------------------BANNER FULL------------------------>
        <section>
            <div class="banner">
                <div class="site">
                    <h2>Cabelo - Barba - Estética</h2>
                    <a href="#">Agende seu horário</a>
                </div>
            </div>
        </section>
        <!------------------------CURSOS------------------------>
        <section>
            <!--A FAZER-->
        </section>
        <!------------------------SOBRE------------------------>
        <section class="sobre">
            <div class="site">
                <h2>Sobre a barbearia</h2>
                <div class="box-sobre">
                    <img class="sobre-mobileImg" src="media/img/FICTICIAS/sobre.png" alt="Sobre Fezão Barbershop">
                    <div class="text-sobre">
                        <p>A Fezão Barbershop é uma barbearia que está no mercado desde 2016, fundada por Felipe Fernandes, conhecido como Fezão, cuja paixão pelo ofício de barbeiro vem de sua família. Com uma atmosfera descontraída e amigável, a barbearia oferece uma ampla gama de serviços de alta qualidade, incluindo cortes de cabelo modernos, barbas estilizadas e tratamentos de pele. Comprometida com a qualidade e a higiene, a Fezão Barbershop utiliza apenas produtos de alta qualidade e segue rigorosos protocolos de limpeza. Com uma clientela fiel e satisfeita, a barbearia continua a se destacar como uma das melhores da região, graças à paixão e dedicação de Fezão em oferecer serviços de excelência no mercado de cuidados masculinos.</p>
                        <a href="sobre.php">Saiba mais...</a>
                    </div>
                    <img class="sobre-deskImg" src="media/img/FICTICIAS/sobre.png" alt="Sobre Fezão Barbershop">
                </div>
            </div>
        </section>
        <!------------------------EQUIPE------------------------>
        <section class="equipe">
            <div class="site">
                <h2>Equipe</h2>
                <div class="box-equipe">
                    <div class="equipes">
                        <img src="media/img/FICTICIAS/equipe2.png" alt="Equipe Fezão Barbershop">
                        <h3>Felipe</h3>
                        <small>Líder</small>
                    </div>
                    <div class="equipes">
                        <img src="media/img/FICTICIAS/equipe1.png" alt="Equipe Fezão Barbershop">
                        <h3>Alexandre</h3>
                        <small>Barbeiro</small>
                    </div>
                    <!-- LIVRE PARA MAIS UM NA EQUIPE
                    <div class="equipes">
                        <img src="/media/img/FICTICIAS/equipe3.png" alt="Equipe Fezão Barbershop">
                        <h3>Tay</h3>
                        <small>Especialidade</small>
                    </div>
                    -->
                </div>
            </div>
        </section>
        <!------------------------SERVIÇOS------------------------>
        <section class="servicos" id="servicos">
            <div class="site">
                <h2>Serviços</h2>

                <div class="btnServicos">
                    <button id="botao-basicos" class="botao" data-alvo="basicos">Básicos</button>
                    <button id="botao-estetica" class="botao" data-alvo="estetica">Estética</button>
                    <button id="botao-quimicas" class="botao" data-alvo="quimicas">Químicas</button>
                    <button id="botao-exclusivos" class="botao" data-alvo="exclusivos">Exclusivos</button>
                </div>

                <?php require_once 'conteudo/servicos.php' ?>

            </div>
        </section>
        <!------------------------GALERIA------------------------>
        <section class="galeria">
            <h2>Galeria</h2>
            <!------------------------INSTAGRAM FEED------------------------>
            <div class="site owl-carousel owl-theme owl-loaded owl-drag" id="instafeed"></div>
        </section>
        <!------------------------LOCALIZAÇÃO------------------------>

        <?php require_once 'conteudo/localizacao.php' ?>

    </main>
    <!------------------------RODAPÉ------------------------>

    <?php require_once 'conteudo/rodape.php' ?>

    <!------------------------WHATSAPP------------------------>

    <?php require_once 'conteudo/whatsapp.php' ?>

    <!------------------------SCRIPT------------------------>

    <?php require_once 'conteudo/scripts.php' ?>

</body>

</html>