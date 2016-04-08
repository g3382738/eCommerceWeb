<?php
    $servername = 'localhost:3306';
    $username = 'dreamoverseas';
    $passwordu = '123456gt';
    $databases = 'dreamoverseas';
    session_start();

    if(!isset($_SESSION['Username'])){
        $dbc = mysqli_connect($servername, $username, $passwordu, $databases);
        
        $user_username = mysqli_real_escape_string($dbc,trim($_POST['Username']));
        $user_password = mysqli_real_escape_string($dbc,trim($_POST['Password']));

        if(!(empty($user_username))&&!(empty($user_password))){
            $query = "SELECT Username FROM `dreamoverseas` WHERE Username = '$user_username' AND Password = '$user_password'";
            $data = mysqli_query($dbc,$query);
            if(mysqli_num_rows($data)==1){
                $row = mysqli_fetch_array($data);
                //$_SESSION['user_id']=$row['user_id'];
                $_SESSION['Username']=$row['Username'];
                $home_url = 'memberHome.php';
                header('Location: '.$home_url);
            }else{
                die("<script>alert('Sorry, you must enter a valid username and password to log in.');location.href='".$_SERVER["HTTP_REFERER"]."';</script>");
            }
        }else{
             die("<script>alert('Sorry, you must input your username and password.');location.href='".$_SERVER["HTTP_REFERER"]."';</script>");
        }
    }else{
        $home_url = 'memberHome.php';
        header('Location: '.$home_url);
    }
?>