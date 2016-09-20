<!DOCTYPE html>

<?php

ini_set('display_errors', 1);
include 'includes/application_top.php';
$_title = 'RV Debating Tournament 2016';

?>
<html>
<?php include 'meta.php'; ?>
<body class="wrapper">

<!-- Page Contents -->
<div class="pusher">
  <?php
    include 'includes/header.php';
  ?>

  <div class="ui inverted vertical masthead center aligned segment bg-image" style="background-image: url('images/contingent.png');background-size:cover;background-position:center;">
    <div class="ui text container">
      <h1 class="ui inverted header" style="margin-top:0;font-size:2.5em">
        RV Debating Tournament 2016
      </h1>
      <h2>16th to 18th September</h2>
    </div>

  </div>

  <div class="ui vertical stripe segment">
    <div class="ui text container">
      <div class="timer-container">
        <h3 class="ui header">Countdown to the next round</h3>
        <p>Please assemble at the Seminar hall</p>
        <div class="countdown-styled"></div>
      </div>
      <div class="ui divider"></div>
      <div class="matchups-containter">
        <h3 class="ui header">Matchups for the current round</h3>
        <p>Do you want to look at your matchup without having to tackle down the obnoxious tall person who randomly stands up and in mid-air, spot your match while the screen scrolls away to glory?</p>
        <a href="/matchups" class="ui large button">See matchups</a>
      </div>
    </div>
  </div>

  <div class="ui vertical stripe segment">
    <div class="ui middle aligned stackable grid container">
      <div class="row">
        <div class="eight wide column">
          <h3 class="ui header">Customary history</h3>
          <p>Started in 2007 to establish a stage for debating in India, the championship has been a benchmark of quality debating and adjudication, thereby raising the standards of parliamentary debate in the country.</p>
    <!--       <h3 class="ui header">Scroll down already</h3>
          <p>
            The tournament has witnessed participation from some of the most reputed institutions in the field of debating, such as Ateneo De Manila Philippines, National Law School Bangalore, Delhi University, Christ University, NUJS Kolkata, MS Ramaiah Institute of Technology, Symbiosis Pune, Vellore Institute of Technology and more
        </p> -->
        </div>
        <div class="six wide right floated column">
          <img src="images/history.jpg" class="ui large bordered rounded image">
        </div>
      </div>
    </div>
  </div>


  <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3>Which institutions have debated at RVDT?</h3>
          <p> Ateneo De Manila Philippines, Nanyang Technological University, National Law School Bangalore,  Delhi University, NUJS Kolkata, Vellore Institute of Technology and more.</p>
        </div>
        <div class="column">
          <h3>Who are the defending champs?</h3>
          <p>
            <img src="images/favicon.jpg" class="ui avatar image">  Saharsh and Srijesh, <b>Vellore Institute of Technology</b>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>
