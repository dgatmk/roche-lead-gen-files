<?php
  $mysqli = new mysqli('localhost', 'root', '', 'roche_leadgen') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $title = $_POST['title'];
  $iname = $_POST['iname'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  if (isset($_POST['email_optin'])) {
    $email_optin = 'true';
  } else {
    $email_optin = 'false';
  }
  $pname = $_POST['pname'];
  if (isset($_POST['enrolled'])) {
    $enrolled = 'true';
  } else {
    $enrolled = 'false';
  }

  $mysqli->query("INSERT INTO acd(first_name, last_name, title, institution_name, street_address, city, state, zip, email, phone, email_optin, current_prescriber_name,already_enrolled) VALUES('$fname', '$lname', '$title', '$iname', '$address', '$city', '$state', '$zip', '$email', '$phone', '$email_optin', '$pname', '$enrolled')") or die($mysqli->error);

  header('Location: ../subPage.html');
}

?>