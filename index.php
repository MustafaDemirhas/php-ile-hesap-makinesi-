<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
   
</head>
<body>
    
  <form id="form" action method=post>
     <h1>HESAP MAKİNESİ</h1>
    <input name=sayi1 type=text class="giriş"> <br> 
    <input name=sayi2 type=text class="giriş"> <br>
 <input name=toplama type=submit value=+ class="gonder">
 <input name=cıkarma type=submit value=-  class="gonder">
 <input name=carpma type=submit value=*  class="gonder">
 <input name=bolme type=submit value=/  class="gonder">
  
</form>

<?php
if(isset($_POST['toplama']))
      {
   $c = $_POST['sayi1'] + $_POST['sayi2'];
      }
if(isset($_POST["cıkarma"]))
      {
       $c = $_POST["sayi1"]- $_POST["sayi2"];
      }

    if(isset($_POST["carpma"]))
      {
    $c = $_POST["sayi1"] * $_POST["sayi2"];
      }
 if(isset($_POST["bolme"]))
      {
    $c = $_POST["sayi1"] / $_POST["sayi2"];
      }
 echo  "<span id=sonuc>sonuç=<strong>$c</strong></span>"  ;
 
?>
</body>
</html>