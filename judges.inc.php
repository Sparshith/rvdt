<?php

include 'includes/application_top.php';

$DB = new DBPDO();
$judges_raw_data =  $DB->fetchAll("SELECT * FROM `judges` ORDER BY adj_name");
$_title =  'Judges | RVDT 2016';

$table_contents = '';

foreach ($judges_raw_data as $data) {
	$table_contents .= '
        <tr>
            <td><a href="/judge?adj_id='.$data['adj_id'].'">'.$data['adj_name'].'</a></td>
            <td>'.$data['institution'].'</td>
        </tr>
    ';
}
