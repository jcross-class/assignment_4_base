<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Guestbook Posts</title>
</head>
<body>

<?php
  // First open the file in read mode.
  // Next lock the file using the shared lock mode LOCK_SH

  // Read in the file in a while loop.  Remember to use rtrim() to trim off the newlines for each line.
  // See the following PHP example in git for reading in a file:
  //   https://github.com/jcross-class/PhpExamples/blob/master/read_file_example.php
  // Use explode to split the values up.
  // Use the HTML given below this PHP code block and PHP to print out each guestbook post.

  // The while loop should be done at this point.
  // Unlock the file LOCK_UN
  // Close the file
?>

<!-- use the following template to format your output -->
Name: NAME<br/>
Site Rating: SITE_RATING<br/>
Gender: GENDER<br/>
Comments: COMMENTS<br/>
<hr/>
<!-- end template -->

</body>
</html>