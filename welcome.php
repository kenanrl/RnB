<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>

    <div class="wrapper">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><a href="welcome.php">R&B</a></div>
                <ul class="links">
                    <li><a href="rent.php">Rent</a>
                    <ul>
                            <li><a style="font-size: 15px;" href="add-item.php">Add Item</a></li>
                            <li><a style="font-size: 15px;" href="rent.php">Rent Item</a></li>
                        </ul>
                    </li>
                    <li><a href="borrow.php">Borrow</a>
                    <ul>
                            <li><a style="font-size: 15px;" href="borrow.php">Borrow Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="far fa-user-circle"></i> <?php echo "" . $_SESSION['username'] . ""; ?></a>
                        <ul>
                            <li><a style="font-size: 15px;" href="editprofile.php">Edit Profile</a></li>
                            <li><a style="font-size: 15px;" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
        </nav>
    </div>

    <div class="container">
       
        <div class="card">
            <img src="bike-preview.jpeg">
            <h4>Bicycle</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <h3>Rp. 20.000/day</h3>
            <h2> <i class="fas fa-map-marker-alt"></i> Jakarta Selatan</h2>
        </div>
        
        <div class="card">
            <img src="bike-preview.jpeg">
            <h4>Bicycle</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <h3>Rp. 20.000/day</h3>
            <h2> <i class="fas fa-map-marker-alt"></i> Jakarta Selatan</h2>
            
        </div>
        
        <div class="card">
            <img src="bike-preview.jpeg">
            <h4>Bicycle</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <h3>Rp. 20.000/day</h3>
            <h2> <i class="fas fa-map-marker-alt"></i> Jakarta Selatan</h2>            
        </div>

        <div class="card">
            <img src="ps5.jpg">
            <h4>Playstation 5</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <h3>Rp. 50.000/day</h3>
            <h2> <i class="fas fa-map-marker-alt"></i> Jakarta Utara</h2>
            
        </div>
        
        <div class="card">
            <img src="ps5.jpg">
            <h4>Playstation 5</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <h3>Rp. 50.000/day</h3>
            <h2> <i class="fas fa-map-marker-alt"></i> Jakarta Utara</h2>
            
        </div>
        
        <div class="card">
            <img src="ps5.jpg">
            <h4>Playstation 5</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <h3>Rp. 50.000/day</h3>
            <h2> <i class="fas fa-map-marker-alt"></i> Jakarta Utara</h2>            
        </div>

        <div class="card">
            <img src="scoopy.jpg">
            <h4>Honda Scoppy</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <h3>Rp. 150.000/day</h3>
            <h2> <i class="fas fa-map-marker-alt"></i> Jakarta Timur</h2>
            
        </div>
        
        <div class="card">
            <img src="scoopy.jpg">
            <h4>Honda Scoppy</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <h3>Rp. 150.000/day</h3>
            <h2> <i class="fas fa-map-marker-alt"></i> Jakarta Timur</h2>
            
        </div>
        
        <div class="card">
            <img src="scoopy.jpg">
            <h4>Honda Scoppy</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
            <h3>Rp. 150.000/day</h3>
            <h2> <i class="fas fa-map-marker-alt"></i> Jakarta Timur</h2>            
        </div>
        
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <p class="end">You've reach the end.</p>

    <br>

    <footer class="footer">
  	 <div class="containers">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>R&B</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">career</a></li>
  	 				<li><a href="#">blog</a></li>  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Guide and Help</h4>
  	 			<ul>
  	 				<li><a href="#">R&B Care</a></li>
  	 				<li><a href="#">Terms and Condition</a></li>
  	 				<li><a href="#">privacy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>contact us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>   
  	 			</div>
  	 		</div>

            <div class="copyright">
                <img src="copyright.png" width="250">
                <p style="margin-top: -10px; margin-right: 37px;" class="copyright">© 2021 , PT. Errai Pasifik.</p>
            </div> 
  	 	</div>
  	 </div>
  </footer>
</body>

</html>