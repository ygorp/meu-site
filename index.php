<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevWeb Criativo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/topo.css">
    <link rel="stylesheet" href="/css/sobre-servicos.css">
    <link rel="stylesheet" href="/css/faq-contato.css">
    <link rel="stylesheet" href="/css/efeitos.css">
    <link rel="stylesheet" href="/css/footer.css">

</head>
<body>
    <header>
        <nav id="nav">
            <a href="#"><img src="/img/logo.png" alt="logo DevWeb Criativo"></a>
            <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <span id="hamburguer"></span>
            </button>
            <ul class="menu" role="menu">
                <li><a href="#sobre">Sobre Nós</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#faq">Faq</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
    </header>

    <main>
        <section class="banner">
            <h2>Construindo Experiências Digitais Incríveis<span>.</span></h2>
            <a class="btn_banner" id="btn_contato" href="https://api.whatsapp.com/send?phone=5527992037927" target="_blank">Entre em contato</a>
        </section>

        <section class="sobre" id="sobre">
            <div class="texto-sobre">
                <h2>Conheça a <span>DevWeb Criativo</span></h2>
                <p>Bem-vindo à nossa Agência, onde a criatividade encontra a inovação para dar vida à sua presença online. 
                   Somos apaixonados por transformar ideias em experiências visuais envolventes, 
                   proporcionando aos nossos clientes uma presença digital única e impactante.<br>
                   Na nossa Agência de Web Design, não acreditamos em soluções únicas para todos. 
                   Cada projeto é uma oportunidade para inovar e personalizar, criando uma identidade 
                   digital que se destaque na vastidão da internet. Se você procura uma parceria dedicada, 
                   criativa e orientada para resultados, você está no lugar certo. Deixe-nos contar a história 
                   da sua marca através do design web extraordinário. Juntos, vamos criar uma presença online que deixará uma impressão duradoura.
                </p>
            </div>
            <div class="img">
                <img src="/img/sobre.jpg" alt="imagem mostra home com notebook e alguns efeitos de tecnologia">
            </div>
        </section>

        <section class="servicos" id="servicos">
            <div class="texto-servicos">
                <h2>Nossas especialidades</h2>
            </div>

            <div class="cards-servicos">
                <div>
                    <h3>Site institucional</h3>
                    <p>Descreve produtos e serviços da empresa para conduzir os visitantes ao contato</p>
                </div>
                <div>
                    <h3>One Page</h3>
                    <p>Em vez de navegar por diversas páginas, concentramos toda a essência em uma única página.</p>
                </div>
                <div>
                    <h3>Landing Page</h3>
                    <p>Landing Pages são páginas específicas que conduzem visitantes à conversão</p>
                </div>
                <div>
                    <h3>Automação</h3>
                    <p>Este tipo de sistema é focado em realizar processos de forma automática, facilitando a realização de tarefas</p>
                </div>
            </div>
        </section>

        <section>
            
        </section>

        <section class="faq" id="faq">
            <div class="texto-faq">
                <h2>FAQ</h2>
            </div>
            
            <div class="secao-faq">
                <details>
                    <summary>Qual a importância de um site para minha empresa?</summary>
                    <p>O objetivo principal de um web site é tornar-se uma filial de sua empresa, com capacidade de conseguir clientes e realizar serviços mesmo enquanto você está dormindo e sua empresa está fechada. Além de você divulgar seus produtos e serviços, poderá trabalhar o marketing da empresa com um melhor custo-benefício.</p>
                </details>
                <details>
                    <summary>Quais os gastos eu tenho para manter um site?</summary>
                    <p>Dentro os gastos que envolve a manutenção de um site podemos citar: O valor pago anualmente referente ao domínio do site + O valor mensal correspondente a hospedagem do site</p>
                </details>
                <details>
                    <summary>Qual a diferença entre um site: Institucional, Landing Page e Portal?</summary>
                    <p>Site Institucional: É um site que descreve os produtos e tem como finalidade conduzir os consumidores para a compra tradicional. Além de conter informações sobre a empresa, como história, localização, e um formulário de contato</p>
                    <p>Landing Page: Landing Pages são páginas específicas que conduzem visitantes à conversão</p>
                    <p>Portal: São as páginas na internet que servem como ponto de acesso direto a um conjunto de serviços e informações. Possui principalmente sistemas específicos para gerenciamentos de grandes volumes de informações, como por exemplo, uma imobiliária poderá gerenciar on-line todos os imóveis disponíveis e suas fotos para compra e aluguel e principalmente possibilitar que visitantes pesquisem facilmente imóveis diversos em seu site.</p>
                </details>
                <details>
                    <summary>Quanto custa para desenvolver um site?</summary>
                    <p>O valor cobrado para o desenvolvimento do site pode variar dependendo dos recursos e funcionalidade que este possuir. Uma ferramenta que utilizada de forma inteligente, corresponde positivamente ao tempo e dinheiro investidos.</p>
                </details>
                <details>
                    <summary>O que é hospedagem de site?</summary>
                    <p>Hospedagem de site é o serviço de armazenamento de um site e disponibilização constante do mesmo na internet, ou seja, o serviço de hospedagem possibilitará que seu site seja visualizado 24h por dia em todo o mundo. Quando você faz um site e quer que outras pessoas possam vê-lo, você terá que publicar (ou upload) do seu site, através de um serviço de hospedagem de sites. Os planos de hospedagem permitirão ainda que você utilize e-mails personalizados com seu nome e domínio (Ex: seu_nome@seu-dominio.com.br). Outros serviços podem ainda estar associados com seu plano de hospedagem, como: banco de dados, estatísticas de acesso, entre diversos outros.</p>
                </details>
                <details>
                    <summary>O que é E-mail Profissional?</summary>
                    <p>E-mail profissional é aquele usado pelas empresas com endereço próprio ex: contato@suaempresa.com.br diferentes dos e-mails gratuitos que são disponibilizados por provedores ou empresas como, por exemplo, nome@hotmail.com nome@gmail.com O e-mail revolucionou a forma com que as pessoas e as empresas se comunicavam, nos dias de hoje passamos grande parte do tempo verificando a chegada ou enviado e-mails, é prático rápido e de baixo custo.</p>
                </details>
                <details>
                    <summary>O que é Registro de Domínio?</summary>
                    <p>È a identidade do seu site</p>
                </details>
                <details>
                    <summary>Qual domínio eu devo escolher?</summary>
                    <p>É importante a escolha de um domínio. Porém este deve ser único, você poderá escolhe-lo, desde que não exista outro com nome igual. Este nome deve ser ligado a sua marca ou seu produto, para que seja de fácil lembrança para o seu cliente.</p>
                </details>
            </div>
        </section>

        <section class="contato" id="contato">
            <div class="texto-contato">
                <h2>Contato</h2>
            </div>
            <div class="flex-contato">
                <div class="inform-contato">
                    <h3>Ygor Pacheco Nogueira</h3>
                    <a href="https://api.whatsapp.com/send?phone=5527992037927" target="_blank"><i class="fa-solid fa-phone"></i>(27) 9 9203-7927</a>
                    <a href="ygor-nogueira@hotmail.com" target="_blank"><i class="fa-solid fa-envelope"></i>contato@devwebcriativo.com.br</a>

                    <div class="social">
                        <a href="https://www.linkedin.com/in/ygor-pacheco-nogueira-15082020b/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/ygorpnogueira/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://github.com/ygorp" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
                </div>
    
                <div class="form-contato">
                    <form method="POST" action="envio_form_email.php">
                        <div class="col-12">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="md-3">
                            <label for="tel" class="form-label">Telefone</label>
                            <input type="text" class="form-control" name="tel" id="tel">
                        </div>
                        <div class="md-4">
                            <label for="inputState" class="form-label">Tipo de contato</label>
                            <select id="inputState" name="tipoContato" class="form-select">
                              <option selected>Nenhuma...</option>
                              <option>Site institucional</option>
                              <option>Landing Page</option>
                              <option>Blog</option>
                              <option>Portal</option>
                            </select>
                        </div>
                        <div class="md-4">
                            <label for="inputState" class="form-label">Como prefere ser respondido(a)</label>
                            <select id="inputState" name="contato" class="form-select">
                              <option selected>Nenhuma...</option>
                              <option>Whatsapp</option>
                              <option>Email</option>
                              <option>Ligação</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Observação</span>
                            <textarea class="form-control" name="obs" aria-label="With textarea"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </form>
                </div>
            </div>
        </section>
    </main>

    <div id="btnTop">
        <i class="arrow up"></i>
    </div>

    <footer class="footer">
        <div class="content-footer">
            <p>Desenvolvido por DevWeb Criativo - Todos os direitos reservados</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>
</body>
</html>