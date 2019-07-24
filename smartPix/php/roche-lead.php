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
  if (isset($_POST['ac360'])) {
    $ac360 = 'true';
  } else {
    $ac360 = 'false';
  }
  if (isset($_POST['acConnect'])) {
    $acConnect = 'true';
  } else {
    $acConnect = 'false';
  }
  if (isset($_POST['diasend'])) {
    $diasend = 'true';
  } else {
    $diasend = 'false';
  }
  if (isset($_POST['carelink'])) {
    $carelink = 'true';
  } else {
    $carelink = 'false';
  }
  if (isset($_POST['other'])) {
    $other = 'true';
  } else {
    $other = 'false';
  }
  $other_field = $_POST['others'];

  $mysqli->query("INSERT INTO smartPix(first_name, last_name, title, institution_name, email, phone, email_optin, accuchek_360, accuchek_connect, diasend, carelink, other, other_systems) VALUES('$fname', '$lname', '$title', '$iname', '$email', '$phone', '$email_optin', '$ac360', '$acConnect', '$diasend', '$carelink', '$other', '$other_field')") or die($mysqli->error);

  header('Location: ../subPage.html');
}

?>