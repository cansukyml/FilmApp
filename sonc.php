<!DOCTYPE html>
<html lang="en">
<head>


<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    
<!-- Fontlar -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

<!-- Bootstrap stil dosyası -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- işimize yarayacak diğer kütüphane css dosyalarımız -->
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">



<link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header id ="header">

<div class="container">
<div id="logo" class="pull-left">
<h1><a href="#body" class="scrollto"> X <span> Nakliyat</span></a></h1>

</div>

<nav id ="nav-menu-container">
<ul class="nav-menu">
<li class="menu-active"><a href="index.php">Anasayfa</a></li>
<li ><a href="#hakkimizda">Hakkımızda</a></li>
<li ><a href="#hizmetler">Hizmetlerimiz</a></li>
<li ><a href="#filo">Araç Filomuz </a></li>
<li ><a href="rezervasyon.php">Rezervasyon</a></li>
<li ><a href="#iletişim">İletişim</a></li>



</ul>
</nav>
</div>

</header>

<div id="sonuc1" style="text-align: center; " ></div>

<div


</div>
<script>

var url = new URL(window.location.href);
var degisken = url.searchParams.get("degisken");

    document.getElementById("sonuc1").innerHTML=degisken




</script>
</body>
</html>