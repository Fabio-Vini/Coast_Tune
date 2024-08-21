<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    

    <script defer src="js/motor.js"></script>
    <link rel="stylesheet" href="css/eventos.css">
    <title>Eventos</title>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E2E3YRGR6R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E2E3YRGR6R');
</script>

<body>
    <header>
        <nav class="navb">

        <button
            class="btn-menu"
            aria-label="Abrir Menu"
            aria-haspopup="true"
            aria-controls="menu"
            aria-expanded="false"
          >
            <span class="hamburger"></span>
          </button>
          
         <img src="img/logotipo.svg" alt="">
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
     </header>

     <main>
          <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="search">
          <nav class="navbar" data-bs-theme="dark" style="width: 400px;">
            <form class="container-fluid">
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                <button onclick="searchData()" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="15" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </span>
                <input type="text" class="form-control" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="basic-addon1">
              </div>
            </form>
          </nav>
        </div>

        <div class="col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="img/imgshow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ver opções</a>
                </div>
              </div>
    
              <div class="card" style="width: 18rem;">
                <img src="img/imgshow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ver opções</a>
                </div>
              </div>
    
              <div class="card" style="width: 18rem;">
                <img src="img/imgshow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ver opções</a>
                </div>
              </div>
    
              <div class="card" style="width: 18rem;">
                <img src="img/imgshow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ver opções</a>
                </div>
              </div>
        </div>

        <div class="col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="img/imgshow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ver opções</a>
                </div>
              </div>
    
              <div class="card" style="width: 18rem;">
                <img src="img/imgshow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ver opções</a>
                </div>
              </div>
    
              <div class="card" style="width: 18rem;">
                <img src="img/imgshow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ver opções</a>
                </div>
              </div>
    
              <div class="card" style="width: 18rem;">
                <img src="img/imgshow.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Ver opções</a>
                </div>
              </div>
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