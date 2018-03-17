<?php
    include 'connect.php';
    if(isset($_POST["login"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $qry = "select username,password from users where username='$username' and password='$password'";
        $jsondata = new \stdClass();
        $result = mysqli_query($conn,$qry);
        if($result){
            $row = mysqli_fetch_assoc($result);
            $cookie = md5($password);
            $qry2 = "insert into cookie(username,cookie) values('$username','$cookie')";
            mysqli_query($conn,$qry2);
            $jsondata->auth = true;
            $jsondata->cookie = $cookie;
        }
        else{
            $jsondata->auth=false;
        }
        echo json_encode($jsondata);
    }
    if(isset($_POST["register"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $address=$_POST["address"];
        $number=$_POST["number"];
        $qry = "insert into users(username,password,contactno,address) values('$username','$password','$number','$address')";
        $result = mysqli_query($conn,$qry);
        $qry = "select username,password from users where username='$username' and password='$password'";
        $jsondata = new \stdClass();
        $result = mysqli_query($conn,$qry);
        if($result){
            $row = mysqli_fetch_assoc($result);
            $cookie = md5($password);
            $qry2 = "insert into cookie(username,cookie) values('$username','$cookie')";
            mysqli_query($conn,$qry2);
            $jsondata->auth = true;
            $jsondata->cookie = $cookie;
        }
        else{
            $jsondata->auth=false;
        }
        echo json_encode($jsondata);
    }
?>
