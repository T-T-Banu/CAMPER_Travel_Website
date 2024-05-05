<?php
include_once 'admin/include/class.user.php'; 
$user=new User();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive coffee shop website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/main.css">

    <style>
       
    <style>
          
          .row
          {
             display: grid;
         grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
         gap:1.5rem;
          }
     
          .row .col-md-3
          {
             height: 25rem;
         overflow:hidden;
         width: 100%;
          }
     
          .col-md-6 well
          {
             height: 100%;
         object-fit: cover;
         width: 100%;
          }
     
          h4
          {
             text-transform: uppercase;
         font-size: 3.5rem;
         color:#fff;
          }
     
          h6
          {
             font-size: 1.5rem;
         color:#fff;
          }
     
     
         </style>
        }

    </style>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="./images/camper.png" alt="">
    </a>

    <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="room.php">Room &amp; Facilities</a>
            <a href="./reservation.php">Online Reservation</a>
            <a href="review.php">Review</a>
            <a href="admin.php">Admin</a>

            <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
    </nav>
</header>
<br><br><br> <br><br><br><br><br><br>


<section class="about" id="about">

<h1 class="heading"> Room<span> &</span> Category </h1>

<div class="row">

</div>

</section>


        
        
        
        <?php
        
        $sql="SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//               ********************************************** Show Room Category***********************
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "

                                                         
                    


                            <section class='blogs' id='blogs'>

                            
                            <div class='box-container'>

                                <div class='box'>
                                    <div class='image'>
                                        <img src='images/blog-1.jpeg' alt='12'>
                                    </div>
                                    <div class='content'>
                                    <h4>".$row['roomname']."</h4><hr>
                                    <h6>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed.</h6>
                                    <h6>Facilities: ".$row['facility']."</h6>
                                    <h6>Price: ".$row['price']." tk/night.</h6>

                                    &nbsp;&nbsp;
                                    <a href='admin/edit_room_cat.php?roomname=".$row['roomname']."'><button class='btn btn-primary button'>Edit</button></a>
                                    </div>

                                </div>

                                </div>

                            </section>
                            
                        
                    
                         ";
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO Data Exist";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>
    
    
    
    
    

</body>

</html>