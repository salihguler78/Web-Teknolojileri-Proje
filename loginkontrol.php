<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Teknolojileri Proje</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="stil.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark arkaplan ">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="resimler/unnamed.jpg" class="logo" alt="">            </a>
      <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       MENÜ <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active btn-primary" aria-current="page" href="index.html"  > <strong>Anasayfa </strong>  </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active btn-primary" href="ozgecmiş.html"> <strong>Özgeçmiş</strong> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active btn-primary" href="sehrim.html"> <strong>Şehrim</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active btn-primary" href="mirasimiz.html"> <strong>Mirasımız</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active btn-primary" href="ilgialanlarim.html"> <strong>İlgi Alanlarım</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active btn-primary" href="iletisim.html"> <strong>İletişim</strong></a>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link active btn-secondary">
                Giriş Yap
              <i class="fas fa-sign-in-alt"></i>
              </a>
            </li>		
                  
        </ul>
			</div>

		</div>
	</nav>

	<header>

		<div class="arkaplan2 text-light ">

			<div class="container">

				<div class="col-md-6 ">
					<h1 class="display-4 ">
						Giriş Ekranı
					</h1>
				</div>

			</div>

		</div>

	</header>
	
	<main>

		<div class="container">
			
			<?php 

				include("kullanicilar.php");


				if (($_POST["email"] == $kullanici) and ($_POST["password"] == $sifre))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $kullanici;
			       $_SESSION["pass"] = $sifre;
			
			       echo("<strong> SAYGIDEĞER {$kullanici} <br> SAFRANBOLU'YA HOŞGELDİNİZ!!!</strong>");
			
				}
			
				else 
				{
			            echo "KULLANICI ADI VEYA ŞİFRE YANLIŞ .<br>";
			            echo "GİRİŞ SAYFASINA YÖNLENDİRİLMEKTESİNİZ!";
			            header("Refresh: 1; url=login.php");
			    }
			
			?>
			
		</div>

	</main>


	<footer class="py-5 arkaplan2 text-white text-center">
      Web-Teknolojileri-Projesi © Salih Remzi Güler 2021
  </footer>

	<!-- BOOTSTRAP -->
	<script src="bootstrap.js"></script>