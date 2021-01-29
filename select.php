<?
    include_once('./db_header.php');
?>




<?

    //저장된 데이터베이스 내용(목록)을 가져오기 ascending 오름차순(asc) descending 내림차순(desc)
    $sql = "select * from w_member order by idx desc";
    $result = mysqli_query($connect, $sql); //쿼리 실행

    $txt='';
    $cnt=mysqli_num_rows($result);  //총 레코드 수


    $txt .= '<table>';

    //단 데이터가 있다면 (빈값이 아니면)
    if( mysqli_num_rows($result) > 0 ){
        //반복 배열처리해서 변수에 저장해서 데터 전송 AJAX 보내줌
        while( $row = mysqli_fetch_array($result) ){
            $txt .= '<tr>';
            // $txt .= '<td>'.$row['idx'].'</td>' ;
            $txt .= '<td>'.$cnt.'</td>';
            $txt .= '<td>'.$row['id'].'</td>';
            $txt .= '<td>'.$row['pw'].'</td>';
            $txt .= '<td>'.$row['name'].'</td>';
            $txt .= '<td>'.$row['phone'].'</td>';
            $txt .= '<td>'.$row['email'].'</td>';
            $txt .= '</tr>';
            $cnt--;
        }
    }

    $txt .= '</table>';
    echo $txt;  //AJAX 로 보내 줌

?>




<?
    include_once('./db_footer.php');
?>