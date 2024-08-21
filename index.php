<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    <script defer src="js/motor.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Página Inicial</title>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E2E3YRGR6R"></script>

<body>
    <header>
       <nav class="navb">
        <img src="img/logotipo.svg"  alt="">

        <button
            class="btn-menu"
            aria-label="Abrir Menu"
            aria-haspopup="true"
            aria-controls="menu"
            aria-expanded="false"
          >
            <span class="hamburger"></span>
          </button>

            <ul class="cabecalho menu" id="menu" role="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <!-- <li><a href="professor.php">Professor</a></li> -->
            </ul>

            <div class="redes-sociais">
                <ul>
                    <li>
                        <a href="">
                            <img src="icones/twitter.svg" alt="">
                        </a>
                    </li>
        
                    <li>
                        <a href="">
                            <img src="icones/facebook.svg" alt="">
                        </a>
                    </li>
        
                    <li>
                        <a href="">
                            <img src="icones/instagram.svg" alt="">
                        </a>
                    </li>
        
                    <li>
                        <a href="">
                            <img src="icones/tiktok.svg" alt="">
                        </a>
                    </li>
                </ul>
               </div>   
       </nav>

       <div class="header-content">
        <h1>Coast Tune</h1>
        <p>Seja bem-vindo ao palco dos seus sonhos! Descubra emoções surreais em cada espetáculo. Organize um momento inesquecível conosco!</p>

        <button><a href="#">Entrar</a></button>
        <button><a href="#">Cadastrar</a></button>
       </div>

    </header>

    <main>
        <div class="prox-event">
            <h2>Eventos Próximos</h2>

            <ul>
                <li>Shows</li>
                <li>Mês 00/0000</li>
                <li>Local do evento</li>
                <li></li>
                <li><button><a href="#">Lembrete</a></button></li>
                <li><button><a href="#">Comprar</a></button></li>
            </ul>

            <ul>
                <li>Shows</li>
                <li>Mês 00/0000</li>
                <li>Local do evento</li>
                <li></li>
                <li><button><a href="#">Lembrete</a></button></li>
                <li><button><a href="#">Comprar</a></button></li>
            </ul>

            <ul>
                <li>Shows</li>
                <li>Mês 00/0000</li>
                <li>Local do evento</li>
                <li></li>
                <li><button><a href="#">Lembrete</a></button></li>
                <li><button><a href="#">Comprar</a></button></li>
            </ul>
        </div>
    </main>

    <footer>
        <div class="container-footer">
            <div class="row-footer">
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="#"> Quem somos </a></li>
                        <li><a href=""> nossos serviços </a></li>
                        <li><a href=""> política de privacidade </a></li>
                        <li><a href=""> programa de afiliados</a></li>
                    </ul>
                </div>
                <!--end footer col-->
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Obter ajuda</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Transporte</a></li>
                        <li><a href="#">devoluções</a></li>
                        <li><a href="#">Status De Pedido</a></li>
                        <li><a href="#">Opções De Pagamento</a></li>
                    </ul>
                </div>
                <!--end footer col-->
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Loja online</h4>
                    <ul>
                        <li><a href="#">Endereço</a></li>
                    </ul>
                </div>
                <!--end footer col-->
                <!-- footer col-->
                <div class="footer-col">
                    <h4>Inscreva-se!</h4>
                    <div class="form-sub">
                        <form>
                            <input type="email" placeholder="Digite o seu e-mail" required>
                            <button>Inscrever</button>
                        </form>
                    </div>

                    <div class="medias-socias">
                        <a href="">
                            <img src="icones/twitter.svg" alt="">
                        </a>
                        <a href="">
                            <img src="icones/facebook.svg" alt="">
                        </a>
                        <a href="">
                            <img src="icones/instagram.svg" alt="">
                        </a>
                        <a href="">
                            <img src="icones/tiktok.svg" alt="">
                        </a>
                    </div>

                </div>
                <!--end footer col-->
            </div>
        </div>
    </footer>



</body>
</html>