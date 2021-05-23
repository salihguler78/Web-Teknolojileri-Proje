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
				<div class="col-md-6 px-0">
					<h1 class="display-4">
						GİRİŞ
					</h1>
          <p>
            Kullanıcı adını ve şifrenizi girerek giriş yapınız.
          </p>
				</div>
			</div>
		</div>
	</header>
	
	<main>
		<div class="container">
			
			<form action="loginkontrol.php" method="POST">
				<div class="form-group">
					<label for="email"><b>KULLANICI ADI</b> </label>
					<input type="text" name="email" class="form-control" placeholder="Email 'B201210019@sakarya.edu.tr'" required="required">
				</div> 
				<div class="form-group">
					<label for="password"><b>ŞİFRE</b> </label>
					<input type="password" name="password" class="form-control" placeholder="Şifre '787878'" required="required">
				</div>
        <p></p>
				<button class="btn btn btn-info" type="submit">Gönder</button>
				<p></p>
			</form>
		</div>
	</main>
	<footer class="py-5 arkaplan2 text-white text-center">
      Web-Teknolojileri-Projesi © Salih Remzi Güler 2021
  </footer>
	<!-- BOOTSTRAP -->
	<!-- BOOTSTRAP -->
	<script src="bootstrap.js"></script>
	
</body>
</html>