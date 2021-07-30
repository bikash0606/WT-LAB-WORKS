<?php 
    //Include config.php file
    include('php/config.php');
    //1. get the id of the admin to be deleted 
    $id = $_GET['user_id'];
    //2. create query to delete admin
    $sql = "DELETE FROM users WHERE user_id=$id";

    //execute query
    $query = mysqli_query($conn, $sql);

        //check the query
        if($query == TRUE){
            echo "Admin Deleted";
        }
        else echo "Failed";
    //3. redirect

?>