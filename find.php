<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="rooms.css">
  <link rel="stylesheet" href="nav.css">

</head>
<body>
<?php
    include'navbar.php';
  ?>
    <h1>Find a room</h1>
    <h2>Search Rooms</h2>
    <form action="/action_page.php" >
        <div class="top">
    <input type="text" placeholder="Enter Location..." name="search">
        <select name="price">
            <option value=""disabled selected hidden>Select Price range</option>
        <option value="1">1,000-3,000</option>
        <option value="2">4,000-7,000</option>
        <option value="3">  8,000-12,000</option>
        <option value="4">13,000-16,000</option>
        <option value="5">17,000-23,000</option>
        <option value="6"> 24,000-30,000</option>
      </select>
      
      <button class="btn1">Search</button>
    </div>

    </form>
        
<div class="rooms">
  <div class="row">
    <div class="col">
        <table>
            <tr>
                <td align="center"> <img src="img/room7.png">
                    <p><button type="submit" class="choice">Details</button>
                        <button type="submit" class="choice">Book</button></p>
                </td>
                <td align="center"> <img src="img/room6.png">
                    <p><button type="submit" class="choice"> Details</button>
                        <button type="submit" class="choice">Book</button></p>
                </td>
                <td align="center"> <img src="img/room1.jpg">
                    <p><button type="submit" class="choice"> Details</button>
                        <button type="submit" class="choice">Book</button></p>
                </td>
            </tr>

            <tr>
                <td align="center"> <img src="img/room5.jpg">
                    <p><button type="submit" class="choice"> Details</button>
                        <button type="submit" class="choice">Book</button></p>
                </td>
                <td align="center"> <img src="img/room-9.jpg">
                    <p><button type="submit" class="choice"> Details</button>
                        <button type="submit" class="choice">Book</button></p>
                </td>
                <td align="center"> <img src="img/room2.jpg">
                    <p><button type="submit" class="choice"> Details</button>
                        <button type="submit" class="choice">Book</button></p>
                </td>
            </tr>
                <tr>
                <td align="center"> <img src="img/room3.jpg">
                    <p><button type="submit" class="choice"> Details</button>
                        <button type="submit" class="choice">Book</button></p>
                    </td>
                    <td align="center"> <img src="img/room4.jpg">
                      <p><button type="submit" class="choice"> Details</button>
                          <button type="submit" class="choice">Book</button></p>
                </td>
                <td align="center"> <img src="img/room8.jpg">
                  <p><button type="submit" class="choice"> Details</button>
                      <button type="submit" class="choice">Book</button></p>
                      </td>
            </tr>
        </table>
    </div>
  </div>
</div>
</body>

</html>