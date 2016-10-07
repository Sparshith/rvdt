<?php include 'judges.inc.php'; ?>
<html>
<?php include 'meta.php'; ?>
<body>
<?php include 'includes/header.php'; ?>
<div class="wrapper">
 	<div class="pusher">
        <div class="mr10 mtop20 <?php echo $user_device == 'mobile' ? 'ml10 mbot10' : ''; ?>">
            <div class="ui header <?php echo $user_device == 'desktop' ? 'large' : ''; ?>">
               Judges
            </div>
        </div>
    </div>
    <table class="ui celled table">
            <thead>
                <tr>
                    <th>Judge</th>
                    <th>Institution</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $table_contents; ?> 
            </tbody>
    </table>
</div>
</body>
<footer>
    <?php  include 'includes/footer.php'; ?>
</footer>
</html>