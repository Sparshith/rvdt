<?php

include 'matchups.inc.php';

?>

<html>
<?php include 'meta.php'; ?>
<body>
<?php include 'includes/header.php'; ?>
<div class="wrapper">
    <div class="pusher">
        <div class="mr10 mtop20 <?php echo $user_device == 'mobile' ? 'ml10 mbot10' : ''; ?>">
            <div class="ui header <?php echo $user_device == 'desktop' ? 'large' : ''; ?>">
               <?php echo $round_header; ?>
            </div>
        </div>
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Venue</th>
                    <th>Opening Government</th>
                    <th>Opening Oppposition</th>
                    <th>Closing Government</th>
                    <th>Closing Opposition</th>
                    <th>Judges</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $table_contents; ?> 
            </tbody>
            <tfoot>
                <?php echo $table_footer; ?>
            </tfoot>
        </table>
    </div>
</div>
</body>
</html>
