<?
    include_once('./db_header.php');
?>



<?
    
    session_start();


    $gaib_email = $_POST['gaib_email'];
    $gaib_pwd = $_POST['gaib_pwd'];



    //저장된 데이터베이스 내용(목록)을 가져오기 
    //저장된 이메일과 비번을 비교해서 두정보가 다 맞으면 로그인 할 수 있다.    
    $sql = "select * from w_member where email = '".$gaib_email."' and  pw='".$gaib_pwd."' ";
    $result = mysqli_query($connect, $sql); //쿼리 실행


    $txt = '';

    //정보가 1개이상 있나 확인 총 줄수
    if( mysqli_num_rows($result) >0 ){
        //로그인 가능자 회원입니다.
        //세션 설정(권한) 저장 기억 한다.
        $_SESSION['gaib_email'] = $_POST['gaib_email'];

        //로그인 페이지로 이동하거나 로그인 리턴값을 여기 전달한다
        
        if( isset( $_SESSION['gaib_email'] ) ){
            
            $txt .= "<h3>환영합니다.</h3>";
            $txt .= "<h4>'".$_SESSION['gaib_email']."' 님!^^</h4>";
            $txt .= "<p><a href='javascript:void(0);' class='logoutBtn'>로그아웃</a></p>";
        }
        else{
            $txt = "";
        }
    }
    else{
        $txt .= "<h4>회원 '".$_POST['gaib_email']."' 님!</h4>";
        $txt .= "<h5> 로그인 정보가 없습니다. </h5>";
        $txt .= "<h5> 회원 가입을 하여야 합니다. </h5>";   
    }


    echo $txt;



?>



<?
    include_once('./db_footer.php');
?>