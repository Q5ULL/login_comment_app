<?php
$article_id = $_GET['id'];
print_r($article_id);
die; 

if( ! is_numeric($article_id) )
  die('invalid article id');

$query = "SELECT * FROM comments WHERE from_user_id = $article_id LIMIT 0 , 30";

$comments = mysql_query($query);

echo "<h1>User Comments</h1>";

while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
{
  $from_user_id = $row['from_user_id'];
  // $email = $row['email'];
  $comment = $row['comment'];
  $timestamp = $row['timestamp'];
  
  $from_user_id = htmlspecialchars($row['from_user_id'],ENT_QUOTES);
  // $email = htmlspecialchars($row['email'],ENT_QUOTES);
  $comment = htmlspecialchars($row['comment'],ENT_QUOTES);
  
  echo "  <div style='margin:30px 0px;'>
      from_user_id: $from_user_id<br />
      Email: $email<br />
      Comment: $comment<br />
      Timestamp: $timestamp
    </div>
  ";
}
?>