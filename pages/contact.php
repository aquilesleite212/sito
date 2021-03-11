<section class="page-title-area bg-cover1">
    <div class="page-title-wrapper section-spacing">
        <div class="page-title text-center white-text">
            <h1 class="heading-1">Contatos </h1>
        </div>
    </div>
</section>
<!-- End Page Title Area -->
<!-- Start Feature  Area -->
<div class="feature-area bg-color1">
    <div class="feature-wrapper section-spacing pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <article class="feature-box bg-color3">
                        <header class="feature-logo wow bounceIn" data-wow-duration="1s">
                            <div class="feature-icon"> <i class="fa fa-address-card-o "></i></div>
                        </header>
                        <footer class="feature-content">
                            <h5 class="heading-5"><a href="#">Localização </a></h5>
                            <p> Ed. Infinity Corporate Center<br/> Tv. Barão do Triunfo, 3540<br/>Marco, Belém/PA - Sala 1212</p>
                        </footer>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="feature-box bg-color3">
                        <header class="feature-logo wow bounceIn" data-wow-duration="1s">
                            <div class="feature-icon"> <i class="fa fa-envelope"></i></div>
                        </header>
                        <footer class="feature-content">
                            <h5 class="heading-5"><a href="#">E-mail </a></h5>
                            <p> contato@ktecsistemas.com.br<br/>suporte@ktecsistemas.com.br<br/>financeiro@ktecsistemas.com.br</p>
                        </footer>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="feature-box bg-color3">
                        <header class="feature-logo wow bounceIn" data-wow-duration="1s">
                            <div class="feature-icon"> <i class="fa fa-phone "></i></div>
                        </header>
                        <footer class="feature-content">
                            <h5 class="heading-5"><a href="#">Telefones</a></h5>
                            <p>(91) 3083-4743<br/></p>
                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Feature Area -->
<!-- Start Form  Area -->
<section class="form-area bg-color1">
    <div class="form-wrapper section-spacing bminus-30 tminus-30">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="sub-title heading-3">Formulário</h3>
                    <?php
                    
                        $metodoPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                        if(isset($metodoPost['enviar'])){
                            echo $_SESSION['form_capt_ktec'].'<br>';
                            echo trim(strip_tags($metodoPost['captch']));
                            if($_SESSION['form_capt_ktec'] == trim(strip_tags($metodoPost['captch']))){
                                $para       = "contato@ktecsistemas.com.br";
                                $tipo       = "E-mail enviado através do site www.ktecsistemas.com.br";
                                $nome       = trim(strip_tags(addslashes($metodoPost['nome'])));
                                $email      = trim(strip_tags(addslashes($metodoPost['email'])));
                                $mensagem   = trim(strip_tags(addslashes($metodoPost['mensagem'])));

                                $corpo = "<strong> Imformações para Contato</strong><br><br>";

                                $corpo.= "<strong> Nome: </strong> $nome";
                                $corpo.= "<br><strong> E-mail: </strong> $email";
                                $corpo.= "<br><strong> Mensagem: </strong> $mensagem";

                                $header="Content-Type: text/html; charset = utf-8\n";
                                $header.="From: $email\n";

                                if(mail($para, $tipo, $corpo, $header)){
                                    echo '<div class="alert alert-success">E-mail enviado com sucesso!</div>';
                                    header('Refresh: 1, ?p=contato');
                                }else{
                                    echo '<div class="alert alert-danger">Erro ao enviar e-mail!</div>';
                                }
                            }else{
                                echo '<div class="alert alert-danger">O código digitado é inválido!</div>';
                                header('Refresh: 1, ?p=contato');
                            }

                            
                        }
                    ?>
                    <form class="form-action" method="post">
                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea  rows="6" class="form-control" name="mensagem" placeholder="Mensagem" required></textarea>
                            </div>
                        </div>
                    </div><div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <img src="captcha/captcha.php" alt="Código Captcha" width="200px"><br>
                                <input type="text" class="form-control" name="captch" id="captch" placeholder="Digite o código" maxlength="8" required="required"><br>
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-0">
                        <input type="submit" class="btn-style2 btn btn-primary" name="enviar" value="Enviar">
                    </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5645473638338!2d-48.45954868524592!3d-1.4364214989524045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a48c7296670545%3A0xdb7e0a268c356342!2sInfinity+Corporate+Center!5e0!3m2!1spt-BR!2sbr!4v1548697054623" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14473.181110553844!2d89.939336!3d24.922008950000002!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1544610871772" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>