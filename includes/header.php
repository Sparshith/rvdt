<?php

$url = isset(parse_url($_SERVER['REQUEST_URI'])['path']) ?  parse_url($_SERVER['REQUEST_URI'])['path'] : '';

?>
<div class="ui container rv-header <?php echo ($user_device != 'mobile')  ? 'mbot10' : ''; ?>">
    <div class="ui large secondary inverted pointing menu wrapper">
        <a class="toc item ln30">
          <i class="sidebar icon"></i>
        </a>
        <a href="/" style="border-left:1px solid #3d3d3d" class="item ln30 <?php echo ($url == '/' || $url == '' || $url == '/index') ? 'current-page': ''; ?>">Home</a>
        <a href="/matchups" class="item ln30 <?php echo ($url == '/matchups') ? 'current-page': ''; ?>">Matchups</a>
        <a href="/teams" class="item ln30">Teams</a>
        <a href="/judges" style="border-right:1px solid #3d3d3d" class="item ln30">Judges</a>
      <div class="right item" style="padding-right:0px">
        <div class=mr10>
          <a class="ui inverted button">Contact</a>
        </div>
        <div>
          <a class="ui inverted button">Schedule</a>
        </div>
      </div>
    </div>
</div>

<?php if($user_device == 'mobile') { ?>
  <!-- Sidebar Menu -->
  <div class="ui vertical inverted sidebar menu">
    <a class=" item">Home</a>
    <a href="/matchups.php" class="item">Matchups</a>
    <a href="/teams" class="item">Teams</a>
    <a href="/judges" class="item">Judges</a>
    <a class="item">Call</a>
    <a class="item">Schedule</a>
  </div>
<?php } ?>
