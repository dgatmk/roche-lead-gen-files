<?php
  $mysqli = new mysqli('localhost', 'root', '', 'roche_leadgen') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $title = $_POST['title'];
  $iname = $_POST['iname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  if (isset($_POST['email_optin'])) {
    $email_optin = 'true';
  } else {
    $email_optin = 'false';
  }

  $comments = $_POST['comments'];
  /*$comments = $mysqli->real_escape_string($_POST['comments']);*/

  $mysqli->query("INSERT INTO mySugr(first_name, last_name, title, institution_name, email, phone, email_optin, comments) VALUES('$fname', '$lname', '$title', '$iname', '$email', '$phone', '$email_optin', '$comments')") or die($mysqli->error);

  header('Location: ../subPage.html');
}

?>