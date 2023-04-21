<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!------------------------HEAD DO SITE------------------------>
    <?php require 'conteudo/head.php' ?>
</head>

<body>
    <!------------------------TOPO MENU------------------------>

    <?php require 'conteudo/topo.php'; ?>

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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum consequat ligula,
                            commodo bibendum urna consectetur a. Aenean condimentum non nunc eget aliquam. Nam
                            ullamcorper
                            blandit luctus. Integer tincidunt luctus nisi, pulvinar ullamcorper quam blandit eu. Aliquam
                            erat volutpat. Curabitur tempus leo eu nisi congue aliquam. Nunc dolor nunc, molestie sit
                            amet
                            blandit ut, accumsan vitae purus. Curabitur scelerisque est nec aliquet mattis. Nunc
                            tincidunt
                            augue vel tortor ultricies, ut mattis neque ultricies. Aenean vel dignissim nibh. Integer
                            dignissim elit in justo tincidunt bibendum. Mauris facilisis metus luctus egestas feugiat.
                            Donec
                            id volutpat augue. In tempor libero leo. Interdum et.</p>
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
                <h2 class="serv-title">Serviços</h2>
                <div class="botao">
                    <button>
                        <a class="all">Todos</a> -
                        <a class="basicos">Básicos</a> -
                        <a class="estetica">Estética</a> -
                        <a class="quimicas">Químicas</a> -
                        <a class="exclusivos">Exclusivos</a>
                    </button>
                </div>
                <div class="todosServicos" id="basicos">
                    <!------------------------CORTES BÁSICOS------------------------>
                    <div class="basicos" id="">
                        <h2>Básicos</h2>
                        <div class="line">
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Corte Fezão Barbershop">
                                <h3>R$ Corte,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Barba Fezão Barbershop">
                                <h3>R$ Barba,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Corte e Barba Fezão Barbershop">
                                <h3>R$ Corte+Barba,00</h3>
                            </div>
                        </div>
                        <!--MEIO-->
                        <div class="line">
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Sobrancelha Fezão Barbershop">
                                <h3>R$ Sobrancelha,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Pezinho Fezão Barbershop">
                                <h3>R$ Pezinho,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Raspagem Fezão Barbershop">
                                <h3>R$ Raspagem,00</h3>
                            </div>
                        </div>
                    </div>
                    <!------------------------ESTÉTICOS------------------------>
                    <div class="estetica" id="">
                        <h2>Estética</h2>
                        <div class="line">
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Limpeza Facial Fezão Barbershop">
                                <h3>R$ Limpeza Facial,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Cone Chinês Fezão Barbershop">
                                <h3>R$ Cone Chinês,00</h3>
                            </div>
                        </div>
                    </div>
                    <!------------------------QUÍMICAS------------------------>
                    <div class="quimicas" id="">
                        <h2>Químicas</h2>
                        <div class="line">
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Platinado Fezão Barbershop">
                                <h3>R$ Platinado,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Luzes Fezão Barbershop">
                                <h3>R$ Luzes,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Progressiva Fezão Barbershop">
                                <h3>R$ Progressiva,00</h3>
                            </div>
                        </div>
                        <!--MEIO-->
                        <div class="line">
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Alisamento Fezão Barbershop">
                                <h3>R$ Alisamento,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Tintura Fezão Barbershop">
                                <h3>R$ Tintura,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Reflexo Fezão Barbershop">
                                <h3>R$ Reflexo,00</h3>
                            </div>
                        </div>
                    </div>
                    <!------------------------EXCLUSIVOS------------------------>
                    <div class="exclusivos" id="">
                        <h2>Exclusivos do Fezão</h2>
                        <div class="line">
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Corte com Pigmentação Fezão Barbershop">
                                <h3>R$ Corte Pigmentação,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Barba com Pigmentação Fezão Barbershop">
                                <h3>R$ Barba Pigmentação,00</h3>
                            </div>
                            <div>
                                <img src="media/img/FICTICIAS/servicos_base.png" alt="Corte Freestyle Fezão Barbershop">
                                <h3>R$ Corte Freestyle,00</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------GALERIA------------------------>
        <section class="galeria">
            <div class="site">
                <h2>Galeria</h2>
            </div>



        </section>
        <!------------------------LOCALIZAÇÃO------------------------>
        <section class="location" id="contato">
            <div class="site">
                <h2>Onde estamos</h2>
                <div class="box-location">
                    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.0517270033483!2d-48.16312907016043!3d-21.778258957969506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8f73c78d07bef%3A0x3a5dc04063c9d2c5!2sFez%C3%A3o%20Barber%20Shop!5e0!3m2!1spt-BR!2sbr!4v1680531868405!5m2!1spt-BR!2sbr" width="600" height="338" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="redes-loc">
                        <p>
                            Horários de funcionamento: <br>
                            Seg a Sex: 9h às 20h <br>
                            Sábado: 8h às 17h
                        </p>
                        <!--INSTAGRAM-->
                        <div class="insta-loc">
                            <a href="https://www.instagram.com/fezaobarbershop/" target="_blank">
                                <img src="media/social/instagram.svg" alt="Instagram Fezão Barbershop">
                            </a>
                            <a href="https://www.instagram.com/fezaobarbershop/" target="_blank">@fezaobarbershop</a>
                        </div>
                        <!--FACEBOOK-->
                        <div class="face-loc">
                            <a href="https://www.facebook.com/fezaobarbershop/?locale=pt_BR" target="_blank">
                                <img src="media/social/facebook.svg" alt="Facebook Fezão Barbershop">
                            </a>
                            <a href="https://www.facebook.com/fezaobarbershop/?locale=pt_BR" target="_blank">@fezaobarbershop</a>
                        </div>
                        <p>Av. dos Ferroviários, 565 - Vila Xavier</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!------------------------RODAPÉ------------------------>
    <footer>
        <!------------------------DIREITOS DO SITE------------------------>
        <h2 class="direitos">Direitos reservados a Fezão Barbershop - 2023</h2>
        <h2 class="desenvolvedor">Desenvolvido por <a href="https://johnaugust934.com.br" target="_blank"> João
                Augusto</a></h2>
    </footer>
    <!------------------------WHATSAPP------------------------>
    <div class="whats-botao">
        <!--topo <a href="index.html">TOPO</a>-->
        <a href="https://wa.me/5516996166040?text=Quero%20fazer%20um%20agendamento." target="_blank">WhatsApp</a>
    </div>

    <!------------------------SCRIPT JQUERY------------------------>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <!------------------------SCRIPTS------------------------>
    <script src="js/anchor.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>