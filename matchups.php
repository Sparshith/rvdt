<!DOCTYPE html>

<?php

ini_set('display_errors', 1);
include 'includes/application_top.php';
$_title = 'Matchups | RVDT 2016';


$table_contents = '';

for($i = 0; $i < 11; $i++) {
  $table_contents .= '
     <tr>
        <td>Venue</td>
        <td>Team1</td>
        <td>Team2</td>
        <td>Team3</td>
        <td>Team4</td>
      </tr>
  ';
}

/*
Final logic should be this

foreach($matches as $match) {

}

*/

?>

<html>
<?php include 'meta.php'; ?>
<body class="wrapper">

<!-- Page Contents -->
<div class="pusher">
  <?php include 'includes/header.php'; ?>
  <div class="mr10 mtop20 <?php echo $user_device == 'mobile' ? 'ml10 mbot10' : ''; ?>">
    <div class="ui header <?php echo $user_device == 'desktop' ? 'large' : ''; ?>">Round 1</div>
  </div>
  <table class="ui celled table">
    <thead>
      <tr>
        <th>Venue</th>
        <th>Opening Government</th>
        <th>Opening Oppposition</th>
        <th>Closing Government</th>
        <th>Closing Opposition</th>
      </tr>
    </thead>
    <tbody>
      <?php echo $table_contents; ?> 
    </tbody>
  </table>
</div>

</body>

</html>
