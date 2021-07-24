

<?php 

include 'partials/_dbconnect.php';
error_reporting(0);
$aid=$_GET['id'];
$query ="delete from booking where aid='$aid'";
$data=mysqli_query( $mysqli  , $query);
if($data)
{
echo "<font color='green'> recored from delete";
}
else
{
echo "<font color='blue'> faild ";

}