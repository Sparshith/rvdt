<?php
include 'contact.inc.php';
include 'meta.php'; 
?>
<html>
<body>
<?php include 'includes/header.php';?>
<div class="wrapper">
 	<div class="pusher">
 		<div class="ui large header <?php echo $user_device == 'mobile' ? 'ml10i' : ''; ?>" style="margin-top: 20px;">
	 		Contacts
	 	</div>
		<div class="ui grid stackable container">
			<div class="four wide column">
				<div class="ui card">
				  <div class="image">
				    <img style="max-height: 174px;" src="images/advesh.jpg">
				  </div>
				  <div class="content">
				    <a class="header">Advesh Jalan</a>
				    <div class="meta">
				      <span>Tournament director</span>
				    </div>
				  </div>
				  <div class="extra content">
				    <a>
				      <i class="call icon"></i>
				     	+91 99161 02405
				    </a>
				  </div>
				</div>
			</div>
			<div class="four wide column">
				<div class="ui card">
				  <div class="image">
				    <img style="max-height: 174px;" src="images/mayank.jpg">
				  </div>
				  <div class="content">
				    <a class="header">Mayank Sharma</a>
				    <div class="meta">
				      <span>Joint Tournament Director</span>
				    </div>
				  </div>
				  <div class="extra content">
				    <a>
				      <i class="call icon"></i>
				      +91 97422 90014
				    </a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<footer>
    <?php  include 'includes/footer.php'; ?>
</footer>
</html>