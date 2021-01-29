<?    
    // moonjong2.dothome.co.kr/jason_db/insert.php 
    // 서버에 업로드하고  테스팅 
    // myadmin 관리자에 가서 테이블 확인


    // 헤더영역/////////////////////////////////////////////////////////////
    //서버와 데이터베이스 환경설정과 연결

    $servername = 'localhost';
    $username   = 'moonjong2';
    $password   = 'anstjswhd0105';
    $dbname     = 'moonjong2';

    $connect = mysqli_connect($servername,$username,$password,$dbname);
    mysqli_set_charset($connect, 'utf8');
    
    // 헤더영역/////////////////////////////////////////////////////////////
?>