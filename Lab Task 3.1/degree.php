<!DOCTYPE HTML>

<head>
<title>Degree</title>
</head>
 <body>
 <form action="degree.php" method="post">
  <fieldset>
  <legend>DEGREE</legend>
  <input type="checkbox" name="degree" value="SSC">SSC<br>
  <input type="checkbox" name="degree" value="HSC">HSC<br>
  <input type="checkbox" name="degree" value="BSc">BSc<br>
  <input type="checkbox" name="degree" value="Other">MSc<br><hr>
  <input type="submit">
  </fieldset>
 </form><br>
 
 Degree: <?php echo $_POST["Degree"]; ?><br>

 </body>
 
 </html>