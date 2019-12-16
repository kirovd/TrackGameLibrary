<?php
if(!empty($_GET['id'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gamelib";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    



    
        $result = $conn->query("SELECT Box FROM library WHERE id = {$_GET['id']}");

        if($result->num_rows >0){
        $row = $result->fetch_assoc();

        header("Content-type: image/jpeg");
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $fetch['Box'] ).'"/>';
        }else {
        echo 'Image not found...';
        }
    }




?>