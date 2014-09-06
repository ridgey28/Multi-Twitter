<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> 
<head>

	<title>Twitter On My Website</title>
	<meta charset="utf-8" />
	<meta name="author" content="Tracy Ridge" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/dark.css" rel="stylesheet" /><!--Light Stylesheet, Choose from dark.css, light.css or blue.css-->  
	
</head>
<body>

<?php include_once 'twitter/display-tweets.php';
	
	/**********	
	*
	*	Replace user1 (Main feed) and user2 (Secondary Feed) with your Twitter usernames, as defined in keys.php.  
	*	Full explanation of arguments are in the blog post.
	*	http://www.worldoweb.co.uk/2013/multiple-users-access-twitter-1-1-api-with-oauth-script
	*
	***********/
	
	display_tweets('user1', 'user2','default', 10, 60);

?>
</body>
</html>