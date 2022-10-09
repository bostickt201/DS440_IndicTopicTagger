 <!DOCTYPE html>
<html>
<body>
<h1>SURVEY PAGE</h1>
</br>
 <a href="index.php">go home</a> 
 
<form action="submit.php" method="post">
What is your first name?: <input type="text" name="fname"><br>
What is your last name?: <input type="text" name="lname"><br>
What is your student email?: <input type="text" name="email"><br>
What is your class year?: 
  <input type="radio" name="class" value="1year">First-Year (Freshman)
  <input type="radio" name="class" value="2year">Second-Year (Sophomore)
  <input type="radio" name="class" value="3year">Third-Year (Junior)
  <input type="radio" name="class" value="4year">Fourth-Year (Senior)
  <input type="radio" name="class" value="5year">Fifth-Year + (Super Senior)
Technical Skills:  <textarea name="skills" rows="5" cols="40"></textarea>
<input type="submit">
</form>


</body>
</html> 
