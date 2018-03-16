<?php
    include 'connect.php';
    if(isset($_POST["cookie"])){
        $cookie=$_POST["cookie"];
        $data=$_POST["data"];
        $price=$_POST["price"];
        $name=$_POST["name"];
        $qry = "select username from cookie where cookie='$cookie'";
        $jsondata = new \stdClass();
        $result = mysqli_query($conn,$qry);
        if($result){
            $row = mysqli_fetch_assoc($result);
            $username = $row["username"];
            $qry2 = "insert into product(username,name,data,price) values('$username','$name','$data','$price')";
            mysqli_query($conn,$qry2);
            $jsondata->auth = true;
        }
        else{
            $jsondata->auth=false;
        }
        echo json_encode($jsondata);
    }
?>