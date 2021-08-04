<?php
//􏶙ずsession_startは􏶚 􏵭に􏶛 􏶜 
session_start();

//􏶝􏶞のセッションIDを􏶟􏶠 
$old_sessionid = session_id();

//􏵩しいセッションIDを􏵪行(􏶡のSESSION IDは􏶔􏴂) 
session_regenerate_id( true ); //trueが大事!

//􏵩しいセッションIDを􏶟􏶠 
$new_sessionid = session_id();

//􏶢セッションIDと􏵩セッションIDを􏶣 􏶤
echo "􏶥いセッション: $old_sessionid<br />"; 
echo "􏵩しいセッション: $new_sessionid<br />"; 
?>