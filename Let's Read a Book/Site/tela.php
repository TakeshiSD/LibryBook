<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
   <title>Let's Read a Book</title>
   <link rel="stylesheet" href="tela copy.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .welcome-text {
         font-size: 24px;
         color: #ffd817;
         margin-bottom: 20px;
         text-align: right;
         margin-right: 3vw;
      }
      .logout-link {
         padding: 10px 20px;
         background-color: #ffd900;
         color: #2b134b;
         border: none;
         cursor: pointer;
         border-radius: 10px;
         font-weight: 800;
         letter-spacing: 3px;
         transition: background-color 0.3s ease;
         margin-right: 17vw;
      }
        .logout-link:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
   <div class="cavalo">
    <div class="welcome-text">
        Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.
    </div>
        <p>
        <a class="logout-link" href="logout.php">Sair</a>
        </p>
    </div>
    
   <nav class="menu-lateral">
      <div class="btn-expandir">
         <i class="bi bi-list" id="btn-exp"></i>
      </div>
   
   <ul>
      <li class="item-menu">
         <a href="tela.php">
            <span class="icon"><i class="bi bi-house"></i></span>
            <span class="txt-link">Inicio</span>
         </a>
      </li>
      <li class="item-menu">
         <a href="sub1.html">
            <span class="icon"><i class="bi bi-book"></i></span>
            <span class="txt-link">Livros</span>
         </a>
      </li>
      <li class="item-menu">
         <a href="index.html">
            <span class="icon"><i class="bi bi-cash-coin"></i></span>
            <span class="txt-link">Empréstimos</span>
         </a>
      </li>
      <li class="item-menu">
         <a href="#">
            <span class="icon"><i class="bi bi-person-circle"></i></span>
            <span class="txt-link">Conta</span>
         </a>
      </li>
   </ul>
   </nav>
   <script src="menu.js"></script>

    <header>
        <h1>L i b r y & B o o k</h1>
        <h3>Um site para empréstimos e compras de livros</h3>
     </header>
     <section>
      <center>
         <h2 style="color: rgba(255, 255, 255, 0.979);">Livros em Destaque</h2>
      </center>
            <div class="book-list">
                <div class="book-item">
                  <a href="https://www.amazon.com.br/Guerra-dos-Tronos-Cr%C3%B4nicas-Gelo/dp/8556510787">
                     <button class="book-button">
                     <img src="IMG/91+1SUO3vUL._SY466_.jpg" alt="livro1" width="200" height="300">
                     <h3 style="color: yellow;">As Crônicas de Gelo e Fogo Livro 1 : A guerra dos Tronos</h3>
                     <p style="color: white;">Autor:George R.R. Martin</p>
                     <p class="price">R$ 43.99</p>
                     </button>
                  </a>
                </div>
                <div class="book-item">
                  <a href="https://www.amazon.com.br/Harry-Potter-Pedra-Filosofal-Rowling/dp/8532530788/ref=asc_df_8532530788/?tag=googleshopp00-20&linkCode=df0&hvadid=379795242161&hvpos=&hvnetw=g&hvrand=8137640747705738707&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1032132&hvtargid=pla-569630960550&psc=1">
                     <button class="book-button">
                     <img src="IMG/81ibfYk4qmL._SY466_.jpg" alt="livro2" width="200" height="300">
                     <h3 style="color: yellow;">Harry Potter a Pedra Filosofal</h3>
                     <p style="color: white;">Autor:J.K. Rowling</p>
                     <p class="price">R$ 45.49</p>
                     </button>
                     </a>
                </div>
                
                <div class="book-item">
                  <a href="https://www.amazon.com.br/Mar-Monstros-Vol-2-Jackson-Olimpianos/dp/8580575400/ref=asc_df_8580575400/?tag=googleshopp00-20&linkCode=df0&hvadid=379816121681&hvpos=&hvnetw=g&hvrand=6686864405604094678&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1032132&hvtargid=pla-840181346844&psc=1">
                  <button class="book-button">
                     <img src="IMG/A1rVWjvjcdL._AC_UF1000,1000_QL80_.jpg" alt="livro3" width="200" height="300">
                     <h3 style="color: yellow;">Percy Jackson: O Mar de Monstros</h3>
                     <p style="color: white;">Autor:Rick Riordan</p>
                     <p class="price">R$ 30.99</p>
                  </button>
                  </a>
                </div>
                
            </div>
            <div class="featured-books-section">
               <a href="sub1.html">
                  <button class="button1" type="submit">Ver Mais</button>
            </a>
            </div>
     </section>
     <section>
        <h2>Empresas Afiliadas:</h2>
        <div class="empress-list">
         <div class="empress-item">
            <img src="IMG/amazon_logo._CB633267191_.png" alt="livro1" width="200" height="150">
                    <h3 style="color: rgba(255, 255, 255, 0.979);">Amazon</h3>
         </div>
         <div class="empress-item">
            <img src="IMG/saraiva-logo-1.png" alt="livro1" width="200" height="150">
                    <h3 style="color: rgba(255, 255, 255, 0.979);">Saraiva</h3>
         </div>
         <div class="empress-item">
            <img src="IMG/logo_1-01-e1658341073536.png" alt="livro1" width="200" height="150">
                    <h3 style="color: rgba(255, 255, 255, 0.979);">Americanas</h3>
         </div>
         <div class="empress-item">
            <img src="IMG/Positivo.png" alt="livro1" width="200" height="150">
                    <h3 style="color: rgba(255, 255, 255, 0.979);">Subimarino</h3>
         </div>
        </div>
     </section>
     <section>
        <h2>Empréstimos:</h2>
        <a href="index.html">
         <button class="emp-book-button" >Empréstimos(desenvolvimento)</button>
        </a>
        <a href="sub3.html">
         <button class="emp-ebook-button" >E-Book</button>
        </a>
     </section>
     <footer>
        <p>Let's Read a Book - Todos os direitos reservados</p>
     </footer>
</body>
</html>
