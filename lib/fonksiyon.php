<?php


class kurumsal{

  public $normaltitle,$metatitle,$metadesc,$metakey,$metaout,$metaown,$metacopy,$logoyazi,
  $twit,$face,$inst,$telno,$mailadres,$normaladres,$slogan,$referansbaslik,$filobaslik,$yorumbaslik,$iletisimbaslik;

function __construct(){

  try {

    $baglanti=new PDO("mysql:host=localhost;dbname=kurumsal;charset=utf8","root","");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    
    }catch(PDOException $e){
      die($e->getMessege());
    
    }
    
 


 
   $ayarcek=$baglanti->prepare("select*from ayarlar");
   $ayarcek->execute();
   $sorguson=$ayarcek->fetch();

   $this->normaltitle=$sorguson["title"];
   $this->metatitle=$sorguson["metatitle"];
   $this->metadesc=$sorguson["metadesc"];
   $this->metakey=$sorguson["metakey"];
   $this->metaout=$sorguson["metaauthor"];
   $this->metaown=$sorguson["metaowner"];
   $this->metacopy=$sorguson["metacopy"];
   $this->logoyazi=$sorguson["logoyazisi"];
   $this->twit=$sorguson["twit"];
   $this->face=$sorguson["face"];
   $this->inst=$sorguson["inst"];
   $this->telno=$sorguson["telefonno"];
   $this->mailadres=$sorguson["mailadres"];
   $this->normaladres=$sorguson["adres"];
   $this->slogan=$sorguson["slogan"];
   $this->referansbaslik=$sorguson["referansbaslik"];
   $this->filobaslik=$sorguson["filobaslik"];
   $this->yorumbaslik=$sorguson["yorumbaslik"];
   $this->iletisimbaslik=$sorguson["iletisimbaslik"];





}//ayarlar 
function introbak(){
  $baglanti=new PDO("mysql:host=localhost;dbname=kurumsal;charset=utf8","root","");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $introal=$baglanti->prepare("select* from intro");
  $sonuc=$introal-> execute();

  while($sonucum=$introal->fetch(PDO::FETCH_ASSOC)):



  echo '<div class= "item" style= "background-image:url('.$sonucum["resimyol"].');"></div>';

  endwhile;
}
//intro bölümü



function hakkimizda(){
  $baglanti=new PDO("mysql:host=localhost;dbname=kurumsal;charset=utf8","root","");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $introal=$baglanti->prepare("select* from hakkimizda");
  $sonuc=$introal-> execute();

  $sonucum=$introal->fetch();

  echo ' <div class="row">
  <div class = "col-lg-6 hakkimizda-img">
  i<img src ="'.$sonucum ["resim"].'" alt="'.$sonucum ["resim"].'-Hakkında"/>
</div>

<div class="col-lg-6 content">
<h2>'.$sonucum ["baslik"].' </h2>
<h3>'.$sonucum ["icerik"].' </h3>

   </div>
   </div>';


 
}
// echo "<pre>" ; print_r($sonucum); exit;
//hizmetler bölümü
function hizmetler(){
  $baglanti=new PDO("mysql:host=localhost;dbname=kurumsal;charset=utf8","root","");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $introal=$baglanti->prepare("select * from hizmetler");
  $sonucum=$introal-> execute();
  $sonucum=$introal->fetch();

  
  echo '
  <div class="section-header">
  <h2> HİZMETLERİMİZ</h2>
  <p>'.$sonucum ["hizmetlerbaslik"].'</p>

</div>
<div class="row">

<div class="col-lg-6">
<div class="box wow fadeInLeft">
 <div class="icon"><i class="fa fa-bar-chart"></i></div>
 <h4 class="title"><a href="#">'.$sonucum["baslik1"].'</a></h4>
 <p class="description">'.$sonucum["icerik1"].'</p>

</div>

 </div>



 <div class="col-lg-6">
<div class="box wow fadeInRight">
 <div class="icon"><i class="fa fa-picture-o"></i></div>
 <h4 class="title"><a href="#">'.$sonucum["baslik2"].'</a></h4>
 <p class="description">'.$sonucum["icerik2"].'</p>

</div>

 </div>
 <div class="col-lg-6">
<div class="box wow fadeInLeft" data-wow-delay=2>
 <div class="icon"><i class="fa fa-map"></i></div>
 <h4 class="title"><a href="#">'.$sonucum["baslik3"].'</a></h4>
 <p class="description">'.$sonucum["icerik3"].'</p>

</div>

 </div>

 <div class="col-lg-6">
<div class="box wow fadeInRight" data-wow-delay=2>
 <div class="icon"><i class="fa fa-shopping-bag"></i></div>
 <h4 class="title"><a href="#">'.$sonucum["baslik4"].'</a></h4>
 <p class="description">'.$sonucum["icerik4"].'</p>

   </div>
</div>
</div>';

 }

//referanslar bölümü
function referans(){
  $baglanti=new PDO("mysql:host=localhost;dbname=kurumsal;charset=utf8","root","");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $introal=$baglanti->prepare("select* from referanslar");
  $sonuc=$introal-> execute();

  echo '<div class="section-header">
  <h2> Referanslar</h2>
  <p>'; echo $this-> referansbaslik; echo ' </p>
    </div>

<div class="owl-carousel clients-carousel">';

 while($sonucum=$introal->fetch(PDO::FETCH_ASSOC)):
 
echo'<img src="'.$sonucum["resimyol"].'" alt="Referans- '.$sonucum["id"].' " />';

 
  endwhile;
  echo'</div>' ;
}



function filomuz(){
  $baglanti=new PDO("mysql:host=localhost;dbname=kurumsal;charset=utf8","root","");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $introal=$baglanti->prepare("select* from filomuz");
  $sonuc=$introal-> execute();

  echo '
  <div class="container">

 <div class="section-header">
      <h2> Araçlarımız</h2>
      <p>'; echo $this->filobaslik; echo'</p>
</div>

</div>

    <div class="container-fluid">
    <div class="row no-gutters">';


while($sonucum=$introal->fetch(PDO::FETCH_ASSOC)):

echo' <div class="col-lg-3 col-md-4">
<div class="filo-item wow fadeInUp">
 <a href="'.$sonucum["resimyol"].'" class="filo-popup">
 <img src="'.$sonucum["resimyol"].'" alt="Referans-'.$sonucum["id"].'" />
 <div class="filo-overlay">
 
 </div>
</a>
</div>
</div> ';

endwhile;

  echo'</div>' ;
}



function yorumlar(){
  $baglanti=new PDO("mysql:host=localhost;dbname=kurumsal;charset=utf8","root","");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $introal=$baglanti->prepare("select* from yorumlar");
  $sonuc=$introal-> execute();

echo '<div class="section-header">
<h2> Müşteri Yorumları</h2>
<p>'; echo $this->yorumbaslik; echo ' </p>
</div>

<div class="owl-carousel testimonial-carousel">';


while($sonucum=$introal->fetch(PDO::FETCH_ASSOC)):

  echo'
  
  
  <div class="testimonial-item">
  <p>
    <img src="img/sol.png" class="quote-sign-left" />
    '.$sonucum["icerik"].'
<img src="img/sag.png" class="quote-sign-right" />
  
</p>
<img src="img/yorum.jpg" class="testimonial-img" alt= "Müşteri Yorum-'.$sonucum["id"].'" />
<h3> '.$sonucum["isim"].'</h3>
</div>';
  
   
  endwhile;


echo'</div>';

}





}



?> 