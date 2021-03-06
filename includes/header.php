<?php
  include('includes/config.php');
  include('includes/classes/User.php');
  include('includes/classes/Artist.php');
  include('includes/classes/Album.php');
  include('includes/classes/Song.php');
  include('includes/classes/Playlist.php');
  //session_destroy();
  if (isset($_SESSION['userLoggedIn'])) {

    $userLoggedIn= new User($con, $_SESSION['userLoggedIn']);
    $username = $userLoggedIn->getUsername();
    echo "<script>userLoggedIn = '$username';</script>";
  } else {
    header('Location: register.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src='https://code.jquery.com/jquery-3.4.0.min.js' integrity='sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=' crossorigin='anonymous'></script>
  <script src="assets/js/script.js"></script>
  <title>Welcome to Spotify Clone</title>
</head>
<body>
  <div id="mainContainer">

    <div id="topContainer">


      <?php include("includes/navBarContainer.php"); ?>

      <div id="mainViewContainer">
        <div id="mainContent">