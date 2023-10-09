<!DOCTYPE HTML>

<head>
<title>Date Of Birth</title>
</head>
 <body>
 <form action="dob.php" method="post">
  <fieldset>
  <legend>DATE OF BIRTH</legend>
  <input type="date" name="dob"><br><hr>
  <input type="submit">
  </fieldset>
 </form><br>
 
 Date Of Birth: <?php echo $_POST["dob"]; ?><br>

 </body>
 
 </html>