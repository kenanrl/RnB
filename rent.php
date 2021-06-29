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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-rent.css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Rent</title>
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
                        <a href="editprofile.php"><i class="far fa-user-circle"></i> <?php echo "" . $_SESSION['username'] . ""; ?></a>
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

</body>

</html>