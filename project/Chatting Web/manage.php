<?php include_once "php/config.php"; ?>
<!-- content -->
    <div class="content">
        <div class="wrapper">
            <h1>Manage Admin</h1>
            <br/>

            <?php
            if(isset($_SESSION['add'])){
                echo $_SESSION['add']; //display message session
                unset($_SESSION['add']); // sunset values
            }
            
            ?>
            <br/> <br/>
            <!-- Button -->
            <br/>
            <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php 
            //query to get all admin 
            $sql = "SELECT * FROM users";
            //execute query
            $query = mysqli_query($conn, $sql);

            // check if the query is executed or not
            if($query == TRUE){
                //count rows to check weather we have database or not
                $count = mysqli_num_rows($query); //function to get all the rows from the database

                $sn=1;
                //check the number of rows
                if($count>0){
                    //have data
                    while($row=mysqli_fetch_assoc($query)){
                        //using whilel loop to fet all the data from database
                        // and while loop will run as long as we have data in database

                        // get individual data
                        $id = $row['user_id'];
                        $fname = $row['fname'];
                        $email =  $row['email'];

                        //display the values in table
                        ?>
                        <tr>    
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $email; ?></td>
                        <td>
                            <a href="#" class="btn-secondary">Update user</a> 
                            <a href="http://localhost:9000/delete-user.php?id=<?php echo $id; ?>" class="btn-danger"> Delete user <a/>
                        </td>
                        </tr>
                        <?php 
                    }
                }
                else{
                    //do not have data
                    echo ("NO DATA");
                }
            }
            ?>
            

        </table>
            
                <div class="clearfix"></div>
        </div>     
    </div>