<?php
    include 'connect.php';
    if(isset($_POST["count"])){
        $count=$_POST["count"];
        $qry = "select name,username,data,price,id from product";
        $jsondata = new \stdClass();
        $content = array();
        $result = mysqli_query($conn,$qry);
        if($result){
            $row = mysqli_fetch_assoc($result);
            while ($row){
                $username = $row["username"];
                $data = $row["data"];
                $price = $row["price"];
                $name = $row["name"];
                $qry2 = "select contactno,address from users where username='$username'";
                $result2 = mysqli_query($conn,$qry2);
                $row = mysqli_fetch_assoc($result2);
                $number = $row["contactno"];
                $address = $row["address"];
                $recorddata = new \stdClass();
                $recorddata->name = $name;
                $recorddata->username = $username;
                $recorddata->number = $number;
                $recorddata->address = $address;
                $recorddata->data = $data;
                $recorddata->price = $price;
                $recorddata->auth = true;
                array_push($content,$recorddata);
                $row = mysqli_fetch_assoc($result);
            }
            $jsondata->content=$content;
        }
        else{
            $jsondata->auth=false;
        }
        echo json_encode($jsondata);
    }
?>