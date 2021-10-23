<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
    <title>Vtu calculator</title>
<style>

body{
    background-image: url("https://t3.ftcdn.net/jpg/03/29/14/46/360_F_329144637_fLag9jYbaYQwo3apYr8OEzTrdUWWwXCR.jpg");
    background-size: 100% , 100%;
    overflow-x: hidden;
}
.dist{
  margin-left: 500px;
}
</style>
  </head>
  <body>
  <nav class="navbar navbar-light navbar-expand-md">
 
 <a class="navbar-brand" href="#">
   <img src="logo.png" width="50" height="50" alt="">
 </a>
 <a class="navbar-brand text-center text-dark  justify-content-center " href="#"><b>VTU CALCULATOR <h6>calculating made simpler</h6></b></a>
 <ul class="nav justify-content-end col-md-9">
  <li class="nav-item">
    <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
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
<div class="container dist">
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="staticBackdropLabel"> Select Semester</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
      <div class="btn-group-vertical  align-item-center" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-danger" for="btnradio1"><a href="sem.php" class="text-dark" style="text-decoration:none;">ELECTRONICS AND COMMUNICATION</a> </label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-danger" for="btnradio2"><a href="sem.php" class="text-dark" style="text-decoration:none;">CIVIL</a></label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
  <label class="btn btn-outline-danger" for="btnradio3"><a href="sem.php" class="text-dark" style="text-decoration:none;">MECHANICAL</a></label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
  <label class="btn btn-outline-danger" for="btnradio4"><a href="sem.php" class="text-dark" style="text-decoration:none;">ELECTRICALS AND ELECTRONICS</a></label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
  <label class="btn btn-outline-danger" for="btnradio5"><a href="sem.php" class="text-dark" style="text-decoration:none;">COMPUTER SCIENCE</a></label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
  <label class="btn btn-outline-danger" for="btnradio6"><a href="sem.php" class="text-dark" >INFORMATION SCIENCE</a></label>

</div>
      </div>
    </div>
  </div>
</div>
  <div class="row row-cols-1 row-cols-md-4 g-4 my-5  ">
  <div class="col">
    <div class="card h-150 w-60 text-white border-danger p-5">
    
      <div class="card-body">
        <h5 class="card-title text-dark"><u>SGPA/<br>
        PERCENTAGE CALCULATOR</u></h5>
        <p class="card-text  text-danger"></p>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 Calculate Now 
</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-150 w-60 text-white border-danger p-5">
      <div class="card-body">
        <h5 class="card-title  text-dark"><u>CGPA/<br>PERCENTAGE CALCULATOR</u></h5>
        <p class="card-text  text-danger"></p>
       <!-- Button trigger modal -->
<a href="cgpa.php"><button type="button" class="btn btn-danger">
 Calculate Now 
</button></a>
    </div>
    </div>
  </div>
</div>
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