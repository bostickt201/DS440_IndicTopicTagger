 <!DOCTYPE html>
<html>
<head>
var limit = 3;
$('input.single-checkbox').on('change', function(evt) {
   if($(this).siblings(':checked').length >= limit) {
       this.checked = false;
   }
});
</head>
<body>
<h1>SURVEY PAGE</h1>
</br>
 <a href="index.php">go home</a> 
 
<form action="submit.php" method="post">
What is your first name?: <input type="text" name="fname"><br>
What is your last name?: <input type="text" name="lname"><br>
What is your student email?: <input type="text" name="email"><br>
What is your class year?:<br>
  <input type="radio" name="class" value="1year">First-Year (Freshman)
  <input type="radio" name="class" value="2year">Second-Year (Sophomore)
  <input type="radio" name="class" value="3year">Third-Year (Junior)
  <input type="radio" name="class" value="4year">Fourth-Year (Senior)
  <input type="radio" name="class" value="5year">Fifth-Year + (Super Senior)<br>
Technical Skills:<br>  <textarea name="skills" rows="5" cols="40"></textarea><br>
What programming languages are you most familiar with? You may select up to a maximum of three:<br>
  <input class="single-checkbox" type="checkbox" name="language" value="c">C/C++<br>
  <input class="single-checkbox" type="checkbox" name="language" value="c#">C#<br>
  <input class="single-checkbox" type="checkbox" name="language" value="html">HTML/CSS<br>
  <input class="single-checkbox" type="checkbox" name="language" value="java">Java<br>
  <input class="single-checkbox" type="checkbox" name="language" value="javascript">Javascript<br>
  <input class="single-checkbox" type="checkbox" name="language" value="php">PHP<br>
  <input class="single-checkbox" type="checkbox" name="language" value="python">Python<br>
  <input class="single-checkbox" type="checkbox" name="language" value="julia">Julia<br>
  <input class="single-checkbox" type="checkbox" name="language" value="r">R<br>
  <input class="single-checkbox" type="checkbox" name="language" value="sql">SQL (any variant)<br>
  <input class="single-checkbox" type="checkbox" name="language" value="swift">Swift/Objective-C<br>
<input type="submit">
</form>
 
var limit = 3;
$('input.single-checkbox').on('change', function(evt) {
   if($(this).siblings(':checked').length >= limit) {
       this.checked = false;
   }
});


</body>
</html> 
