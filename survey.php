 <!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<h1>SURVEY PAGE</h1>
</br>
 <a href="index.php">go home</a><br>
 
<h1>
 Team-Builder Questionnaire <br>
</h1>
<p>
 The data in this survey will be used only to assist with testing the front and back-end capabilities of our team-matching interface, as well as training our clustering model. Any data supplied will never be shared or used outside of classroom purposes.
  
 Note: This survey should take about 3-5 minutes to complete. Please fill out each question to the best of your ability. Good luck!
</p><br>
<br>
 
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
  <input class="language-checkbox" type="checkbox" name="language" value="c">C/C++<br>
  <input class="language-checkbox" type="checkbox" name="language" value="c#">C#<br>
  <input class="language-checkbox" type="checkbox" name="language" value="html">HTML/CSS<br>
  <input class="language-checkbox" type="checkbox" name="language" value="java">Java<br>
  <input class="language-checkbox" type="checkbox" name="language" value="javascript">Javascript<br>
  <input class="language-checkbox" type="checkbox" name="language" value="php">PHP<br>
  <input class="language-checkbox" type="checkbox" name="language" value="python">Python<br>
  <input class="language-checkbox" type="checkbox" name="language" value="julia">Julia<br>
  <input class="language-checkbox" type="checkbox" name="language" value="r">R<br>
  <input class="language-checkbox" type="checkbox" name="language" value="sql">SQL (any variant)<br>
  <input class="language-checkbox" type="checkbox" name="language" value="swift">Swift/Objective-C<br>
Which of the following machine learning packages, libraries, or frameworks are you most familiar with? Please select at least one of the options listed below. (You may select up to a maximum of three.):<br>
  <input class="package-checkbox" type="checkbox" name="package" value="caret">caret<br>
  <input class="package-checkbox" type="checkbox" name="package" value="ggplot2">ggplot2<br>
  <input class="package-checkbox" type="checkbox" name="package" value="mlr3">mlr3<br>
  <input class="package-checkbox" type="checkbox" name="package" value="rpart">rpart<br>
  <input class="package-checkbox" type="checkbox" name="package" value="flux">flux<br>
  <input class="package-checkbox" type="checkbox" name="package" value="mlpack">mlpack<br>
  <input class="package-checkbox" type="checkbox" name="package" value="Pytorch">Pytorch<br>
  <input class="package-checkbox" type="checkbox" name="package" value="TensorFlow">TensorFlow<br>
  <input class="package-checkbox" type="checkbox" name="package" value="scikitlearn">scikit-learn<br>
  <input class="package-checkbox" type="checkbox" name="package" value="Keras">Keras<br>
  <input class="package-checkbox" type="checkbox" name="package" value="NA">None of the above<br>
What operating system do you use?:<br>
  <input type="radio" name="OS" value="mac">MacOS
  <input type="radio" name="OS" value="windows">Windows
  <input type="radio" name="OS" value="linux">Linux
  <input type="radio" name="OS" value="chrome">ChromeOS
  <input type="radio" name="OS" value="">Other <input type="text" name="other_os" />
<input type="submit">
</form>
 
 <script>

var limit = 3;
$('input.language-checkbox').on('change', function(evt) {
   if($(this).siblings(':checked').length >= limit) {
       this.checked = false;
       alert("You can only choose 3");
   }
});
  
  $('input.package-checkbox').on('change', function(evt) {
   if($(this).siblings(':checked').length >= limit) {
       this.checked = false;
       alert("You can only choose 3");
   }
});
</script>


</body>
</html> 
