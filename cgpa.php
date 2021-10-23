<?php 
include_once '_dbconnect.php';
    $inp1=$_POST['name'];
    $inp2=$_POST['namef'];
    $inp3=$_POST['nameg'];
    $inp4=$_POST['nameh'];
    $inp5=$_POST['namei'];
    $inp6=$_POST['namej'];
    $inp7=$_POST['namek'];
    $inp8=$_POST['namel']; 

    $credit = 20;
    $creditu = 20;
    $creditv = 24;
    $creditw = 24;
    $creditx = 25;
    $credity = 24;
    $creditz = 20;
    $credita = 18;

   $tc=$credit +$creditu +$creditv +$creditw +$creditx +$credity +$creditz + $credita;
  //  $tf=$inp1+$inp2+$inp3+$inp4+$inp5+$inp6+$inp7+$inp8;
  //  $f=(($credit * $inp1) + ($creditu * $inp2) +($creditv * $inp3) +($creditw * $inp4) +($creditx * $inp5) +($credity * $inp6 )+($creditz * $inp7) +($credita * $inp8 ));
 $a=$credit *$inp1 ;
 $b=$creditu *$inp2 ;
 $c=$creditv *$inp3 ;
 $d=$creditw *$inp4 ;
 $e=$creditx *$inp5 ;
 $f=$credity *$inp6 ;
 $g=$creditz *$inp7 ;
 $h=$credita *$inp8 ;
 
 $tf=$a+$b+$c+$d+$e+$f+$g+$h;
 

  $s=$tf/$tc;
$per=$s-0.75;
$pers=$per*10;
// var_dump($pers);
// $p=$s/$tc;
// var_dump($tc);
// var_dump($s);
// // var_dump($p);
//  var_dump($tf);



?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="pmp.css">
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<link rel="stylesheet" href="pdf.css" />
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-light navbar-expand-md">
 
 <a class="navbar-brand" href="#">
   <img src="logo.png" width="50" height="50" alt="">
 </a>
 <a class="navbar-brand text-center text-dark  justify-content-center " href="#"><b>VTU CALCULATOR <h6>calculating made simpler</h6></b></a>
 <ul class="nav justify-content-end col-md-9">
  <li class="nav-item">
    <a class="nav-link active text-dark" aria-current="page" href="./">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="login.php">Logout</a>
  </li>
  <li class="nav-item">
<a class="nav-link text-dark " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Feedback Form</a>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
        <div class="form-group">
            <label for="exampleInputUSN">USN*</label><br>
            <input type="text" class="form-control" id="exampleInputUSN" placeholder="">
          </div><br>
          <div class="form-group">
            <label for="exampleInputEmail">Email*</label><br>
            <input type="text" class="form-control" id="exampleInputEmail" placeholder="">
          </div><br>
          <div class="form-group">
            DO YOU LIKE IT
            <br>
            <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
             <label class="form-check-label" for="flexRadioDefault1">
               Yes
             </label>
           </div>
           <div class="form-check">
             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
             <label class="form-check-label" for="flexRadioDefault2">
               No
             </label>
           </div>
            <br>
            <div class="form-group">
            <label for="exampleInputtext">Share Your Experience*</label><br>
            <input type="text" class="form-control" id="exampleInputtext" placeholder="">
          </div><br>
          <button type="submit" class="btn btn-primary">Submit</button><br>
          <div class="form-group"><br>
            <label for="exampleInputConfirm Password1">THANK YOU FOR YOUR VALUABLE FEEDBACK</label>
            </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark">Welcome User!</a>
  </li>
</ul>
</nav>

<div class="container"><h1 class="text-center">Enter Your CGPA Points In The Input Feild *</h1></div>

<div class="dist" id="invoice">

<form action="cgpa.php" method="POST">
    <label for="inp1" class="pingi">SEM1</label>
        <input type="text" id="inp1" placeholder="" name="name" value="<?php echo $inp1; ?>"> <br>
        <label for="inp1" class="pingi">SEM2</label>
        <input type="text" id="inp1" placeholder="" name="namef" value="<?php echo $inp2; ?>" > <br>
        <label for="inp1"class="pingi">SEM3</label>
        <input type="text" id="inp1" placeholder="" name="nameg" value="<?php echo $inp3; ?>"> <br>
        <label for="inp1"class="pingi">SEM4</label>
        <input type="text" id="inp1" placeholder="" name="nameh"  value="<?php echo $inp4; ?>"> <br>
        <label for="inp1"class="pingi">SEM5</label>
        <input type="text" id="inp1" placeholder="" name="namei" value="<?php echo $inp5; ?>"> <br>
        <label for="inp1"class="pingi">SEM6</label>
        <input type="text" id="inp1" placeholder="" name="namej" value="<?php echo $inp6; ?>"> <br>
        <label for="inp1"class="pingi">SEM7</label>
        <input type="text" id="inp1" placeholder="" name="namek" value="<?php echo $inp7; ?>"> <br>
        <label for="inp1"class="pingi">SEM8</label>
        <input type="text" id="inp1" placeholder="" name="namel" value="<?php echo $inp8; ?>"> <br>
        <input type="submit" class="btn btn-primary" name="submit" value="Calculate">
        <input type="button" class="btn btn-warning" value="Print"  id="download">
    </form>
<br> 
<p> SGPA:<?php if($_POST["name"]) echo $s; ?> <br> PERCENTAGE:<?php if($_POST["name"]) echo $pers + "%"; ?></p>






    
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>