<?php
  require('include/db.php');
  $query = "SELECT * FROM main,secction_control,social_media";
  $run = mysqli_query($db,$query);
  $user_data = mysqli_fetch_array($run);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS WEBSITE</title>
    <link rel="stylesheet" href="css/style.css">
   
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js'></script>
</head>

<body>
    <div id="container">
        <!-- navbar button -->
        <div id="navbarBtn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- navbar -->
        <div id="navbar">
            <!-- hide button -->
            <ul>
                <li class="active"><a href="#"><?=$user_data['subtitle4']?></a></li>
                <li><a href="#"><?=$user_data['subtitle5']?></a></li>
                <li><a href="#"><?=$user_data['subtitle6']?></a></li>
                <li><a href="http://localhost/Cas%20Website/Caspolls/register.php"><?=$user_data['subtitle7']?></a></li>
            </ul>
            <div id="hide"><i class="fas fa-times"></i></div>
        </div>
        <!-- logo -->
        <div id="logo">CAS</div>
        <!-- content -->
        <div id="content">
            <div id="text">
                <h3><?=$user_data['title']?></h3>
                <p><?=$user_data['subtitle1']?></p>
            </div>
        </div>
        <!-- social media follow buttons -->
        <div id="socialIcons">
            <h2><?=$user_data['subtitle3']?></h2>
            <div id="icons">

        <?php if($user_data['facebook']!=''){?>
        <a href="https://facebook.com/<?=$user_data['facebook']?>" class="facebook"><i 
        class="fab fa-facebook"></i></a>
        <?php
}
        ?>


<?php if($user_data['instagram']!=''){?>
        <a href="https://instagram.com/<?=$user_data['instagram']?>" class="instagram"><i 
        class="fab fa-instagram"></i></a>
        </div>
        <?php
      }
      ?>
            </div>
        </div>

        <!-- count down -->
        <div id="countdown">
            <h2><?=$user_data['subtitle2']?></h2>
            <div id="time">
                <div class="totalTime" id="days">30<b>d</b></div>
                <div class="totalTime" id="hrs">23<b>h</b></div>
                <div class="totalTime" id="mins">44<b>m</b></div>
                <div class="totalTime" id="secs">56<b>s</b></div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>