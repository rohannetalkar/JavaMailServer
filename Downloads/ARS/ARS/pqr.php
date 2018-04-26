<head><title>ARS</title>

<link rel="stylesheet" type="text/css" href="default.css" title="default">
<script type="text/javascript" src="validate.js"></script>
</head>
<body background=image.jpg>
<div id="WholePage">
<div id="Inner">
<div id="Container" style="border:groove;border-color:#00CCFF">
<div id="Head">
<div id="Head_left">
<div id="Leaf_top"></div>
<div> </div>
</div>
<div id="Head_right">
<div id="Logo">
<div id="Name"><span class="Red">A</span><span>irline</span>&nbsp;<span class="Red">R</span><span>eservation</span> </div>
<div id="Informations">Wherever you want to Go!</div>
</div>
<div id="Top_menu"> <a class="kart" href="index.html"><span>MORE</span></a> <a class="orders" href="abc.html"><span>RESERAVATION</span></a>
<a class="contact" href="index.html"><span>CONTACT</span></a>
<a class="help" href="index.html"><span>ABOUT US</span></a>
<a class="home" href="index.html"><span>HOME</span></a>
</div>
</div>
</div>
<div id="CentralPart">
<div id="LeftPart">
<div id="Menu">
  <div id="Page_center">
  </div>
</div></div>
<div class="cleaner"></div>
</div>

<div class="down2">
</p>
</div>
</div>
</div>
</div>
</div>
<?php
$fp = fopen("C:\Users\Paresh\Dropbox\Data\data.txt","a");
fwrite($fp, "Name: ");
fwrite($fp, " ");
fwrite($fp, $_GET["textnames"]);
fwrite($fp, " ");
fwrite($fp, "No. of Seats: ");
fwrite($fp, $_GET["fathername"]);
fwrite($fp, " ");
fwrite($fp, "Pstal Address: ");
fwrite($fp, $_GET["paddress"]);
fwrite($fp, " ");
fwrite($fp, "Local Address: ");
fwrite($fp, $_GET["personaladdress"]);
fwrite($fp, " ");
fwrite($fp, "Class: ");
fwrite($fp, $_GET["Class"]);
fwrite($fp, " ");
fwrite($fp, "Source Airport: ");
fwrite($fp, $_GET["City"]);
fwrite($fp, " ");
fwrite($fp, "Destination Airport: ");
fwrite($fp, $_GET["District"]);
fwrite($fp, " ");
fwrite($fp, "Airline: ");
fwrite($fp, ": ");
fwrite($fp, $_GET["State"]);
fwrite($fp, " ");
fwrite($fp, "Pin Code: ");
fwrite($fp, $_GET["pincode"]);
fwrite($fp, " ");
fwrite($fp, "Email-Id: ");
fwrite($fp, $_GET["emailid"]);
fwrite($fp, " ");
fwrite($fp, "Mobile No: ");
fwrite($fp, $_GET["mobileno"]);
fwrite($fp, " ");
fclose($fp);
?>
<center>
<br><br><br><br><br><br><br><br>
<font color=black>
<marquee><h1>RESERVATION COMPLETE</marquee></h1>
<br><br><br>
<h3>
<a href=index.html>Go To Homepage</a></h3>
</body>
</html>