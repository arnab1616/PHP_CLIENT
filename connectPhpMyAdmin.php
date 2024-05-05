<?php
    $connection = mysqli_connect("localhost:3306","root","","arnabdb");
    if(!$connection){
        die("Error : ".mysqli_connect_error());
    }
    // $query = "insert into xyz (fname,lname) values('BISAKHA', 'CHAULYA')";
    // $stmt = mysqli_query($connection, $query);
    // while($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)){
    //     echo $row["fname"]. " ". $row["lname"] ."</br>";
    // }
?>