<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Fernando Junior</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <header class="main_header">
            <div class="container main_header_content">
                <div class="main_header_content_headline">
                    <p>Download Gratuito</p>
                    <h1>Guia prático: Como criar repositórios e iniciar o versionamento de seus projetos com GIT</h1>
                    <p>Um passo a passo de como usar o GIT criar repositórios e começar a versionar os seus projetos.</p>
                </div>
                <div class="main_header_content_cta">
                    <img src="images/book_cover.png" alt="Guia prático: Como criar repositórios e iniciar o versionamento de seus projetos com GIT" title="Guia prático: Como criar repositórios e iniciar o versionamento de seus projetos com GIT"/>
                    <span class="button_cta transition radius main_header_content_cta_btn">QUERO BAIXAR O E-BOOK!</span>
                </div>
            </div>
        </header>

        <main>
            <section class="bullet_points">
                <header class="bullet_points_header">
                    <h1>O que vou aprender nesse e-book?</h1>
                </header>
                <div class="container bullet_points_content">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <article class="bullet_points_content_item">
                            <div class="img">
                                <img src="images/bullet.png" alt="O que vou aprender nesse e-book?" title="O que vou aprender nesse e-book?"/>
                            </div>
                            <div class="bullet">
                                <h2>O passo a passo para começar a utilizar o GIT e versionar os seu projetos!!</h2>
                            </div>
                        </article>
                    <?php } ?>
                </div>
            </section>

            <div class="main_cta">
                <span class="button_cta radius transition">QUERO BAIXAR O E-BOOK!</span>
            </div>

            <article class="author">
                <div class="container">
                    <div class="author_content">
                        <div class="author_content_img">
                            <img class="rounded" src="images/author.jpg" alt="Fernando Junior - CEO/Founder MyApk e Analista de Sistemas." title="Fernando Junior - CEO/Founder MyApk e Analista de Sistemas."/>
                        </div>
                        <header class="author_content_header">
                            <h1><b>Fernando Junior</b> - CEO da MyApk e Analista de Sistemas.</h1>
                            <p>Criei esse e-book para falar um pouco sobre os comandos básicos do git e ajudar aqueles que estão iniciando o versionamento de seu projetos :) .</p>
                            <p><b>Faça download e comece agora... #VamosJuntos!</b></p>
                        </header>
                    </div>
                </div>
            </article>

            <article class="optin">
                <div class="container">
                    <div class="optin_content">
                        <header class="optin_content_header">
                            <h1>Faça download GRATUITO agora e comece a versionar os seus projetos!</h1>
                        </header>
                        <form action="" method="post" class="optin_content_form">
                            <input class="radius" type="text" name="fullname" placeholder="Nome:"/>
                            <input class="radius" type="email" name="email" placeholder="E-mail:"/>
                            <input class="radius" type="tel" name="phone" placeholder="Telefone: (Whats)"/>
                            <button class="radius transition">RECEBER E-BOOK AGORA!</button>
                            <p>Informe seu melhor e-mail pois vou enviar seu e-book para lá!</p>
                        </form>
                    </div>
                </div>
            </article>
        </main>

        <footer class="main_footer">
            <div>&COPY; Fernando Junior, todos os direitos reservados!</div>
            <div>
                <a href="#" title="">Saiba mais</a> |
                <a href="#" title="">Termos de uso</a>
            </div>
        </footer>
    </body>
</html>
