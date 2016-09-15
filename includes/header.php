<?php

?>
<div class="ui container rv-header <?php echo ($user_device != 'mobile')  ? 'mbot10 pbot10 ptop10 pl10 pr10' : ''; ?>">
    <div class="ui large secondary inverted pointing menu">
        <a class="toc item ln30">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item ln30">Home</a>
        <a href="/matchups" class="item ln30">Matchups</a>
        <a href="/teams" class="item ln30">Teams</a>
        <a href="/judges" class="item ln30">Judges</a>
      <div class="right item">
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
    <a class="active item">Home</a>
    <a href="/matchups" class="item">Matchups</a>
    <a href="/teams" class="item">Teams</a>
    <a href="/judges" class="item">Judges</a>
    <a class="item">Call</a>
    <a class="item">Schedule</a>
  </div>
<?php } ?>