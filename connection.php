<?php
    $server = "localhost";
    $db = "login";
    $username = "root";
    $password = "";

        $conn = mysqli_connect($server,$username,$password,$db);
    
        // if($conn){
        //     //echo "Database is connected";
        // }else{
        //     echo "Database is not connected".mysqli_error($conn);
        // }

            if(isset($_POST['user'])){
                $username = $_POST['user'];
                $password = $_POST['pass'];
                $sql = "select * from users where username = '$username' AND password = '$password'limit 1";    

                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) ==1){
                    echo "Login succesful\t\t:".$username;
                    exit();
                }else{
                    echo "Failed to Login".mysqli_error($conn);exit();
                }
            }
       
?>