<?php include 'judge.inc.php'; ?>
<html>
<?php include 'meta.php'; ?>
<body>
<?php include 'includes/header.php'; ?>
<div class="wrapper">
 	<div class="pusher">
	 	<div class="ui large header <?php echo $user_device == 'mobile' ? 'ml10i' : ''; ?>" style="margin-top: 30px;">
	 		<?php echo 'Matchups for Judge: '. $judge_name; ?>
	 	</div>
 		<?php echo $matchups_content; ?>
 	</div>
</div>
</body>
</html>