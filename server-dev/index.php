<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>TAG</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="style/boot.css" rel="stylesheet"/>
        <link rel="stylesheet" href="style/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet"/>
    </head>
    <body>
        <header class="container bg-fix">
            <div class="content-menu">
                <h1 class="fontzero  al-left"><img src="img/logo.png" class=" radius main_logo"></h1>
                <ul class="main_nav al-right special ">
                    <li><a href="#" >Livros</a></li>
                    <li><a href="#" target="_blank">Escritores</a></li>
                    <li><a href="#" target="_blank">Poemas</a></li>
                    <li><a href="#" target="_blank">Resumos</a></li>
                    
                </ul>
                <button class="btn btn-blue radius button"><a>Assinar</a></button>
                <div class="clear"></div>
            </div>
        </header>
        <section class="container section_first">
            <div class="content">
                <article class="box box-medium-right ">
                <h1 class=" al-right bold">Uma nova experiência para quem é apaixonado por livros</h1>
                <p class="tagline al-right">Somos um clube de assinatura de livros que envia mensalmente um kit literário à casa dos associados.</p>
                <button class="btn btn-blue radius">Faça Parte</button>
                
                </article>
                <div class="clear"></div>
            </div>
        </section>

        <section class="container bg-white">
            <div class="content">
                <h1 class="section-title second">Como Funciona?</h1>
                <article class="main_tec_item box box-medium radius">
                    <img title="Livros Surpresa" alt="[Livros Surpresa]" src="img/teste.png"/>
                    <h1 class="">Livros Surpresa</h1>
                    <p class="tagline">Todos os meses, enviamos um livro surpresa para a casa dos nossos associados.</p>
                </article>
                <article class="main_tec_item box box-medium radius">
                    <img title="Mensalidade" alt="[Mensalidade]" src="img/list-2.png"/>
                    <h1 class="">Mensalidade</h1>
                    <p class="tagline">Pagamento Mensal Automático de R$ 69,90 com frete já incluído para TODO BRASIL!</p>
                </article>
                <article class="main_tec_item box box-medium last radius">
                    <img title="" alt="" src="img/list-3.png"/>
                    <h1>Novos Universos</h1>
                    <p class="tagline">Descubra livros que naturalmente você não leria e explore novos universos literários.</p>
                </article>
                <footer class="box box-full box_footer">
                   <h1 class="al-center">Dúvidas?</h1>
                    <p><a href="#" target="_blank">Entenda Melhor</a></p>
                </footer>
                <div class="clear"></div>
            </div>
        </section>

         <section class="container section_kit">
            <div class="content">
                <article class="box box-medium-center">
                <h1 class="al-center ">Quem Escolhe os Livros?</h1>
                <p class="tagline al-center">"Que livro você recomendaria aos associados da TAG?". Frente às milhares de opções com que se depara quando olha para sua biblioteca pessoal, cada curador deve escolher um livro para sugerir aos associados. É como se todo mês fosse nosso aniversário e os amigos a nos presentear fossem esses aqui abaixo.</p>
                <button class="btn btn-blue radius bottom">Recomende</button>
                </article>
                <div class="clear"></div>
            </div>
        </section>
        <section class="container section_vant">
            <div class="content">
                <article class="box box-medium-left al-left">
                <h1 class="">Edições Exclusivas</h1>
                <p class="tagline">As edições dos livros enviados aos associados são exclusivas, e portanto indisponíveis para compra em livrarias. Projetos editorial e estético primorosos, que buscam levar aos associados as mais belas edições do mercado.</p>
                <button class="btn btn-white radius">Ver Edições</button>
                </article>
                <div class="clear"></div>
            </div>
        </section>


        <footer class="container bg-blue-footer">
            <article class="content main_footer content box-full">
                <h1 class="title">Redes Sociais</h1>
                <ul class="">
                    <p></p>
                    <li><a href="#" class="a">Facebook</a></li>
                    <li><a href="#" class="a">Google+</a></li>
                    <li><a href="#" class="a">Instagram</a></li>
                    <li><a href="#" class="a">Twitter</a></li>
                </ul>
                <p class="a">&copy<?= date('Y')?>-TAG, Todos os Direitos Reservados</p>
            </article>
            <div class="clear"></div>
        </footer>
        
        <script type="text/javascript" src="script/jquery-3.2.1.js" ></script>
    </body>
</html>
