#!/usr/bin/php -q
<?

require("/var/lib/asterisk/agi-bin/phpagi.php");

$curr_time = time();
$year = date('Y',$curr_time);
$month = date('m',$curr_time);
$day = date('d',$curr_time);
$h=date("H", $curr_time);
$m=date("i", $curr_time);

$dateYmd = date("Y-m-d", $curr_time);

$today = date("Y-m-d H:i:s", $curr_time);

set_time_limit(60);



$line    = $argv[1];
$offset  = $argv[2];


$agi = new AGI();
$agi->answer();





            mysql_connect('localhost','root','3i12z9Aqwe');

            mysql_select_db('AsteriskGUI');


            $sql1 =   "SELECT did_id,entry_calendar_id FROM `AV_DID`,AV_ENTRY,AV_HOLIDAY  WHERE `did_phone` LIKE '+390236000138'  and did_id=entry_did and  entry_calendar_id=holiday_calendar_id and           holiday_date = '"+$dateYmd+"'";

            mysql_query($sql1);

            mysql_close();
							


?>