<?php
include_once 'include/class.user.php'; 
$user=new User(); 
 

if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->add_room($roomname, $room_qnty, $no_bed, $bedtype,$facility,$price);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('Room Added Succesfully');
         </script>";
    }
    else
    {
         echo $result;
    }
   
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
    <link rel="stylesheet" href=".../css/main.css">

    <style>
       @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

:root{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg:#010103;
    --border:.1rem solid rgba(255,255,255,.3);
}

*{
    font-family: 'Roboto', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}


body{
    background: var(--bg);
}

section{
    padding:2rem 7%;
}

.heading{
    text-align: center;
    color:#fff;
    text-transform: uppercase;
    padding-bottom: 3.5rem;
    font-size: 4rem;
}

.heading span{
    color:var(--main-color);
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.9rem 3rem;
    font-size: 1.7rem;
    color:#fff;
    background: var(--main-color);
    cursor: pointer;
}

.btn:hover{
    letter-spacing: .2rem;
}


.contact .row{
    display: flex;
    background:var(--black);
    flex-wrap: wrap;
    gap:1rem;
    
}
/*
.contact .row .form-group{
    flex:1 1 45rem;
    width: 100%;
    object-fit: cover;
}*/

.contact .row form{
    flex:1 1 45rem;
    padding:5rem 2rem;
    text-align: center;
}

.contact .row form label{
    text-transform: uppercase;
    font-size: 2rem;
    color:#fff;
}

.contact .row form .inputBox{
   
    align-items: center;
    margin-top: 2rem;
    margin-bottom: 2rem;
    background:var(--bg);
    border:var(--border);
}


.contact .row form  input{
    width: 500px;
    height:30px;
    padding:2rem;
    font-size: 1.7rem;
    color:red;
    text-transform: none;
    background:none;
}


.contact .row form select{
    width: 400px;
    height:30px;
    
}
  

.contact .row form  textarea
{
    width: 400px;
    height:80px; 
}



    </style>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="./images/camper.png" alt="">
    </a>

</header>


    
<section class="contact" id="contact">

<h1 class="heading"> <span>Add Room</span> Category </h1>

<div class="row">
<form action="" method="post" name="room_category">
                <div class="form-group">
                    <label for="roomname">Room Type Name:</label>
                    <input type="text" class="inputBox" name="roomname" placeholder="super delux" required>
                </div>
                 <div class="form-group" class="qty">
                    <label for="qty">No of Rooms:</label>&nbsp;
                    <select name="room_qnty" class="val">
                      <option value="1" class="value">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                       <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="bed">No of Bed:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="no_bed">
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="bedtype">Bed Type:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <select name="bedtype">
                      <option value="single">single</option>
                      <option value="double">double</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="Facility">Facility</label>
                    <textarea class="inputBox" rows="5" name="facility"></textarea>
                </div>
                <br>
               <div class="form-group">
                    <label for="price">Price Per Night:</label>
                    <input type="text" class="inputBox" name="price" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Room">Add</button>

               <br>
                <div id="click_here">
                    <a href="../admin.php"  class="btn">Back to Admin Panel</a>
                </div>


            </form>

   
</div>

</section>


</body>

</html>