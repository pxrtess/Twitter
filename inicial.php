<?php
require './db_conn.php'; 
$return = require 'app/returntweets.php';
$tweets="";
for($x=0; $x<count($return); $x++){
    $stmt = $conn->prepare('SELECT username from users where id = (:id)');
    $stmt->execute([                                                                                     
        ':id' => $return[$x]['id_users']
    ]);
    $result = $stmt->fetchAll();
    $tweets.="<div class='tweet'>
        <div class='tweet-perfil'><div style='background-color: black; width: 3em; height:3em; border-radius:1.5em'></div><div class='usuario-data'><a class='usuario' href='#'>".$result[0]['username']."</a><p class='data'>".$return[$x]['date']."</p></div></div>
        <p class='tweet-texto'>".$return[$x]['text']."</p>
    </div>";
}
$page = "<div class='div-tweet'>
<form action='app/tweetar.php' method='post'>
    <input type='text' placeholder='O que você está pensando?' name='tweet' required>
    <br>
    <input type='submit' value='Tweetar'>
</form>
</div>
<br>
<hr>
<div class='tweets'>"
    .$tweets.
"</div>";
?>