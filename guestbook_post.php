<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook Post Result</title>
</head>
<body>

<?php
  // First open the file in append only mode.
  // Notice that we're using a+ instead of w.
  //The w mode will overwrite the file each time it is opened.
  $guestbook_posts = fopen("guestbook_posts.txt", "a+");

  // Next lock the file using the exclusive lock mode LOCK_EX

  // Use the fputs function to append to the file.
  // Don't forget to put \n at the end of the line so the next post will be on the next line.
  // See the following PHP example in git for writing to a file:
  //  https://github.com/jcross-class/PhpExamples/blob/master/write_file_example.php

  // Unlock the file LOCK_UN
  // Close the file
?>

Thanks for signing my guestbook!<br/>
Click <a href="view_guestbook.php">here</a> to view all posts to the guestbook.<br/>
Click <a href="guestbook_form.html">here</a> to go back to the guestbook post form.

</body>
</html>