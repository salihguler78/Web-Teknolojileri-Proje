<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

    <div class="arkaplan2 text-light">

        <div class="container">

            <div class="col-md-12 px-0">
                <h1 class="display-5 fw-bold">
                    Formunuz Başarılı Bir Şekilde Gönderilmiştir!!!
                </h1>
            </div>

        </div>

    </div>

</header>

<main>

    <div class="container">
        
        <div class="row">

        <?php 
      $_isim=$_POST['name'];
      $_email=$_POST['email'];
      $_mesaj=$_POST['message']; 
     
      echo "<strong><table >
      <tr>
          <td >İSİM </td>
          <td>------------------------------</td>
          <td>$_isim</td>
      </tr>
      <tr>
          <td>E-MAİL </td>
          <td>------------------------------</td>
          <td>$_email</td>
      </tr>
      <tr>
          <td>MESAJ </td>
          <td>------------------------------</td>
          <td>$_mesaj</td>
      </tr>
     </table></strong> "; 

     
    ?> 
  
      
           


           


        </div>

    </div>

</main>
   




<script src="bootstrap.js"></script>
 </body>
</html>