<!DOCTYPE HTML>

<head>
<title>Blood Group</title>
</head>
 <body>
 <form action="bloodgroup.php" method="post">
  <fieldset>
  <legend>BLOOD GROUP</legend>
  <select name="bg">
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O+">O+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
  <option value="O-">O-</option>
</select><br><hr>
  <input type="submit">
  </fieldset>
 </form><br>
 
 Blood group: <?php echo $_POST["bg"]; ?><br>

 </body>
 
 </html>