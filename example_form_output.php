<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Result</title>
</head>
<body>

<!-- dump out the entire $_REQUEST array -->
The entire $_REQUEST array:<br/>
<pre><?php var_dump($_REQUEST); ?></pre>
<br/><br/>

<!-- notice how $_REQUEST is not special in the HTML and will be printed verbatim -->
Some $_REQUEST values printed individually by PHP:<br/>
<!-- here's a longer PHP code block -->
<?php
  // Print out some form variable values.
  echo "Your Name: " . $_REQUEST["FirstName"] . " " . $_REQUEST["LastName"] . "<br/>\n";
  echo "Your Food Preference: " . $_REQUEST["FoodPreference"] . "<br/>\n";
  echo "Your City: " . $_REQUEST["City"] . "<br/>\n";
?>
<!-- notice that you need to use the PHP closing tag ?> now since we are embedding PHP in HTML -->

</body>
</html>