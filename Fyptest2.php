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
	  
	  
   </head>

   <body>
   <header>
      <nav >
	  
         <div class="logo" style="font-family: 'Noto Serif Malayalam', serif; font-size:8px">
		 <img src="image2.png" style="filter: invert(97%) sepia(30%) saturate(342%) hue-rotate(139deg) brightness(103%) contrast(109%);" alt="Logo" width="100" height="80">
                       കേരള സംസ്കാരം.......
					   
         </div>
         <input type="checkbox" id="click" />
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>

         <?php
$servername = "localhost";
$username = "cottb";
$password = "NFvAHBDib4";
$dbname = "cottb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors with database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the browser language preference
$browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);


// Query the database to get navbar translations for the selected language
$query = "SELECT navbar_id, label_" . $browser_lang . " AS label FROM navbar_translation";
$result = mysqli_query($conn, $query);
$fontSize =15;
// Loop through the results and display the navbar items with their translated labels
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<li><a href='#'><span style='font-size:{$fontSize}px;' id='" . $row['label'] . "'>" . $row['label'] . "</span></a></li>";
}
echo "</ul>";

// Close the database connection
mysqli_close($conn);?>  
  
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
		 
	   	
	   <marquee style="color:white;background-color:#C8102E;
 
 border-color:#012169 ;
 border-width: thick;
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
<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
<script src="https://widgets.skyscanner.net/widget-server/js/loader.js" async></script>
<div>
<p id="para1" style="font-size:20px; padding-right: 20%; padding-left: 20%;"> 
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
        break;
    case "ja":
        $column_name = "Japanese";
	 
        break;       

    default:
        $column_name = "English"; // Default to English if preferred language is not supported
}
// Retrieve translation from MySQL database based on preferred language
$sql = "SELECT " . $column_name . " FROM `Page Translation` WHERE Paragraph_no = '1'";
$result = $conn->query($sql);
// Check for errors with query
if (!$result) {
    die("Query failed: " . $conn->error);
}
$row = $result->fetch_assoc();
// Check for errors with fetching row
if (!$row) {
    die("No rows found");
}
$translated_text = $row[$column_name];

// Display translated text
echo $translated_text;

// Close MySQL connection
$conn->close();
?>
</p>
<rssapp-carousel id="OKixwLrZAOVt0ccl" style="background-color:#C8102E;"></rssapp-carousel><script src="https://widget.rss.app/v1/carousel.js" type="text/javascript" async></script>
<p style="  padding-right: 20%; padding-left: 20%;;">
The region had been a prominent spice exporter since 3000 BCE. The region's prominence in trade was noted in the works of Pliny as well as the Periplus around 100 CE. In the 15th century, the spice trade attracted Portuguese traders to Kerala, and paved the way for European colonisation of India. At the time of Indian independence movement in the early 20th century, there were two major princely states in Kerala: Thiruvithamkoor and Cochin. They united to form the state of Thiru-Kochi in 1949. The Malabar region, in the northern part of Kerala, had been a part of the Madras province of British India, which later became a part of the Madras State post-independence. After the States Reorganisation Act, 1956, the modern-day state of Kerala was formed by merging the Malabar district of Madras State (excluding Gudalur taluk of Nilgiris district, Lakshadweep Islands, Topslip, the Attappadi Forest east of Anakatti), the taluk of Kasaragod (now Kasaragod District) in South Canara, and the erstwhile state of Thiru-Kochi (excluding four southern taluks of Kanyakumari district, and Shenkottai taluks).[15]

Kerala has the lowest positive population growth rate in India, 3.44%; the highest Human Development Index (HDI), 0.784 in 2018 (0.712 in 2015); the highest literacy rate, 96.2% in the 2018 literacy survey conducted by the National Statistical Office, India;[8] the highest life expectancy, 77.3 years; and the highest sex ratio, 1,084 women per 1,000 men. Kerala is the second-least impoverished state in India according to the Annual Report of Reserve Bank of India published in 2013.[18][19] Kerala is the second-most urbanised major state in the country with 47.7% urban population according to the 2011 Census of India.[20] The state topped in the country to achieve the Sustainable Development Goals according to the annual report of NITI Aayog published in 2019.[21] The state has the highest media exposure in India with newspapers publishing in nine languages, mainly Malayalam and sometimes English. Hinduism is practised by more than half of the population, followed by Islam and Christianity.

The economy of Kerala is the 8th-largest in India with ₹8.55 trillion (US$110 billion) in gross state domestic product (GSDP) and a per capita net state domestic product of ₹222,000 (US$2,800).[22] The tertiary sector contributes around 65% to state's GSVA, while the primary sector contributes only 8%.[23] The state has witnessed significant emigration, especially to the Arab states of the Persian Gulf during the Gulf Boom of the 1970s and early 1980s, and its economy depends significantly on remittances from a large Malayali expatriate community. The production of pepper and natural rubber contributes significantly to the total national output. In the agricultural sector, coconut, tea, coffee, cashew and spices are important. The state is situated between Arabian Sea to the west and Western Ghats mountain ranges to the east. The state's coastline extends for 595 kilometres (370 mi), and around 1.1 million people in the state are dependent on the fishery industry which contributes 3% to the state's income. Named as one of the ten paradises of the world by National Geographic Traveler,[24] Kerala is one of the prominent tourist destinations of India, with coconut-lined sandy beaches, backwaters, hill stations, Ayurvedic tourism and tropical greenery as its major attractions.
  </p>
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