<?php
   // 기존의 파일명을 삭제
   // 신규 데이터 저장
   rename('data/'.$_POST['oldtitle'], 'data/'.$_POST['title']);
   file_put_contents('data/'.$_POST['title'], $_POST['desc']);
   header('Location: /index.php?id='.$_POST['title']);
?>