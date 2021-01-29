<?
    // 로그아웃
    session_start();
    session_destroy(); //로그아웃 (세션 삭제)
    
    $txt ='';

    $txt = $_SESSION['gaib_email'].'님 바이바이! 수고 하셨습니다.';

?>