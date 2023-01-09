
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-
    gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb11f63fbf.js" crossorigin="anonymous"></script>
</head>
<style>
 .gradient-custom {
    /* fallback for old browsers */
    background: #6a11cb;
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
    
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
</style>
<body>

<?php
  include "config.php";
  //masukkan maklumat database
  if (isset($_POST['submit'])){
  // $id= $_POST['id'];
  $username= $_POST['username'];
  $password= md5 ($_POST['password']);
    //echo $nokp."". $no_telefon."". $id_staf."";
    $sql = "INSERT INTO user (username,password) VALUES ('{$username}','{$password}')";
    $rs=mysqli_query($link, $sql);
    //displaying proper message fot the user to see wheteher the query excuted perfectly or not
    if (!$rs){
      echo "Something went wrong ". mysqli_error($link);
    }
    else { echo "<script type'text/javascript'>alert('User added successfully!')</script>";
           echo "<script type'text/javascript'> document.location = 'index.php'; </script>";
    }
  }
  ?> 
<section class="vh-100 gradient-custom">
<form method = "post">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">REGISTER</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="username" id="username" class="form-control form-control-lg" name="username"/>
                <label class="form-label" for="username">Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                <label class="form-label" for="Password">Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" name='submit' >Submit</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>