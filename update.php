

<?php 

include 'partials/_dbconnect.php';
error_reporting(0);

$sql = "UPDATE booking SET seats='$seats' WHERE aid=$aid";

$data=mysqli_query( $mysqli  , $query);

if($data)
{
echo "<font color='green'> recored from update";
}
else
{
echo "<font color='blue'> faild ";

}