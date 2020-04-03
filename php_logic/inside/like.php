<?php require_once("../../configuration/config.php");
require_once("../functions/functions.php");
mysqli_report(MYSQLI_REPORT_ALL);

$userId = $_SESSION['uId'];
if (isset($_POST['action'])) {
  $postId = $_POST['post_Id'];
  $action = $_POST['action'];
  switch ($action) {
  	case 'like':
         $sql="INSERT INTO likes (post_id, user_id, action)
         	   VALUES ($postId, $userId, 'like')
         	   ON DUPLICATE KEY UPDATE action='like'";
         break;
  	case 'unlike':
	      $sql="DELETE FROM likes WHERE user_id = $userId AND post_id=$postId";
	      break;
  	default:
  		break;
  }
  mysqli_query($dbc, $sql);
  echo getRating($dbc,$postId);
  exit(0);
}
?>