<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="keywords" content="firewall,proxy,squid,dansguardian, sistema gestão empresarial ERP, cadastro de clientes, emissão de nota fiscal NFe,nota fiscal eletrônica, manutenção assistência técnica computador notebook, rede de computador wireless, instalar servidor windows linux dhcp dns, backup de dados.">
    <meta name="description" content="Sistema ERP com emissão de NFe, Assistência técnica em servidor computador e notebook. Servidores windows e linux projeto, instalação e manutenção.">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>TTI Trevisan Tecnologia Informática</title>
</head>

<body>
    <!--TOPOSITE-->
    <header id="toposite">
        <?php
            include "topo.html";
        ?>
    </header>
    <!--BANNERSITE-->
    <section id="bannersite">
        <?php
            include "banner.html";
        ?>
    </section>

    <!--CORPOSITE-->
    <main id="corposite">
        <section id="principal" class="container wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.7s">
            <article class="box">
                <h1>Quem Somos</h1>
                <img src="img/desenvolvimento-software.jpeg" alt="">
                <p>A T.T.I. Trevisan Tecnologia Informática, fundada em 01/07/1986, tem se destacado no desenvolvimento
                    de software
                    ERP - gestão empresarial, manutenção de computador, notebook, impressora, no-break, visita técnica
                    na empresa ou
                    residência do cliente, comercialização de equipamentos de informática, projeto completo de
                    infraestrutura de
                    rede, servidores windows e linux, desktop, roteadores.</p>
                <p>Para atender os objetivos da T.T.I. os seus profissionais têm formação Técnica Eletrônica,
                    Especialistas
                    certificados em Linux e Microsoft e a nível de Pós Graduação na USP.</p>
                <p>Venha conhecer nossos produtos e serviços em nossa sede própria ou solicite através do telefone (011)
                    2341-9299 a presença de um consultor para melhor
                    assessorá-lo.</p>
                <address>Av. Zelina 1253, São Paulo – SP, Cep 03143-003</address>
            </article>
            <aside id="conteudoRelacionado" class="box">
                <img src="img/manutencao-informatica.jpg " alt="">
                <h1>Conteúdo Relacionado</h1>
                <p>Visite nossas redes sociais.</p>
            </aside>
        </section>
        
    </main>

    <!--FORMULARIO obs:estou criando aqui só pra ganhar tempo,
         colocar depois no lugar certo.. -->
    <section id="formulario" class="container">
        <form id="myForm" action="">
            <div class="form-group">
                <label for="">Nome:</label>
                <input type="text" name="nome" placeholder="Digite seu Nome" required>
            </div>
            <div class="form-group">
                <label for="">E-mail:</label>
                <input type="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="">Telefone:</label>
                <input type="text" name="telefone" placeholder="Digite seu telefone" required>
            </div>
            <div class="form-group">
                <label for="">Mensagem:</label>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
            </div>
            <input type="submit" value="Enviar">
        </form>
    </section>

    <!--RODAPESITE-->
    <footer id="rodapesite">
        <?php
            include "rodape.html";
        ?>
    </footer>

    <script src="js/jstti.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>

</body>
</html>