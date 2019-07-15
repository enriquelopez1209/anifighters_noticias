<?php

// recent-widget.php
// Displays recent posts from a phpBB forum
// More info: http://www.lkozma.net/blog/phpbb-recent-posts-widget
//
$db_host = 'localhost';  // TODO: put here your database host name
$db_user = 'root';  // TODO: put here your database user name
$db_pwd = '';   // TODO: put here your database password
$database = 'forum';  // TODO: change here if your forum database name is something else than phpbb_forum

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("DB connection error");

if (!mysql_select_db($database))
    die("DB selection error");

// sending query
mysql_query("SET NAMES 'utf8'");

// The following queries the most recent comments from the database
// It fetches the post time, post text, topic title and username
// The query is limited to approved posts and the 5 most recent posts are returned.
// Feel free to play around with the query and fetch different fields. Some information about the phpBB database structure is here:
// http://www.phpbbdoctor.com/doc_tables.php . Be aware that these things could change between versions. I tested it with phpBB 3.0
//
// [EDIT OCT 2011] Note that there are two versions of the query, the first will return the 5 most recent posts, the second will return the 5 most recent posts _from separate topics_,
//   i.e. it will not show posts from the same topic. This was suggested in the comments of the blog post.
// Uncomment only one of the two queries, depending on which you prefer.

$result = mysql_query("select phpbb_posts.post_time as post_time, phpbb_posts.post_text as post_text, phpbb_posts.topic_id as tid, phpbb_posts.forum_id as fid, phpbb_topics.topic_title as topic_title, phpbb_users.username as username, phpbb_posts.post_username as anon from phpbb_posts, phpbb_topics, phpbb_users where post_approved=1 and phpbb_posts.topic_id=phpbb_topics.topic_id and phpbb_posts.poster_id=phpbb_users.user_id order by post_time desc limit 5;");

//$result = mysql_query("select phpbb_posts.post_time as post_time, phpbb_posts.post_text as post_text, phpbb_posts.topic_id as tid, phpbb_posts.forum_id as fid, phpbb_topics.topic_title as topic_title, phpbb_users.username as username, phpbb_posts.post_username as anon from phpbb_posts, phpbb_topics, phpbb_users where post_id IN (select * from (select max(post_id) as mpt from phpbb_posts group by topic_id order by mpt desc limit 5) alias ) AND post_approved=1 and phpbb_posts.topic_id=phpbb_topics.topic_id and phpbb_posts.poster_id=phpbb_users.user_id order by post_time desc;");


if (!$result) {
    die("DB query error");
}

echo "<h4>Recent posts</h4>";
echo "<table border='1' style='background-color:#ffffff'>";
$i = 0;
while($row = mysql_fetch_assoc($result))
{
    $i = $i+1; // This is to have different color for odd/even rows
    echo "<tr><td style='background-color:".(($i%2==1)?"#F2CEA5":"#FAE4CA")."'><small>";
    // Time of post
    $ptime = strftime('%A, %d. %b. %Y', $row['post_time']);
    // Username
    $puser = ($row['username']=="Anonymous")?$row['anon']:$row['username'];
    // Post text
    // Removing BBCode
    $ppost = preg_replace('/\[[^\]]*\]/', '', $row['post_text']);
    // Summarizing post
    $ppost = summary($ppost);
    // Removing some leftover formatting
    $ppost = str_replace("<!--", "", $ppost);
    $ppost = str_replace("-->", "", $ppost);

    // TODO: Replace nebulo.ro in the following line to the URL of your forum
    echo "<font color=gray>".$ptime."</font><br><b>".$puser."</b><br><a href='localhost/afweb/forum/viewtopic.php?f=".$row['fid']."&t=".$row['tid']."'><b>".$row['topic_title']."</b></a><br>"."<br>".$ppost;
    echo "</small></td></tr>";
}
mysql_free_result($result);

// This function summarizes posts to max. 200 characters
function summary($str, $limit = 200, $strip = false) {
    $str = ($strip == true)?strip_tags($str):$str;
    if (strlen ($str) > $limit) {
        $str = substr ($str, 0, $limit - 3);
        return trim(substr ($str, 0, strrpos ($str, ' ')).'...');
    }
    return trim($str);
}

// TODO: put your own forum link in the last line
?>
</table>
<h4><a href="localhost/afweb/forum">Forum</a></h4>