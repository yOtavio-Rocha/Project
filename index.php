<?php 
  include_once("conexao.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E.E Cleufa Hubner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"> 
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- BARRA DE NAVEGAÇÃO -->
<header class="header">

  <div class="content">

    <a href="#" target="_blank" class="logo-menu"><img src="imagens/logos/logo-menu.png" alt="logo-menu"></a>
    
    <input class="mobile-btn" type="checkbox" id="mobile-btn" />
    <label class="mobile-icon" for="mobile-btn"><span class="hamburguer"></span></label>
    
    <ul class="nav">

      <li><a href="../../index.php" title="Home">Home</a></li>
      <li><a href="pages/sobre" title="Sobre">Sobre</a></li>
      <li><a href="pages/aulas" title="Aulas">Aulas</a></li>
      <li><a href="../painel-biblioteca" title="Biblioteca">Biblioteca</a></li>
      <li><a href="pages/contato" title="Contato">Contato</a></li>
    
    </ul>

  </div>

</header>
    <!-- FIM BARRA DE NAVEGAÇÃO -->
    <!-- CARROSEL -->
<?php

$conn = new mysqli('localhost', 'root', '', 'cleufa');

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recupera os dados do banco de dados
$query = "SELECT * FROM carrouses";
$result = $conn->query($query);

$images = array();
while ($row = $result->fetch_assoc()) {
    $images[] = $row;
}
?>

<div id="carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php foreach ($images as $key => $image): ?>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="<?php echo $key; ?>" <?php echo ($key === 0) ? 'class="active" aria-current="true"' : ''; ?> aria-label="Slide <?php echo $key + 1; ?>"></button>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
        <?php foreach ($images as $key => $image): ?>
            <div class="carousel-item <?php echo ($key === 0) ? 'active' : ''; ?>" data-bs-interval="10000">
                <?php
                $imagePath = './imagens/carousel/' . $image['imagen_carousel'];
                if (file_exists($imagePath)) {
                ?>
                  <img src="<?php echo $imagePath; ?>" class="d-block w-100">
                <?php
                } else {

                }
                ?>
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
          <!-- FIM CARROSEL -->

          <!-- SOBRE NOS -->

  <div class="container">
    <h1>Sobre nós</h1>
    <p class="txt1">
      A Escola Estadual Cleufa Hübner, inicialmente funcionou como extensão da escola estadual Nilza de Oliveira Pipino, atendendo alunos das turmas finais do Ensino Fundamental, e por determinação da Secretaria Estadual de Educação –SEDUC/MT, a nova escola foi criada para atender tal demanda ,numa organização de Escola Organizada em Ciclos de Formação Humana. Recebeu o nome de uma professora pedagoga...
    </p>
    <a href="#" class="btn-sobre">Saiba Mais<i class="fa-solid fa-chevron-right"></i></a>
    <img class="img-sobre" src="imagens/home/home_sobre.jpg">
  </div>

        <!-- FIM SOBRE NOS -->
  
        <!-- LIÇÕES -->
    <img class="img-licao" src="imagens/home/licao.png">

<div class="container1">
    <div class="subject" id="ed-fisica">
        <img src="imagens/home/ed-fisica.png" alt="Educação Física">
        <h3>Ed. Física</h3>
    </div>
    <div class="subject1" id="artes">
        <img src="imagens/home/artes.png" alt="Artes">
        <h3>Artes</h3>
    </div>
    <div class="subject" id="artes">
        <img src="imagens/home/geografia.png" alt="Artes">
        <h3>Geografia</h3>
    </div>
        <div class="subject1" id="artes">
        <img src="imagens/home/historia.png" alt="Artes">
        <h3>História</h3>
    </div>
    <div class="subject" id="artes">
        <img src="imagens/home/portugues.png" alt="Artes">
        <h3>Português</h3>
    </div>
    <div class="subject1" id="artes">
        <img src="imagens/home/matematica.png" alt="Artes">
        <h3>Matemática</h3>
    </div>
    <div class="subject" id="artes">
        <img src="imagens/home/ciencias.png" alt="Artes">
        <h3>Ciências</h3>
    </div>
    <div class="subject1" id="artes">
        <img src="imagens/home/ingles.png" alt="Artes">
        <h3>Inglês</h3>
    </div>
</div>
    
    <p class="txt-p">Todos os Professores são extremamente capacitados para cada aula!.</p>
<div class="btn-prof">
    <a href="#">Nossos Professores<i class="fa-solid fa-chevron-right"></i></a>
</div>
</div>
        <!-- FIM LIÇÕES -->

        <!-- FOOTER -->
        <main>
            
        </main>
        <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <img src="imagens/logos/logo-menu.png">
                <p>A melhor apredizagem para seu filho.</p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Links Rápido</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Home</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Sobre</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Aulas</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Biblioteca</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Contato</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Products</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">App</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Desktop</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Cloud</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Subscribe</h3>

                <p>
                    Enter your e-mail to get notified about
                    our news solutions
                </p>

                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            &#169
            2023 all rights reserved
        </div>
    </footer>
        <!-- FIM FOOTER -->
    <script src="https://kit.fontawesome.com/9389bfec13.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>