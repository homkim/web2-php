<?php
   // 기존의 파일명을 삭제
   // 신규 데이터 저장
   unlink('data/'.$_POST['id']);
   header('Location: /index.php');
?>