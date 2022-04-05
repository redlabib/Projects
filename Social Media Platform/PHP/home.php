<?php
//https://www.9lessons.info/2010/01/php-time-stamp-function.html
// For time_stamp function so it can be used to record the time when a user posts something.
function time_stamp($session_time)  
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }

}
 
} 

?>

<!DOCTYPE html>
<html>

	<head>
		<title> BeeFriends </title>
		<link rel="stylesheet" type="text/css" href="css/homee.css">
	</head>

<body>
<?php include ('includes/session.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="BeeFriends"> <img src="image/logo.jpg" style="height: 50px; width: 100px;"></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="profile.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				<li><a href="home.php" title="Home"><label class="active">Home</label></a></li>
				<li><a href="profile.php" title="Home"><label>Profile</label></a></li>
				<li><a href="friends.php" title="Friends"><label>Friends</label></a></li>
				<li><a href="message.php" title="Messages"><label>Messages</label></a></li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
	
		<div id="left-nav">
				
				<div class="clip1">

				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>
				
				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		</div>
		
		
		
		<div id="right-nav">
			<h1>Post Status</h1>
	<div>
			<form method="post" action="post.php" enctype="multipart/form-data">
				<textarea placeholder="Share a story..." name="content" class="post-text" required></textarea>
				<button class="btn-share" name="Submit" value="Log out">Share</button>
			</form>
	</div>
	
		</div>
		
<?php
	include("includes/database.php");
			$query=mySQLi_query($con,"SELECT * from user where user_id='$id' order by user_id DESC");
			while($row=mySQLi_fetch_array($query)){
				$id = $row['user_id'];
?>	
		
<?php
}
?>
		

<?php
	include("includes/database.php");
			$query=mySQLi_query($con,"SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC");
			while($row=mySQLi_fetch_array($query)){
				$posted_by = $row['firstname']." ".$row['lastname'];
				$profile_picture = $row['profile_picture'];
				$content=$row['content']; 
				$post_id = $row['post_id'];
				$time=$row['created'];	
?>
		<div id="right-nav1">
			<div class="profile-pics">
			<a href="friends.php?id=<?php echo $row['user_id'];?>"><img src="<?php echo $profile_picture ?>"></a>
			<a href="friends.php?id=<?php echo $row['user_id'];?>"><b><?php echo $posted_by ?></b></a>
			<strong><?php echo $time = time_stamp($time); ?></strong>
			</div>
		<br />
			<div class="post-content">
				<div class="delete-post">
				<a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete post"><button class="btn-delete">X</button></a>
				</div>
			<p><?php echo $row['content']; ?></p>
		
		</div>

<?php
	include("includes/database.php");
			$comment=mySQLi_query($con,"SELECT * from comments where post_id='$post_id' order by post_id DESC");
			while($row=mySQLi_fetch_array($comment)){
			$comment_id=$row['comment_id'];
			$content_comment=$row['content_comment'];
				$time=$row['created'];	
			$post_id=$row['post_id'];
			$user=$_SESSION['id'];
			
?>			
			<div class="comment-display"<?php echo $comment_id ?>>
					<div class="delete-post">
					<a href="delete_comment.php<?php echo '?id='.$comment_id; ?>" title="Delete your comment"><button class="btn-delete">X</button></a>
					</div>
				<div class="user-comment-name"><img src="<?php echo $row['image']; ?>">&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?><b class="time-comment"><?php echo $time = time_stamp($time); ?></b></div>
				<div class="comment"><?php echo $row['content_comment']; ?></div>
			
			</div>
			<br />

<?php
}
?>
			

		 <form  method="POST" action="comment.php">			
			<div class="comment-area">
			
						<?php $image=mysqli_query($con,"SELECT * from user WHERE user_id='$id'");
							while($row=mysqli_fetch_array($image)){
							

							?>
						<img src="<?php echo $row['profile_picture']; ?>" width="50" height="50">
						<?php } ?>
			
			<input type="text" name="content_comment" placeholder="Write a comment..." class="comment-text">
			<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
			<input type="hidden" name="user_id" value="<?php echo $firstname . ' ' . $lastname  ?>">
			<input type="hidden" name="image" value="<?php echo $profile_picture  ?>">
			<input type="submit" name="post_comment" value="Reply" class="btn-comment">
			
			</div>
		</form>

			
		</div>
	<?php
	}
	?>
	
		
	</div>

</body>

</html>