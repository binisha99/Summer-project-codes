<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <<link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/sell.css">
    </head>
    <body>
    <?php
    include'navbar.php';
  ?>
        <main>
      
        <section id="contact">
  
            <h1 class="section-header">Your Details</h1>
            
            <div class="contact-wrapper">
        <div class="container">
        <form action="action_page.php">
            <div class="row">
                <div class="col-30">
            <label>NAME</label><br>
            </div>
            <div class="col-75">
            <input type="text" id="ownerName" placeholder="Enter your full Name">
</div>
</div>
<div class="row">
    <div class="col-30">
            <label>EMAIL</label>
        </div>
        <div class="col-75">
            <input type="email" id="ownerEmail" placeholder="Enter your email address"> 
           </div>
           </div>
           <div class="row">
               <div class="col-30">
            <label>PHONE</label>
        </div>
        <div class="col-75">
            <input type="tel" id="ownerPhone" placeholder="Enter your Phone Number">
        </div>
    </div>
    <div class="row">
        <div class="col-30">
            <label>LOCATION</label>
            </div>
            <div class="col-75">
            <input type="text" id="roomLocation" placeholder="Enter Location">
        </div>
    </div>
    <div class="row">
        <div class="col-30">
            <label>PRICE OF THE ROOM</label>
            </div>
            <div class="col-75">
            <input type="text" id="price" placeholder="Enter the price for room">
        </div>
    </div>
    <div class="row">
        <div class="col-30">
            <label>NUMBER OF ROOMS</label>
            </div>
            <div class="col-75">
            <input type="number" id="price" placeholder="Enter number of rooms to be listed">
        </div>
    </div>
    <div class="row">
        <div class="col-30">
            <label>REQUIREMENT</label>
            </div>
            <div class="col-75">
            <textarea id="requirement" placeholder="state your requirement for tenants" style="height:100px"></textarea>
        </div>
        <div class="row">
          <div class="col-30">
            <label>UPLOAD PHOTO OF ROOM</label>
            <input type="file" id="myFile" name="filename">
    </div>
    <div class="row">
       
            <button class="button">Post an Ad</button>
        </div>
        </div>
        </form>
        </div>
    </main>
        </body>
        </html>