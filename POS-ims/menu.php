<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ims_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <!-- <div class="top-nav">
            <input type="search" name="search" id="search" placeholder="Search">
        </div> -->
        <div class="bot-nav">
            <h3>Categories</h3>
            <div class="category-container">
                <ul>
                    <li><button>All</button></li>
                    <li><button>cat1</button></li>
                    <li><button>cat2</button></li>
                    <li><button>cat3</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="menu-container">
        <div class="menu">
            <div class="menu-image">

            </div>
            <div class="menu-detail">
                <h3>Item 1</h3>
                <p>₱ 10.99</p>
            </div>
            <div class="menu-btn">
                <button id="subtract">-</button>
                <input type="text">
                <button id="add">+</button>
            </div>
        </div>

        <div class="menu">
            <div class="menu-image">

            </div>
            <div class="menu-detail">
                <h3>Item 2</h3>
                <p>₱ 12.99</p>
            </div>
            <div class="menu-btn">
                <button id="subtract">-</button>
                <input type="text">
                <button id="add">+</button>
            </div>
        </div>

        <div class="menu">
            <div class="menu-image">

            </div>
            <div class="menu-detail">
                <h3>Item 3</h3>
                <p>₱ 8.99</p>
            </div>
            <div class="menu-btn">
                <button id="subtract">-</button>
                <input type="text">
                <button id="add">+</button>
            </div>
        </div>

        <div class="menu">
            <div class="menu-image">

            </div>
            <div class="menu-detail">
                <h3>Item 4</h3>
                <p>₱ 5.99</p>
            </div>
            <div class="menu-btn">
                <button id="subtract">-</button>
                <input type="text">
                <button id="add">+</button>
            </div>
        </div>

        <div class="menu">
            <div class="menu-image">

            </div>
            <div class="menu-detail">
                <h3>Item 5</h3>
                <p>₱ 15.99</p>
            </div>
            <div class="menu-btn">
                <button id="subtract">-</button>
                <input type="text">
                <button id="add">+</button>
            </div>
        </div>

        <div class="menu">
            <div class="menu-image">

            </div>
            <div class="menu-detail">
                <h3>Item 6</h3>
                <p>₱ 12.99</p>
            </div>
            <div class="menu-btn">
                <button id="subtract">-</button>
                <input type="text">
                <button id="add">+</button>
            </div>
        </div>

        <div class="menu">
            <div class="menu-image">

            </div>
            <div class="menu-detail">
                <h3>Item 7</h3>
                <p>₱ 10.99</p>
            </div>
            <div class="menu-btn">
                <button id="subtract">-</button>
                <input type="text">
                <button id="add">+</button>
            </div>
        </div>

        <div class="menu">
            <div class="menu-image">

            </div>
            <div class="menu-detail">
                <h3>Item 8</h3>
                <p>20.99</p>
            </div>
            <div class="menu-btn">
                <button id="subtract">-</button>
                <input type="text">
                <button id="add">+</button>
            </div>
        </div>
    </div>

    <script src="menu.js"></script>
</body>
</html>