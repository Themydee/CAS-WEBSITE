<?php
  require('include/db.php');
  $query = "SELECT * FROM home,secction_control";
  $run = mysqli_query($db,$query);
  $user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="CAS Logo Main_PNG.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Categories</title>
</head>

<body>

  <nav
  class="d-flex py-4 bg-white shadow text-right text-dark px-2 px-md-3 px-lg-5"
>

  <a class="mr-auto" href="./index.php"><img src="./CAS Logo Main_PNG.png" width="30px"> CAS POLLS</a>
<?php
if($user_data['login_section']){
  ?>  
  <a href="./register.php" class="d-block">Logout</a>
<?php
}
?>
  
  
</nav>

<div class="bg-white w-100">
  <div
    class="cat-head p-5 w-100 text-center"
    style="
      background-color: #f1f1f1;
      font-family: 'Nunito', sans-serif;
      color: #239540;
      border-left: solid 15px #0d5817;
    "
  >
    <span class="display-5 text-center"><?=$user_data['title']?></span>
  </div>
  <div class="text-center w-75 mx-auto py-5" style="max-width: 880px">
    
    <a
      href="categories.html"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle1']?></a
    >
    
    <a
      href="categories.html"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle2']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle3']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle4']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle5']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle6']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle7']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle8']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle9']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle10']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle11']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle12']?></a
    >
    
    <a
      href="#"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle13']?></a
    >
    
    <a
      href="#/"
      class="m-1 m-md-2 btn cat-link"
      ><?=$user_data['subtitle14']?></a
    >
    
  </div>
</div>

<div class="footer"></div>
<style>

  .d-block{
    color: green;
  }

  .mr-auto{
    color: green;
  }
  .cat-link {
    border: dashed 1px #999;
    color: #999;
  }
  .cat-link:hover {
    color: #0cc71b;
    border-color: #05a10d;
    box-shadow: none;
  }
  .cat-link:active {
    box-shadow: none;
  }
</style>

    <div
      class="w-100 text-right text-muted mt-n5 p-3 copyright"
      style="font-size: 0.75rem"
    >
      <hr class="d-inline-block w-50 mr-2" style="vertical-align: middle" />
      <?=$user_data['subtitle15_a']?>
      <a target="_blank" href="#" class="my-name"
        ><?=$user_data['subtitle15_b']?></a
      >
    </div>
    
    <style>
      .display-5 {
        font-size: 3rem;
      }
      .my-name {
        border-bottom: 2px dotted;
        color: #1ab922;
      }
      .my-name:hover {
        color: rgb(12, 95, 70);
        text-decoration: none;
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.js"></script>
</body>
</html>