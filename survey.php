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
 
<br>Basic Info and Contact
<p><b>Why are we asking for contact information?</b>

Your contact data is meant to simulate real user data. We will never share or use this data outside of the classroom.</p><br>
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
<br>Technical Skills<br>
What programming languages are you most familiar with? You may select up to a maximum of three:<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="c">C/C++<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="c#">C#<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="html">HTML/CSS<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="java">Java<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="javascript">Javascript<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="php">PHP<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="python">Python<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="julia">Julia<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="r">R<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="sql">SQL (any variant)<br>
  <input class="limited-checkbox" type="checkbox" name="language" value="swift">Swift/Objective-C<br>
Which of the following machine learning packages, libraries, or frameworks are you most familiar with? Please select at least one of the options listed below. (You may select up to a maximum of three.):<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="caret">caret<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="ggplot2">ggplot2<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="mlr3">mlr3<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="rpart">rpart<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="flux">flux<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="mlpack">mlpack<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="Pytorch">Pytorch<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="TensorFlow">TensorFlow<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="scikitlearn">scikit-learn<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="Keras">Keras<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="NA">None of the above<br>
What primary operating system do you use?:<br>
  <input type="radio" name="OS" value="mac">MacOS
  <input type="radio" name="OS" value="windows">Windows
  <input type="radio" name="OS" value="linux">Linux
  <input type="radio" name="OS" value="chrome">ChromeOS
  <input type="radio" name="OS" value="">Other <input type="text" name="other_os" /><br>
Which of the following supervised methods are you most familiar with? Please select at least one of the options listed below. (You may select up to a maximum of three.):<br>
  <input class="limited-checkbox" type="checkbox" name="surpervised" value="linear">Linear Regression<br>
  <input class="limited-checkbox" type="checkbox" name="surpervised" value="logistic">Logistic Regression<br>
  <input class="limited-checkbox" type="checkbox" name="surpervised" value="svm">Support Vector Machines (SVMs)<br>
  <input class="limited-checkbox" type="checkbox" name="surpervised" value="dtree">Decision Trees<br>
  <input class="limited-checkbox" type="checkbox" name="package" value="rf">Random Forests/Tree Ensemble Methods<br>
  <input class="limited-checkbox" type="checkbox" name="surpervised" value="nb">Naive Bayes<br>
  <input class="limited-checkbox" type="checkbox" name="surpervised" value="nn">Neural Networks<br>
  <input class="limited-checkbox" type="checkbox" name="surpervised" value="cnn">Convolutional Neural Networks (CNNs)<br>
  <input class="limited-checkbox" type="checkbox" name="surpervised" value="NA">None of the above<br>
Which of the following unsupervised methods and models are you most familiar with? Please select at least one of the options listed below. (You may select up to a maximum of three.):<br>
  <input class="limited-checkbox" type="checkbox" name="unsurpervised" value="kmeans">K-Means<br>
  <input class="limited-checkbox" type="checkbox" name="unsurpervised" value="knn">K-Nearest Neighbors (KNNs)<br>
  <input class="limited-checkbox" type="checkbox" name="unsurpervised" value="hcm">Hierarchical Clustering Models<br>
  <input class="limited-checkbox" type="checkbox" name="unsurpervised" value="pca">Principal Component Analysis<br>
  <input class="limited-checkbox" type="checkbox" name="unsurpervised" value="svd">Singular Value Decomposition<br>
  <input class="limited-checkbox" type="checkbox" name="unsurpervised" value="gmm">Gaussian Mixture Models<br>
  <input class="limited-checkbox" type="checkbox" name="unsurpervised" value="NA">None of the above<br>
Which of the following visualization tools or applications, if any, are you most familiar with?:<br>
  <input type="radio" name="visualize" value="tableau">Tableau
  <input type="radio" name="visualize" value="powerbi">Power BI
  <input type="radio" name="visualize" value="jupyter">Jupyter
  <input type="radio" name="visualize" value="googlecharts">Google Charts
  <input type="radio" name="visualize" value="rr">R/R Markdown
  <input type="radio" name="visualize" value="ibm">IBM Watson
  <input type="radio" name="visualize" value="plotly">Plotly
  <input type="radio" name="visualize" value="">Other <input type="text" name="other_os" /><br>
Which of the following cloud services, if any, do you have experience with?:<br>
  <input type="radio" name="visualize" value="azure">MS Azure
  <input type="radio" name="visualize" value="aws">Amazon Web Services (AWS)
  <input type="radio" name="visualize" value="google">Google Cloud Platform
  <input type="radio" name="visualize" value="ocean">Digital Ocean
  <input type="radio" name="visualize" value="">Other <input type="text" name="other_os" /><br>
<br>Interpersonal Skills<br>
<input type="submit">
</form>
 
<script>
var limit = 3;
$('input.limited-checkbox').on('change', function(evt) {
   if($(this).siblings(':checked').length >= limit) {
       this.checked = false;
       alert("You can only choose 3");
   }
});
</script>


</body>
</html> 
