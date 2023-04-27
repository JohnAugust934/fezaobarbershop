// Adicione um ouvinte de evento de clique ao elemento com a classe "burger"
$('.burger').on('click', function () {
    // Adicione ou remova a classe "open" do elemento "burger" quando for clicado
    $(this).toggleClass('open');
    // Adiciona em seguida a classe "open" no elemento "drop-navbar"
    $('.drop-navbar').toggleClass('open');
});

// Evento para observar clique/toque fora do menu
$(document).on('click', function (event) {
    // Verifica se o clique foi fora do menu ativo (drop-navbar) e do botão burger
    if (!$(event.target).closest('.drop-navbar').length && !$(event.target).closest('.burger').length) {
        // Remove a classe "open" do elemento "burger" e do elemento "drop-navbar" caso eles estejam com a classe "open"
        $('.burger').removeClass('open');
        $('.drop-navbar').removeClass('open');
    }
});

// Botões de serviço
$(document).ready(function () {
    // Pré-selecionar o botão "Básicos"
    $('#botao-basicos').addClass('botao-selecionado');
    $('#basicos').show();

    // Adicionar ouvintes de eventos de clique aos botões
    $('.botao').on('click', function () {
        // Remover classe "botao-selecionado" de todos os botões
        $('.botao').removeClass('botao-selecionado');
        // Adicionar classe "botao-selecionado" ao botão clicado
        $(this).addClass('botao-selecionado');

        // Obter o alvo do botão clicado
        var alvo = $(this).data('alvo');

        // Ocultar todos os containers de imagens
        $('.imagem-container').hide();

        // Exibir o container de imagem correspondente ao alvo selecionado
        $('#' + alvo).show();
    });
});

// Ancoramento de elementos
$(document).ready(function () {
    // Adicionar rolagem suave ao clicar nos links de âncora
    $('a[href^="#"]').on('click', function (event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
});

// InstaFeed JS
var feed = new Instafeed({
    accessToken: 'IGQVJVeW40bUR3ZAi1VeDNNeEVNRWNEUEktR2pCMmV4NUZAlQXhuQXNPMHZAfTWJSQnhCQ012OHN2eWMyak5RRGpwNWdvMDM3Q1N0S1FPMTdKOW9CNjJmNUNOMGlkMnZAOd0hEaHhXWTBlMGZAQeUwwRzlGOAZDZD',
    limit: 5,
    template: '<div class="item"><a href="{{link}}" target="_blank"><img title="{{caption}}" src="{{image}}" /></a></div>',

    after: function () {
        //Carrosel importado dentro do InstaFeed
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                425: {
                    items: 1

                },
                768: {
                    items: 3

                },
                1100: {
                    items: 5,
                }
            }
        });
    }
});
feed.run();