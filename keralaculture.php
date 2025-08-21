<!DOCTYPE html>

<html lang="en" dir="ltr">

   <head>
      <meta charset="utf-8">
      <title>Kerala Cultural Website</title>
	  <link rel="icon" type="image/png" href="palm_tree3.png"/>
      <link rel="stylesheet" href="mystyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Noto+Serif+Malayalam:wght@500&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#.headerWrap {
  background: #ffffff;
  position: relative;
}

/* Trying to use this to mask the overflow */
.headerWrap:after {
  position: absolute;
  display: block;
  content: "";
  bottom: 0;
  left: 35%;
  right: 0;
  padding-left:10px;
}

.header {
  margin: 0 auto 24px;
  text-align: left;
  font-weight: bold;
  position: relative;
  padding-bottom: 10px;
  color: #012169;
  border-bottom: 2px solid #C8102E;
  position: relative;
}

.header:before {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  display: block;
  margin-bottom: 2px;
  content: "";
  border-bottom: 6px solid #C8102E;
}
.btn {
  background: #012169;
  background-image: -webkit-linear-gradient(top, #012169, #012169);
  background-image: -moz-linear-gradient(top, #012169, #012169);
  background-image: -ms-linear-gradient(top, #012169, #012169);
  background-image: -o-linear-gradient(top, #012169, #012169);
  background-image: linear-gradient(to bottom, #012169, #012169);
  -webkit-border-radius: 21;
  -moz-border-radius: 21;
  border-radius: 21px;
  text-shadow: 0px 7px 14px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #C8102E;
  background-image: -webkit-linear-gradient(top, #C8102E, #C8102E);
  background-image: -moz-linear-gradient(top, #C8102E, #C8102E);
  background-image: -ms-linear-gradient(top, #C8102E, #C8102E);
  background-image: -o-linear-gradient(top, #C8102E, #C8102E);
  background-image: linear-gradient(to bottom, #C8102E, #C8102E);
  text-decoration: none;
}
.card-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px; /* Adjust gap between cards as needed */
  padding: 0 20px; /* Add padding to create white space on the left and right ends */
  max-width: 1200px; /* Set maximum width of card container */
  margin: 0 auto; /* Center the card container */
}
.card:hover {
  box-shadow: 0 4px 6px rgba(200, 16, 46, 0.3);
}
.link-text {
  
  color: #012169; 
  cursor: pointer;
  text-decoration: none; /* Remove underline */
}

.link-text:hover {
  
  color: #C8102E; /* Change to desired hover color */
}
a {
  text-decoration: none; /* Remove underline */
}

.card {
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  margin-bottom: 20px;
  display: flex;
  flex-direction: column;
  transition: box-shadow 0.2s ease-in-out;
  position: relative;
}


.card-image {
  flex: 0 0 35%;
  overflow: hidden;
  border-radius: 10px 10px 0 0;
}

.card-image img {
  object-fit: cover;
  width: 100%;
  height: 100%;
}

.card-content {
  padding: 15px;
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.card-content h3 {
  margin-top: 10px;
}

.card-content p {
  margin-top: 5px;
  font-size: 14px;
}

.card-title {
  font-size: 20px; /* Set font size for card title */
  margin-bottom: 10px; /* Add margin between title and description */
}

.card-description {
  font-size: 16px; /* Set font size for card description */
  color: #777; /* Set color for card description */
}
.location-para {
  font-size: 18px;
  display: flex;
  align-items: center;
  justify-content: center; /* Center horizontally */
}

.fas.fa-map-marker-alt {
  color: red;
  margin-right: 5px;
}

.location-text {
  color: #777; /* Font color */
}
 #map {
        height: 400px;
        width: 100%;
		position: relative;
        right:5%;
		left: 5%;
      }
	  .district-cards {
  display: flex;
  justify-content: center;
  align-items: center;
  overflow-x: auto;
  margin: 0 15%;
}
.card-container1 {
  display: flex;
  justify-content: space-between;
}
#prevBtn {
background-color: transparent;
  border: none;
  padding: 10px;
  cursor: pointer;
color: blue; 
  font-size: 28px;
   display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0 auto;
  max-width: 300px;
}
#nextBtn {

background-color: transparent;
  border: none;
  padding: 10px;
  cursor: pointer;
  color: blue; 
  font-size: 28px;
   display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0 auto;
  max-width: 300px;

}

.card1 {
  width: 240px;
  height: 300px;
  border-radius: 10px;
  margin: 0 auto;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  background-color: #FFFFFF;
  display: none;
}
.card1 h3 {
color: #012169;
text-align: center;

}
.card1 button {
background-color: transparent;
  border: none;
  padding: 10px;
  cursor: pointer;
  color: #C8102E; 
  font-size: 18px;
   display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0 auto;
  max-width: 300px;

}
.active1 {
 display: block;
}


</style>
	  
   </head>

   <body>
   <header>
       <nav id="navbar">
	  
         <div class="logo" style="font-family: 'Noto Serif Malayalam', serif; font-size:10px">
		 <img src="image2.png" style="filter: invert(97%) sepia(30%) saturate(342%) hue-rotate(139deg) brightness(103%) contrast(109%);" alt="Logo" width="100" height="80">
                       കേരള സംസ്കാരം.......
					   
         </div>
         <input type="checkbox" id="click" />
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a class="active">Home</a></li>
            <li><a href="Historyofkerala.html">History</a></li>
            <li><a href="festivalofkerala.html">Festivals</a></li>
            <li><a href="artformofkerala.html">Artforms</a></li>
            <li><a href="cuisinesofkerala.html">Cuisines</a></li>
			<li><a href="wheninkerala.html">When in Kerala </a></li>
            <li><a href="wheninuk.html">Souvenir</a></li>
		    
		 </ul>
      </nav>
	  </header>
	  <div id="ww_c7a3338751b31" v='1.3' loc='id' a='{"t":"ticker","lang":"en","sl_lpl":1,"ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>Weather Data Source: <a href="https://sharpweather.com/weather_london/week/" id="ww_c7a3338751b31_u" target="_blank">weather 7 days London</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_c7a3338751b31"></script>
	  
	  <div style="width: 100%; background-color:#C8102E;" >
         <div id="image">
  
            <img id="boatimage" src=""  alt="houseboat" align ="left" width="60%" height="400px">
         </div>
		 
		 <div align = "center" style="background-color:#87CEFA;font-size:15px; font-family:sans; font-weight:bold;border-color:#012169">
		 <p>Accessing from:</p>
		 <p id="region-country" style="display: inline-block; font-size:20px; font-family:sans; font-weight:bold;"></p>
         <img id="country-flag" src=""  height="20px" style="display: inline-block;vertical-align: middle; padding:2px;">
		 
		 </div>
		<div class="clock-container">
		
          <div class="clock"></div>
        </div>
		
		 
</div>

	     
<script>
// Get the user's location using the Geolocation API
/*
iplocation.com
iplocation.net 
geoplugin
iplocation.io
*/
fetch('https://ipapi.co/json/')
  .then(response => response.json())
  .then(data => {
    const region = data.region;
    const country = data.country_name;
    const regionCountry = `${region}, ${country}`;
    document.getElementById('region-country').innerText = regionCountry;
	var flagcountry= document.getElementById('country-flag');
	if(country == "United Kingdom")
	{
	flagcountry.src="englandflag.png";
	}
	else {
	console.log("No flag found")
	}
  })
  .catch(error => console.error('Error:', error));
  
function updateTime() {
	
  const now = new Date();
  const hours = now.getHours().toString().padStart(2, '0');
  const minutes = now.getMinutes().toString().padStart(2, '0');
  const seconds = now.getSeconds().toString().padStart(2, '0');
  const dateString = now.toDateString();
  const timeString = `${hours}:${minutes}:${seconds}`;
  document.querySelector('.clock').textContent = `${dateString} ${timeString}`;
}

setInterval(updateTime, 1000);

</script>
		 
	   	
	   <marquee style="color:#ffffff;background-color:#C8102E;
 
 border-color:#012169 ;
 border-width: thick;
 border-style: groove;
 border-style: inset;
 padding: 2px;">Good <span id="myText"></span> </marquee>
	   <script>
var img = document.getElementById('boatimage');
var now = new Date();
var hour = now.getHours();
var day = now.getDay();
const start= new Date('2023-03-24');
const end=new Date('2023-10-29');
var value="";
console.log("HI");

//summer season
if (hour < 12 && day > start && day < end) {
  // Display morning image
  img.src = "englandmorning.jpg";
  value+="Morning";
} else if (hour < 18 && day > start && day < end) {
  // Display afternoon image
  img.src = "englanddawn.jpg";
  value+="Afternoon";
} else if(day > start && day < end){
  // Display evening image
  img.src = "englandnight.jpg";
  value+="Evening";
}

//winter season
   else if (hour < 12) {
  // Display morning image
  img.src = "englandwintermorning.jpg";
  value+="Morning";
} else if (hour < 18) {
  // Display afternoon image
  img.src = "englandwinterdawn.jpg";
  value+="Afternoon";
} else {
  // Display evening image
  img.src = "englandwinternight.jpg";
  value+="Evening";
}

console.log(value);
document.getElementById("myText").innerHTML = value;



</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALiZDdtw5v44fsCV0Vd6FrTh6LYRGm-v0&callback=initMap"></script>
 
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script src="https://widgets.skyscanner.net/widget-server/js/loader.js" async></script>
<br></br>
<div class="headerWrap">
 <h1 class="header" style="margin-left:10%; width:25%;white-space: nowrap;">About Kerala</h1>  
 
 </div>
<p id="para1" style=" font-size:20px; padding-right: 20%; padding-left: 20%;"> 
<?php
// Connect to MySQL database
$servername = "localhost";
$username = "cottb";
$password = "NFvAHBDib4";
$dbname = "cottb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors with database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user's preferred language
$preferred_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Map preferred language code to database column name
$column_name = "";
switch ($preferred_lang) {
    case "en":
        $column_name = "English";
	break;
    case "ml":
        $column_name = "Malayalam";
	echo '<script>document.getElementById("para1").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>';  
    echo '<script>document.getElementById("para2").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>';  
    echo '<script>document.getElementById("para3").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>'; 
    echo '<script>document.getElementById("para4").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>'; 	
        break;
    case "ja":
        $column_name = "Japanese";
		echo '<script>document.getElementById("para1").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>';  
    echo '<script>document.getElementById("para2").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>';  
    echo '<script>document.getElementById("para3").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>'; 
    echo '<script>document.getElementById("para4").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>'; 	
	 
        break;       

    default:
        $column_name = "English"; // Default to English if preferred language is not supported
}
// Retrieve translation from MySQL database based on preferred language
$sql = "SELECT " . $column_name . " FROM `Page Translation` WHERE Paragraph_no BETWEEN '1' AND '4'";

// execute the SQL command
$result = mysqli_query($conn, $sql);

// check if there are any results
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 1;
    while($row = mysqli_fetch_assoc($result)) {
        ${"para" . $i} = $row[$column_name];
        $i++;
    }
} else {
    echo "0 results";
}

echo "$para1'";


// close the database connection
mysqli_close($conn);
?>
</p>
<br></br>
 <div class="headerWrap">
 <h1 class="header" style="margin-left:10%; width:30%;white-space: nowrap;">Why called God's Own Country</h1>  
 
 </div>
 <p id ="para2" style=" font-size:20px; padding-right: 20%; padding-left: 20%;">
  <?php
// Connect to MySQL database
$servername = "localhost";
$username = "cottb";
$password = "NFvAHBDib4";
$dbname = "cottb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors with database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user's preferred language
$preferred_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Map preferred language code to database column name
$column_name = "";
switch ($preferred_lang) {
    case "en":
        $column_name = "English";
	break;
    case "ml":
        $column_name = "Malayalam";
	echo '<script>document.getElementById("para1").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>';  
    echo '<script>document.getElementById("para2").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>';  
    echo '<script>document.getElementById("para3").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>'; 
    echo '<script>document.getElementById("para4").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>'; 	
        break;
    case "ja":
        $column_name = "Japanese";
		echo '<script>document.getElementById("para1").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>';  
    echo '<script>document.getElementById("para2").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>';  
    echo '<script>document.getElementById("para3").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>'; 
    echo '<script>document.getElementById("para4").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>'; 	
	 
        break;       

    default:
        $column_name = "English"; // Default to English if preferred language is not supported
}
// Retrieve translation from MySQL database based on preferred language
$sql = "SELECT " . $column_name . " FROM `Page Translation` WHERE Paragraph_no BETWEEN '1' AND '4'";

// execute the SQL command
$result = mysqli_query($conn, $sql);

// check if there are any results
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 1;
    while($row = mysqli_fetch_assoc($result)) {
        ${"para" . $i} = $row[$column_name];
        $i++;
    }
} else {
    echo "0 results";
}

echo "$para2'";


// close the database connection
mysqli_close($conn);
?>
</p>
 <br></br>
 <div class="headerWrap">
 <div style="display: flex; justify-content: space-between; align-items: center;">
  <h1 class="header" style="margin-left: 10%; width: 20%; white-space: nowrap;">What to Experience?</h1>
  <button class="btn" style="margin-right: 10%;">View All</button>
</div>
 
 </div>
 <br> </br>
 <div class="card-container">
  <div class="card">
    <div class="card-image">
      <img src="backwaters.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
	<p class="location-para">
  <i class="fas fa-map-marker-alt"></i>
  <span class="location-text">Kumarakom</span>
</p>
      <h3 class="card-title">Allepy Backwater Cruise</h3> 
      <p class="card-description"> Starting from </p>
	  <div class="learn-more">
	   <h2 class="card-title">200 GBP </h2> 
	  <a href="https://www.keralatourism.org/kerala-food/appam-chicken-stew/88">
	  <span class="link-text">Book now  </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-image">
      <img src="fortkathak.jpg" alt="Image 1">
    </div>
    <div class="card-content">
	<p class="location-para">
  <i class="fas fa-map-marker-alt"></i>
  <span class="location-text">Fort Kochi</span>
</p>
      <h3 class="card-title">Fort Cochin Entrance and Kathakali Dance</h3>
     <p class="card-description"> Starting from </p>
	  <div class="learn-more">
	   <h2 class="card-title">3 GBP</h2> 
	  <a href="https://www.keralatourism.org/kerala-food/iddli-breakfast-dish/168">
      <span class="link-text">Book now </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-image">
      <img src="ayurveda.jpg" alt="Image 2">
    </div>
    <div class="card-content">
	<p class="location-para">
  <i class="fas fa-map-marker-alt"></i>
  <span class="location-text">Kovalam</span>
</p>
      <h3 class="card-title">Ayurveda Treatment and Rejuvenation</h3>
      <p class="card-description"> Starting from </p>
	  <div class="learn-more">
	   <h2 class="card-title">30 GBP</h2> 
	  <a href="https://www.keralatourism.org/kerala-food/rava-upma/170">
      <span class="link-text">Book now </span>
	 
      <span>&gt;</span>
	   </a>
    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-image">
      <img src="munnar.jpg" alt="Image 2">
    </div>
    <div class="card-content">
	<p class="location-para">
  <i class="fas fa-map-marker-alt"></i>
  <span class="location-text">Munnar</span>
</p>
      <h3 class="card-title">Munnar Tea Garden Tour</h3>
      <p class="card-description"> Starting from </p>
	  <div class="learn-more">
	   <h2 class="card-title"> 12 GBP</h2> 
	  <a href="https://www.pachakam.com/recipes/kappa-meen-curry-fish-curry">
      <span class="link-text">Book now </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
  </div>
 <div class="headerWrap">
 <h1 class="header" style="margin-left:10%; width:20%;white-space: nowrap;">Traditional Dishes</h1>  
 
 </div>
<div style="position: relative; height: 400px; width: 100%;">
  <img src="foodbg.jpg" alt="food" style="width: 100%; height: 100%; object-fit: cover;">
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; flex-direction: column;">
 <h1 style="color: #ffffff; text-align: left; margin-left: 0; padding-left: 10%;">Food and Beverages</h1>
    <p id = "para3" style="color: #ffffff; font-size: 18px; padding-left: 10%;"> 
	 <?php
// Connect to MySQL database
$servername = "localhost";
$username = "cottb";
$password = "NFvAHBDib4";
$dbname = "cottb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors with database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user's preferred language
$preferred_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Map preferred language code to database column name
$column_name = "";
switch ($preferred_lang) {
    case "en":
        $column_name = "English";
	break;
    case "ml":
        $column_name = "Malayalam";
	echo '<script>document.getElementById("para1").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>';  
    echo '<script>document.getElementById("para2").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>';  
    echo '<script>document.getElementById("para3").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>'; 
    echo '<script>document.getElementById("para4").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>'; 	
        break;
    case "ja":
        $column_name = "Japanese";
		echo '<script>document.getElementById("para1").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>';  
    echo '<script>document.getElementById("para2").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>';  
    echo '<script>document.getElementById("para3").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>'; 
    echo '<script>document.getElementById("para4").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>'; 	
	 
        break;       

    default:
        $column_name = "English"; // Default to English if preferred language is not supported
}
// Retrieve translation from MySQL database based on preferred language
$sql = "SELECT " . $column_name . " FROM `Page Translation` WHERE Paragraph_no BETWEEN '1' AND '4'";

// execute the SQL command
$result = mysqli_query($conn, $sql);

// check if there are any results
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 1;
    while($row = mysqli_fetch_assoc($result)) {
        ${"para" . $i} = $row[$column_name];
        $i++;
    }
} else {
    echo "0 results";
}

echo "$para3'";


// close the database connection
mysqli_close($conn);
?>
	</p>
<div>
  <button class="btn" style="padding-left: 10%; white-space: nowrap;">Learn more</button>
</div>
  </div>
</div>
 <div class="headerWrap">
 <h1 class="header" style="margin-left:10%; width:15%;white-space: nowrap;">Explore Kerala</h1>  
 
 
 </div>
 <div id="map"></div>
 
 
<div class="card-container1">
<div class="card1 active1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Kasaragod</h3> 
	  <button id="KasaragodBtn">Map View</button>
	  <div class="learn-more">
    </div>
    </div>
  </div>

  <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Kannur</h3> 
	  <button id="KannurBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
    
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Thiruvananthapuram</h3> 
	  <button id="thiruvananthapuramBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Wayanad</h3> 
	  <button id="WayanadBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Kozhikode</h3> 
	  <button id="KozhikodeBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Kollam</h3> 
	  <button id="kollamBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Thrissur</h3> 
	  <button id="ThrissurBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Kottayam</h3> 
	  <button id="KottayamBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Palakkad</h3> 
	  <button id="PalakkadBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Malappuram</h3> 
	  <button id="MalappuramBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Idukki</h3> 
	  <button id="IdukkiBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Ernakulam</h3> 
	  <button id="ErnakulamBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Alappuzha</h3> 
	  <button id="AlappuzhaBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
   <div class="card1">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Pathanamthitta</h3> 
	  <button id="pathanamthittaBtn">Map View</button>
	  <div class="learn-more">

    </div>
    </div>
  </div>
</div>
<button id="prevBtn">&lt;</button>
<button id="nextBtn">&gt;</button>


<script>
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const cards = document.querySelectorAll('.card1');

let currentCardIndex = 0;

nextBtn.addEventListener('click', () => {
  cards[currentCardIndex].classList.remove('active1');
  currentCardIndex++;

  if (currentCardIndex >= cards.length) {
    currentCardIndex = 0;
  }

  cards[currentCardIndex].classList.add('active1');
});

prevBtn.addEventListener('click', () => {
  cards[currentCardIndex].classList.remove('active1');
  currentCardIndex--;

  if (currentCardIndex < 0) {
    currentCardIndex = cards.length - 1;
  }

  cards[currentCardIndex].classList.add('active1');
});

 </script>


 

  <script>
      function initMap() {
        const kerala = { lat: 10.8505, lng: 76.2711 };
		
		const thiruvananthapuram = { lat: 8.5241, lng: 76.9366 };
        const kollam = { lat: 8.8932, lng: 76.6141 };
        const pathanamthitta ={ lat: 9.2648, lng: 76.7873 };
        const Alappuzha ={ lat: 9.498, lng: 76.3388 };
        const Kottayam ={ lat: 9.591, lng: 76.5222 };
        const Idukki ={ lat: 9.8498, lng: 76.9720 };
        const Ernakulam ={ lat: 10.0469, lng: 76.4007 };
        const Thrissur ={ lat: 10.5276, lng: 76.2144 };
        const Palakkad ={ lat: 10.7867, lng: 76.6548 };
        const Malappuram ={ lat: 11.073, lng: 76.074};
        const Kozhikode ={ lat: 11.2588, lng: 75.7804 };
        const Wayanad ={ lat: 11.6870, lng: 76.0830 };
        const Kannur ={ lat: 11.8760, lng: 75.3738 };
        const Kasaragod ={ lat: 12.5025, lng: 74.9896 };
		
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 7,
          center: kerala,
        });
		
		
       const thiruvananthapuramMarker = new google.maps.Marker({
          position: thiruvananthapuram,
          map: map,
          title: "Thiruvananthapuram",
        });
		
		const kollamMarker = new google.maps.Marker({
          position: kollam,
          map: map,
          title: "Kollam",
        });
		
		const pathanamthittaMarker = new google.maps.Marker({
          position: pathanamthitta,
          map: map,
          title: "Pathanamthitta",
        });
		
		const AlappuzhaMarker = new google.maps.Marker({
          position: Alappuzha,
          map: map,
          title: "Alappuzha",
        });
		
		const KottayamMarker = new google.maps.Marker({
          position: Kottayam,
          map: map,
          title: "Kottayam",
        });
		
		const IdukkiMarker = new google.maps.Marker({
          position: Idukki,
          map: map,
          title: "Idukki",
        });
		
		const ErnakulamMarker = new google.maps.Marker({
          position: Ernakulam,
          map: map,
          title: "Ernakulam",
        });
		
		const ThrissurMarker = new google.maps.Marker({
          position: Thrissur,
          map: map,
          title: "Thissur",
        });
		const PalakkadMarker = new google.maps.Marker({
          position: Palakkad,
          map: map,
          title: "Palakkad",
        });
		const MalappuramMarker = new google.maps.Marker({
          position: Malappuram,
          map: map,
          title: "Malappuram",
        });
		const KozhikodeMarker = new google.maps.Marker({
          position: Kozhikode,
          map: map,
          title: "Kozhikode",
        });
		const WayanadMarker = new google.maps.Marker({
          position: Wayanad,
          map: map,
          title: "Wayanad",
        });
		const KannurMarker = new google.maps.Marker({
          position: Kannur,
          map: map,
          title: "Kannur",
        });
		const KasaragodMarker = new google.maps.Marker({
          position: Kasaragod,
          map: map,
          title: "Kasaragod",
        });
		
		  document.getElementById("thiruvananthapuramBtn").addEventListener("click", function() {
    map.setCenter(thiruvananthapuramMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("kollamBtn").addEventListener("click", function() {
    map.setCenter(kollamMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("pathanamthittaBtn").addEventListener("click", function() {
    map.setCenter(pathanamthittaMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("AlappuzhaBtn").addEventListener("click", function() {
    map.setCenter(AlappuzhaMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("KottayamBtn").addEventListener("click", function() {
    map.setCenter(KottayamMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("IdukkiBtn").addEventListener("click", function() {
    map.setCenter(IdukkiMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("ErnakulamBtn").addEventListener("click", function() {
    map.setCenter(ErnakulamMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("ThrissurBtn").addEventListener("click", function() {
    map.setCenter(ThrissurMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("PalakkadBtn").addEventListener("click", function() {
    map.setCenter(PalakkadMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("MalappuramBtn").addEventListener("click", function() {
    map.setCenter(MalappuramMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("KozhikodeBtn").addEventListener("click", function() {
    map.setCenter(KozhikodeMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("WayanadBtn").addEventListener("click", function() {
    map.setCenter(WayanadMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("KannurBtn").addEventListener("click", function() {
    map.setCenter(KannurMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  document.getElementById("KasaragodBtn").addEventListener("click", function() {
    map.setCenter(KasaragodMarker.getPosition());
    map.setZoom(10); // Adjust the zoom level as desired
  });
  
   if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var userLocation = {lat: position.coords.latitude, lng: position.coords.longitude};
                    var map = new google.maps.Map(document.getElementById('maps'), {
                        zoom: 14,
                        center: userLocation
                    });
                    var marker = new google.maps.Marker({
                        position: userLocation,
                        map: map
                    });
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
      }

initMap();
      
    </script>
	<div class="headerWrap">
 <h1 class="header" style="margin-left:10%;width:15%;white-space: nowrap;">Latest news</h1>  
 
 </div>
 <rssapp-wall id="HLySG9tvWYdNsTyK"></rssapp-wall><script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script> <div class="headerWrap">
 <h1 class="header" style="margin-left:10%; width: 22% ;white-space: nowrap;">Things to do nearby</h1>  
 <div id="maps" style="width:100%;height:500px;"></div>
 <div class="card-container">
  <div class="card">
    <div class="card-image">
      <img src="keralarestaurant.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title"> Kerala Restaurants nearby</h3> 
	  <div class="learn-more">
	   
	  <a href="https://www.google.com/search?tbs=lf:1,lf_ui:9&tbm=lcl&q=kerala+restaurants+in+uk&rflfq=1&num=10&ved=2ahUKEwjUjo3-q9j-AhVNQEEAHbYXBJAQtgN6BAgQEAI#rlfi=hd:;si:;mv:[[53.980621299999996,0.4994669],[50.5849471,-3.309293]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:9">
	  <span class="link-text">Search  </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
    <div class="card">
    <div class="card-image">
      <img src="keraladance.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Theater & Dance Performances</h3> 
	  <div class="learn-more">
	  
	  <a href="https://www.google.com/search?q=Kerala+Theatre+and+dance+performances+in+uk&tbm=lcl&ei=uedRZOvAFrOAhbIP_9CG4Ag&ved=0ahUKEwirgdGwrNj-AhUzQEEAHX-oAYwQ4dUDCAk&uact=5&oq=Kerala+Theatre+and+dance+performances+in+uk&gs_lcp=Cg1nd3Mtd2l6LWxvY2FsEAMyBQgAEKIEMgUIABCiBDoFCCEQoAE6CAghEBYQHhAdOgUIIRCSAzoECCEQFVDKBVjwGGDxG2gBcAB4AIABwQ2IAZ4lkgELMC41LjYtMi4xLjGYAQCgAQHAAQE&sclient=gws-wiz-local#rlfi=hd:;si:;mv:[[55.60576358410634,20.483619184390374],[48.392319794092266,-0.7419667531096237]]">
	  <span class="link-text">Search  </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-image">
      <img src="keralaayurveda.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Ayurvedic Clinic Nearby</h3> 
	  <div class="learn-more">
	  
	  <a href="https://www.google.com/search?q=Ayurvedic+treatment+in+Uk&tbm=lcl&ei=xudRZJ3_GYeJ8gLs0jA&ved=0ahUKEwid-u22rNj-AhWHhFwKHWwpDAAQ4dUDCAk&uact=5&oq=Ayurvedic+treatment+in+Uk&gs_lcp=Cg1nd3Mtd2l6LWxvY2FsEAMyBQgAEIAEMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yCAgAEIoFEIYDMggIABCKBRCGAzIICAAQigUQhgMyCAgAEIoFEIYDOgUIIRCgAToLCAAQigUQkQIQiwM6DggAEIAEELEDEIMBEIsDOg4IABCKBRCxAxCDARCLAzoRCAAQigUQsQMQgwEQkQIQiwM6DQgAEIoFELEDEEMQiwM6CggAEIoFEEMQiwM6CwgAEIAEELEDEIsDOgcIABCKBRBDOgoIABCKBRCxAxBDOg0IABCKBRCxAxCDARBDOggIABCABBCxAzoNCAAQigUQsQMQyQMQQzoICAAQgAQQkgM6DggAEIoFELEDEJECEIsDOgsIABCABBCxAxCDAToICAAQgAQQyQM6CAgAEIoFEJIDOggIABAWEB4QD1DTCliyUmD2VGgAcAB4AYAB8hiIAfRwkgEOMTMuNy4xLjUtMS45LTSYAQCgAQG4AQLAAQE&sclient=gws-wiz-local#rlfi=hd:;si:;mv:[[53.254473,0.0288893],[51.128162100000004,-2.1553546999999997]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!2m4!1e17!4m2!17m1!1e2!3sIAE,lf:1,lf_ui:2">
	  <span class="link-text">Search  </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
  </div>
 </div>

 <div class="headerWrap">
 <h1 class="header" style="margin-left:10%; width:20%;white-space: nowrap; ">Forgot Souvenirs?</h1>  
 
 </div>
 <div style="position: relative; height: 400px; width: 100%;">
  <img src="souvenirbg.jpg" alt="food" style="width: 100%; height: 100%; object-fit: cover;">
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); display: flex; justify-content: center; align-items: center; flex-direction: column;">
 <h1 style="color: #ffffff; text-align: left; margin-left: 0; padding-left: 10%;">Memories to remember</h1>
    <p id="para4" style="color: #ffffff; font-size: 18px; padding-left: 10%;">
	 <?php
// Connect to MySQL database
$servername = "localhost";
$username = "cottb";
$password = "NFvAHBDib4";
$dbname = "cottb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors with database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user's preferred language
$preferred_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Map preferred language code to database column name
$column_name = "";
switch ($preferred_lang) {
    case "en":
        $column_name = "English";
	break;
    case "ml":
        $column_name = "Malayalam";
	echo '<script>document.getElementById("para1").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>';  
    echo '<script>document.getElementById("para2").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>';  
    echo '<script>document.getElementById("para3").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>'; 
    echo '<script>document.getElementById("para4").style.fontFamily = "\'Noto Serif Malayalam\',serif";</script>'; 	
        break;
    case "ja":
        $column_name = "Japanese";
		echo '<script>document.getElementById("para1").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>';  
    echo '<script>document.getElementById("para2").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>';  
    echo '<script>document.getElementById("para3").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>'; 
    echo '<script>document.getElementById("para4").style.fontFamily = "\'Noto Sans Japanese\',sans";</script>'; 	
	 
        break;       

    default:
        $column_name = "English"; // Default to English if preferred language is not supported
}
// Retrieve translation from MySQL database based on preferred language
$sql = "SELECT " . $column_name . " FROM `Page Translation` WHERE Paragraph_no BETWEEN '1' AND '4'";

// execute the SQL command
$result = mysqli_query($conn, $sql);

// check if there are any results
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i = 1;
    while($row = mysqli_fetch_assoc($result)) {
        ${"para" . $i} = $row[$column_name];
        $i++;
    }
} else {
    echo "0 results";
}

echo "$para4'";


// close the database connection
mysqli_close($conn);
?></p>
<div>
  <button class="btn" style="padding-left: 10%; white-space: nowrap;">Buy Now</button>
</div>
  </div>
</div>
<br></br>
 <div class="headerWrap">
 <h1 class="header" style="margin-left:10%; width:22%;white-space: nowrap; ">Know before you go?</h1>  
 </div>
 <div class="card-container">
  <div class="card">
    <div class="card-image">
      <img src="keralabg.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">About Kerala</h3> 
	  <div class="learn-more">
	   
	  <a href="https://www.keralatourism.org/kerala-food/appam-chicken-stew/88">
	  <span class="link-text">Learn more  </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
    <div class="card">
    <div class="card-image">
      <img src="travel.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Safety Travel Tips</h3> 
	  <div class="learn-more">
	  
	  <a href="https://www.keralatourism.org/kerala-food/appam-chicken-stew/88">
	  <span class="link-text">Learn more  </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-image">
      <img src="contacts.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Useful Contacts</h3> 
	  <div class="learn-more">
	  
	  <a href="https://www.keralatourism.org/kerala-food/appam-chicken-stew/88">
	  <span class="link-text">Learn more  </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
  <div class="card">
    <div class="card-image">
      <img src="travelairport.jpg" alt="Image 1"> 
    </div>
    <div class="card-content">
      <h3 class="card-title">Travel regulation</h3> 
	  <div class="learn-more">
	  
	  <a href="https://www.keralatourism.org/kerala-food/appam-chicken-stew/88">
	  <span class="link-text">Learn more </span>
      <span>&gt;</span>
	  </a>
    </div>
    </div>
  </div>
  </div>

  <div
  data-skyscanner-widget="SearchWidget"
  data-locale="en-GB"
  data-market="UK"
  data-currency="GBP"
  data-font-colour="#012169"
  data-responsive="true"
  data-arrow-icon="true"
  data-colour="#C8102E"
  data-powered-by-logo-colour="dark"
  data-origin-name="London"
  data-destination-name="Kochi"
  data-button-colour="#012169"
></div>
  
  <div class="footer-section">
        <div class="footer-item">
            <h2 style="font-family: 'Noto Serif Malayalam', serif;">കേരള സംസ്കാരം.......</h2>
            <p><a href=""> About Us</a></p>
            <p><a href=""> Contact Us</a></p>
            <p><a href=""> Our Services</a></p>
            <p><a href=""> Privacy Policy</a></p>
        </div>
        <div class="footer-item">
            <h2>Get Help </h2>
            <p><a href=""> FAQ</a></p>
            <p><a href=""> Festivals </a></p>
            <p><a href=""> Places to Visit in Kerala </a></p>
            <p><a href=""> Places to Visit nearby  </a></p>
        </div>
        <div class="footer-item">
            <h2>Cuisines</h2>
            <p><a href=""> Breakfast </a></p>
            <p><a href=""> Lunch </a></p>
            <p><a href=""> Dinner </a></p>
            <p><a href=""> Snacks </a></p>
        </div>
        <div class="footer-item social" >
            <h2> Follow Us </h2>
            <ul style="font-size: 20px;">
                <li> <i class="fa fa-instagram"></i> </li>
                <li> <i class="fa fa-linkedin"></i> </li>
                <li> <i class="fa fa-youtube"></i> </li>
                <li> <i class="fa fa-twitter"></i> </li>
            </ul>
        </div>
    </div>
   </body>
</html>