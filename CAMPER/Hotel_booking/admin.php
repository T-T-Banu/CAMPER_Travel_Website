<?php session_start();
include_once 'admin/include/class.user.php';
$user=new User();
$uid=$_SESSION[ 'uid']; 
if(!$user->get_session()) 
{ 
    header("location:admin/login.php"); 
} 
if(isset($_GET['q'])) 
{ 
    $user->user_logout();
 header("location:index.php"); 
} 
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
        .admin
        {
            text-align: center;
    color:#e38d13;
    padding-bottom: 3.5rem;
    font-size: 1.5rem;
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
    <h1 class="heading"> <span>Admin</span> Page </h1>
    <div class="row">
        <div class="content">
            <h3>Room Category</h3>
            <center> 
            <p><a href="admin/addroom.php" class="admin">Add Room Category</a></p>
            <p><a href="show_room_cat.php" class="admin">Show All Room Category</a></p>
            <p><a href="show_room_cat.php" class="admin">Edit Room Category</a></p>
            </center> 
        </div>
    </div>
</section>

      
<section class="about" id="about">
    <div class="row">
         <div class="content">
            <h3>Bookings</h3>
            <center> 
            <p><a href="room.php" class="admin">Book Now</a></p>
            <p><a href="show_all_room.php" class="admin">Show All Booked Rooms</a></p>
            <p><a href="show_all_room.php" class="admin">Edit Booked Room</a></p>
            </center>     
        </div>
    </div>
</section>


<section class="about" id="about">
    <div class="row">
        <div class="content">
        <h3>Add Manager</h3>
           <center> 
            <p><a href="admin/registration.php" class="admin">Add Manager</a></p>
        </center>  
        </div> 
    </div>
</section>
</div>






</body>

</html>