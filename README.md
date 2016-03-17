Assignment 4
============

Purpose
-------
* Learn the basics of using HTML forms and PHP together
* Learn how to embed PHP in HTML
* Review writing to and reading from files
* Review using git and github.com

Collaboration
-------------
You can talk about the assignment with your peers in the class.  However, you should perform the work yourself and turn in a copy of your work.

Prerequisites
-------------
Nothing new.  You will use git and PhpStorm for this assignment.

Use git to clone your private assignment 4 repo to your computer.  Then in PhpStorm, use File->Open Directory and select your local repo.

You will be using the web server built into PhpStorm.  For any file you want to open in a web browser, right click on the editor window and select Open in Browser and then select the browser you want to use, or Default.  The file you are editing will then open in your web browser.

After opening your repo in PhpStorm, the first time you run a PHP program it will ask you to select your PHP interpreter.  When running PHP in your web browser, you will receive the error `502 Bad Gateway`.  Go back to PhpStorm.  There should be a pop-up box in the top right of the window that says:

    PHP interpreter is not configure
    Please configure PHP interpreter to use built-in web server

Click on the link "configure PHP interpreter" link.  A window will pop-up.  Click on the interpreter drop-down menu and select the version of PHP you want to use.  Then hit ok.  Your PHP program should now work in your web browser.

Resources and Examples
----------------------
* w3schools.com has a good basic overview of HTML forms [here](http://www.w3schools.com/html/html_forms.asp).
* example_form_inputs.html and example_form_output.php are provided as examples to show you the basics of how to create HTML forms and process them using PHP.
* example_guestbook_posts.txt shows you what your file output should look like for guestbook_posts.txt.

Instructions
------------
For this assignment you will write a simple guestbook application using PHP and HTML.  Guestbooks were common items on homepages during the early days of the web.  People visiting the homepage would leave their comments for everyone else to see.  Your guest book should consist of 4 files:
* guestbook_form.html
* guestbook_post.php
* guestbook_posts.txt
* view_guestbook.php

The files guestbook_form.html, guestbook_post.php, and view_guestbook.php have been stubbed out for you to serve as a starting point for the assignment.  They include comments to help you write each file.  Links to examples are included within the files as well.  Edit them directly and commit the changes when you are done.  guestbook_posts.txt will be created by your application.  You don't need to commit it to your repository.

#### guestbook_form.html
guestbook_form.html should contain the HTML form used to post to the guestbook.  It should have the following input fields:
* A text input for Name.
* A select input for Site Rating that ranges from 1 to 5.  The selectable values should be: 1, 2, 3, 4, or 5
* A radio input for Gender.  The selectable values should be male or female.  The radio buttons should share the same name, so that if one is selected, the other is deselected.
* A text input for Comments.

To make things simple for this assignment, we will allow any of the fields to be blank.  The form should submit the information to guestbook_post.php via the GET method.

#### guestbook_post.php and guestbook_posts.txt
guestbook_post.php will open the file guestbook_posts.txt in append mode, get an exclusive lock on it (LOCK_EX), add a line containing the field values in the order:

    name;site_rating;gender;comments
then unlock the file (LOCK_UN), and close the file.

Separate the values using a semi-colon.  Note that if you put a semi-colon into the text input fields, that will break this file format.  For now we'll just ignore that to keep things simple.  example_guestbook_posts.txt shows you what your file output should look like.

Feel free to delete your guestbook_posts.txt if it contains lines you don't want.  For example, you might write to the file incorrectly which breaks the view_guestbook.php script.

#### view_guestbook.php
view_guestbook.php should open guestbook_posts.txt in read mode, get a shared lock (LOCK_SH) on it, read in each line, use explode to parse the values on the line, and print out HTML output for the post, unlock the file (LOCK_UN), and close the file.

How to Turn in the Assignment
-----------------------------
You need to clone your private git repo for assignment 4 to your computer.  Make changes to guestbook_form.html, guestbook_post.php, and view_guestbook.php.

Once you are done, commit your modifications to your master branch and push them to GitHub.  Then go to D2L and turn in the assignment to let me know I can go look at your repo and grade you.  D2L requires you to upload a file, so just upload a blank file or one that says "I'm done."

Grading
-------
Points|Requirement
------|------------
5 | Turn the assignment in via github.com by committing and pushing your code to your private assignment 4 repo.
5 | Read guestbook_posts.txt correctly (open, lock, read lines, unlock, close).
5 | Write guestbook_posts.txt correctly (open, lock, write a line, unlock, close).
4 | Write the data to guestbook_posts.txt correctly formated (1 point per field).
4 | Read the data from guest_books.txt correctly (1 point per field).
4 | Print the output for each post correctly (specified in view_guestbook.php; 1 point per field).
4 | Use the correct HTML for each form input field (1 point per field).
4 | It should be easy to fill the form in (each field is labeled when viewed in the web browser; 1 point per field).
**35** | **Total**
