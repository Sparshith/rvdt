<?php include 'teams.inc.php'; ?>
<html>
<?php include 'meta.php'; ?>
<body>
<?php include 'includes/header.php'; ?>
<div class="wrapper">
 	<div class="pusher">
        <div class="mr10 mtop20 <?php echo $user_device == 'mobile' ? 'ml10 mbot10' : ''; ?>">
            <div class="ui header <?php echo $user_device == 'desktop' ? 'large' : ''; ?>">
               Teams
            </div>
        </div>
    </div>
    <table class="ui celled table">
            <thead>
                <tr>
                    <th>Team</th>
                    <th>Speaker 1</th>
                    <th>Speaker 2 </th>
                </tr>
            </thead>
            <tbody>
                <?php echo $table_contents; ?> 
            </tbody>
    </table>
</div>
</body>
</html>