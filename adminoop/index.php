<?php

    // session_start();
    // if(!$_SESSION['LoggedIn'] == true){
    //   session_destroy();
    //   header('Location:login.php');
    // }



    include('templates/header.php');
    include('templates/sidebar.php');

    if(isset($_REQUEST['page'])){
        include('templates/'.$_REQUEST['page'].".php");
    }else{
      include('templates/home.php');  
    }


    

    include('templates/footer.php');




?>