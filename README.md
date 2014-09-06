Multi-Twitter
=============

Display Multiple Twitter Feeds on your Website

<h2>Prequisites</h2>
<ul>
<li>You should already have a consumer key, consumer secret, access token and access token secret for both of your twitter accounts. If not please go to http://www.worldoweb.co.uk/2012/create-a-twitter-app-for-the-new-api for a little guide into creating the Twitter App.</li>
    <li>PHP Server with CURL – I have tested it using PHP 5.3+</li>
    <li>A little knowledge of PHP and CSS are beneficial but not essential.</li>
    </ul>


<h2>Installation</h2>
Unzip and copy the folder twitter and all it’s contents to your server.
tmhOAuth.php is a PHP authentication script to allow you to make a secure call to the twitter 1.1 API.
cacert.pem enables you to access the API using SSL. You can also download a copy from the following: http://curl.haxx.se/ca/cacert.pem

<h2>Adding Keys and Tokens</h2>

Once you have copied the files to your server I suggest that you test the installation before deploying it on your live website. Open up keys.php in the twitter/includes folder and add your consumer key, consumer secret, user token and user secret. Save and close. You can also change whether you want to include retweets and/or exclude replies from your feed by changing the respective values to either True or False. Please note replies and retweets will count towards the maximum number you request, unfortunately I cannot change it due to the Twitter API. The only suggestion is to set max_tweets to a higher amount when calling the display_tweets function. 

<h2>Calling The Function</h2>
<code>
<?php include 'twitter/display-tweets.php';//Include the display-tweets file- Ensure that you have the correct path
		
		display_tweets('user1', 'user2','default', 10, 20);//Function to display your tweets
?>
</code>

Further options and information are available on my blog
http://www.worldoweb.co.uk/2013/multiple-users-access-twitter-1-1-api-with-oauth-script

