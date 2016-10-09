<?php 
include 'schedule.inc.php';
include 'meta.php';
?>
<html>
<body>
<?php include 'includes/header.php'; ?>
<div class="wrapper">
 	<div class="pusher">
        <div class="mr10 mtop20 <?php echo $user_device == 'mobile' ? 'ml10 mbot10' : ''; ?>">
            <div class="ui header <?php echo $user_device == 'desktop' ? 'large' : ''; ?>">
               Schedule
            </div>
        </div>
    </div>
    <div class="ui small header <?php echo $user_device == 'mobile' ? 'ml10i' : ''; ?>">
    	Day 1
    </div>
    <table class="ui celled table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Event</th>
                </tr>
            </thead>
            <tbody>
               	<tr>
               		<td> 10 AM </td>
               		<td> Registration </td>
               	</tr>
               	<tr>
               		<td> 12 PM </td>
               		<td> Adj test </td>
               	</tr>
               	<tr>
               		<td> 3 PM  </td>
               		<td> Round 1 </td>
               	</tr>
               	<tr>
               		<td> 6 PM  </td>
               		<td> Round 2 </td>
               	</tr>
            </tbody>
    </table>
    <div class="ui small header <?php echo $user_device == 'mobile' ? 'ml10i' : ''; ?>">
    	Day 2
    </div>
    <table class="ui celled table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Event</th>
                </tr>
            </thead>
            <tbody>
               	<tr>
               		<td> 10 AM </td>
               		<td> Round 3 </td>
               	</tr>
               	<tr>
               		<td> 1 PM </td>
               		<td> Round 4 </td>
               	</tr>
               	<tr>
               		<td> 4 PM  </td>
               		<td> Round 5 </td>
               	</tr>
            </tbody>
    </table>
    <div class="ui small header <?php echo $user_device == 'mobile' ? 'ml10i' : ''; ?>">
    	Day 3
    </div>
    <table class="ui celled table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Event</th>
                </tr>
            </thead>
            <tbody>
               	<tr>
               		<td> 10 AM </td>
               		<td> Quarter-finals</td>
               	</tr>
               	<tr>
               		<td> 12 PM </td>
               		<td> Semi-finals </td>
               	</tr>
               	<tr>
               		<td> 3 PM  </td>
               		<td> Finals</td>
               	</tr>
               	<tr>
               		<td> 6 PM  </td>
               		<td> Award Ceremony </td>
               	</tr>
            </tbody>
    </table>

</div>
</body>
<footer>
    <?php  include 'includes/footer.php'; ?>
</footer>
</html>