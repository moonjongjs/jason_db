<?
    include_once('./db_header.php');
?>




<?

   // 메인영역/////////////////////////////////////////////////////////////

    //AJAX 에게 넘겨받은 입력 폼데이터를 변수에 저장
    $gaib_id    = $_POST['gaib_id'];
    $gaib_pw    = $_POST['gaib_pw'];
    $gaib_name  = $_POST['gaib_name'];
    $gaib_phone = $_POST['gaib_phone'];
    $gaib_email = $_POST['gaib_email'];


    //입력된 폼 데이터를 기억하는 변수 값을 데이터 베이스 해당 테이블에 저장
    $sql = "insert into w_member(id, pw, name, phone, email) values
            ('".$gaib_id."', '".$gaib_pw."', '".$gaib_name."', '".$gaib_phone."', '".$gaib_email."')";
    // $sql = "insert into w_member(id, pw, name, phone, email) values
    //         ('babo2', '10000', '선종', '010-7942-5305', 'moonseonjong@gmail.com')";
    mysqli_query($connect, $sql); //쿼리 실행


   // 메인영역/////////////////////////////////////////////////////////////


?>



<?
    include_once('./db_footer.php');
?>