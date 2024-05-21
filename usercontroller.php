<?php
include('dbconnection.php');

// sign up function 
// var_dump($_POST['loginuser']);
if(isset($_POST['loginuser'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // print_r($email);

    if(empty($name) ||empty($email) ||empty($password)){
        header('location:login.php?message=Please enter all fields');
    }else{
        $query = "SELECT * FROM `users` WHERE `name`='$name' AND `password` = '$password'";
        // print_r($query);
        $result = $connection->query($query);
        // print_r($result);
        $data = $result->fetch_assoc();
        // print_r($data);
        // $name=$data['name'];
        // print_r($name);
        if($data['usertype']=='student'){
            header('location:student.php?message=login successfully');

        }elseif($data['usertype']=='admin'){
            header('location:admin.php');
        }else{
            session_start();
            $message = 'login failed try again please';
            $_SESSION['loginmessage'] = $message;
            header('location:login.php');
        }

        // $query= "INSERT INTO users (`name`,`email`,`password`) VALUES('$name','$email','$password')";
        // // print_r($query);
        // $result =$connection->query($query);
        // if(!$result){
        //     die('connection error, try again please');
        // }else{
        //     header('location:index.php?add_message=register successfully');
        // }
    }
}
?>