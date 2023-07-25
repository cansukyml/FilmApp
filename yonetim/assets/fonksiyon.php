<?php

  try {

    $baglanti=new PDO("mysql:host=localhost;dbname=kurumsal;charset=utf8","root","");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    
    }catch(PDOException $e){
      die($e->getMessege());
    
    }
    



class yonetim{
  
function sorgum($vt,$sorgu,$tercih=0){

  $al=$vt->prepare($sorgu);
  $al->execute();
  if($tercih==1):
    return $al->fetch();
  elseif ($tercih==2):
    return $al->fetch(PDO::FETCH_ASSOC);
  endif;

  
   $sonuc=$al->fetch();
}

function siteayar($baglanti){
  
  $sonuc=$this->sorgum($baglanti,"select*from ayarlar",1);
  if($_POST):

$title=htmlspecialchars($_POST["title"]);
$metatitle=htmlspecialchars($_POST["metatitle"]);
$metadesc=htmlspecialchars($_POST["metadesc"]);
$metakey=htmlspecialchars($_POST["metakey"]);
$metaaut=htmlspecialchars($_POST["metaaut"]);
$metaown=htmlspecialchars($_POST["metaown"]);
$metacopy=htmlspecialchars($_POST["metacopy"]);
$logoyazi=htmlspecialchars($_POST["logoyazi"]);
$face=htmlspecialchars($_POST["face"]);
$twit=htmlspecialchars($_POST["twit"]);
$inst=htmlspecialchars($_POST["inst"]);
$telno=htmlspecialchars($_POST["telno"]);
$adres=htmlspecialchars($_POST["adres"]);
$mailadres=htmlspecialchars($_POST["mailadres"]);
$slogan=htmlspecialchars($_POST["slogan"]);
$refsaybas=htmlspecialchars($_POST["refsaybas"]);
$filosayfabas=htmlspecialchars($_POST["filosayfabas"]);
$yorumsayfabas=htmlspecialchars($_POST["yorumsayfabas"]);
$iletisimsayfabas=htmlspecialchars($_POST["iletisimsayfabas"]);

//burada bunların boş ve dolu kontrolleri yapılabilir.

$guncelleme=$baglanti->prepare("update ayarlar set
 title=?,metatitle=?,metadesc=?,metakey=?,metaaut=?,metaown=?,metacopy=?,logoyazi=?,
 face=?,twit=?,inst=?,telno=?,adres=?,mailadres=?,slogan=?,refsaybas=?,filosayfabas=?,yorumsayfa=?,
 iletisimsayfabas=?");


$guncelleme->bindParam(1,)


















    
  else:
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
				<div class="row ">
					<div class="col-lg-10 mx-auto mt-2 mb-4"><h5 class="text-info ">SİTE AYARLARI</h5></div> 
					<!--*******************TITLE****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Site Başlığı</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="title" class="form-control" value="<?php echo $sonuc['title']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************TITLE****************-->
					<!--*******************META TITLE****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Meta Başlığı</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="metatitle" class="form-control" value="<?php echo $sonuc['metatitle']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************TITLE****************-->
					<!--*******************META TITLE****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Meta Açıklaması</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="metadesc" class="form-control" value="<?php echo $sonuc['metadesc']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************META TITLE****************-->
					<!--*******************META KEY****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Anahtar Kelimeler</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="metakey" class="form-control" value="<?php echo $sonuc['metakey']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************META KEY****************-->
					<!--*******************Author****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Yapımcı</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="metaout" class="form-control" value="<?php echo $sonuc['metaauthor']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************Author****************-->
					<!--*******************owner****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Site Sahibi</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="metaown" class="form-control" value="<?php echo $sonuc['metaowner']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************owner****************-->
					<!--*******************Copywright****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Copywright</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="metacopy" class="form-control" value="<?php echo $sonuc['metacopy']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************Copywright****************-->
					<!--*******************LOGO ****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Logo</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="logoyazi" class="form-control" value="<?php echo $sonuc['logoyazisi']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************LOGO****************-->
					<!--*******************TWITTER****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Twitter</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="twit" class="form-control" value="<?php echo $sonuc['twit']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************TWITTER****************-->
					<!--*******************FACEBOOK****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Facebook</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="face" class="form-control" value="<?php echo $sonuc['face']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************FACEBOOK****************-->
					<!--*******************INSTAGRAM****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span class="siteayarfont">Instagram</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="inst" class="form-control" value="<?php echo $sonuc['inst']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************INSTAGRAM****************-->
					<!--*******************TELEFON****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Telefon Numarası</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="telno" class="form-control" value="<?php echo $sonuc['telefonno']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************TELEFON****************-->
					<!--*******************ADRES****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Adres</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="adres" class="form-control" value="<?php echo $sonuc['adres']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************TITLE****************-->
					<!--*******************EMAIL ADRESI****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Email Adresi</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="mailadres" class="form-control" value="<?php echo $sonuc['mailadres']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************TITLE****************-->
					<!--*******************SLOGAN****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Site Sloganı</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="slogan" class="form-control" value="<?php echo $sonuc['slogan']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************SLOGAN****************-->
					<!--*******************REFERANSLARIMIZ****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Referanslarımız Başlığı</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="referansbaslik" class="form-control" value="<?php echo $sonuc['referansbaslik'] ; ?>" />
							</div>
						</div>
					</div>

					<!--*******************REFERANSLARIMIZ****************-->
					<!--*******************FILO****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Filomuz Başlığı</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="filobaslik" class="form-control" value="<?php echo $sonuc['filobaslik']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************FILO****************-->
					<!--*******************YORUMLAR BASLIK****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">Yorumlar Başlığı</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="yorumbaslik" class="form-control" value="<?php echo $sonuc['yorumbaslik']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************YORUMLAR****************-->
					<!--*******************ILETISIM****************-->
					<div class="col-lg-8 mx-auto mt-2">
						<div class="row">
							<div class="col-lg-4 pt-3">
								<span id="siteayarfont">İletişim Başlığı</span>
							</div>
							<div class="col-lg-8 p-1">
								<input type="text" name="iletisimbaslik" class="form-control" value="<?php echo $sonuc['iletisimbaslik']; ?>" />
							</div>
						</div>
					</div>
					<!--*******************ILETISIM****************-->

					<div class="col-lg-8 mx-auto mt-2 border-bottom">
						<input type="submit" name="buton" class="btn btn-info m-1 pull-right" value="Güncelle"  />
					</div> 

				</div>

			</form>




<?php
  endif;


  echo $sonuc["title"];
}










}
 


 
   



?> 