<?
    include_once('header.php');
?>


<main id="join"  class='member'> <!-- 페이지 구분 아이디 -->

    <section id="section1">
        <div class="wrap">
            <div class="gap">
                <div class="container">

                    <div class='title'>
                        <h2>Join</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    
    <section id="section2">
        <div class="wrap">
            <div class="gap">
                <div class="container">

                   

                    <div class="content">
                        <ul class='clearfix'>
                            <li>
                                <div class="content-gap">
                                    <div class='title'>
                                        <h3>Join</h3>
                                        <h2>회원가입</h2>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="content-gap">
                                    <div class='login-wrap'>
                                        <!-- <form name='login' id='login' method='post' action='./insert.php'> -->
                                        <form name='login' id='login' class='login join'>  <!-- AJAX 사용 -->
                                            <ul>
                                                <li>
                                                    <div>
                                                        <label for="id">아이디</label><div><input type="text" name="gaib_id" id="gaib_id" value="" placeholder='아이디를 입력하세요!'></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <label for="pwd">비밀번호</label><div><input type="text" name="gaib_pwd" id="gaib_pwd" value="" placeholder='비밀번호를 입력하세요!'></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <label for="name">이름</label><div><input type="text" name="gaib_name" id="gaib_name" value="" placeholder='이름을 입력하세요!'></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <label for="phone">전화번호</label><div><input type="text" name="gaib_phone" id="gaib_phone" value="" placeholder='전화번호를 입력하세요!'></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <label for="email">이메일</label><div><input type="email" name="gaib_email" id="gaib_email" value="" placeholder='이메일을 입력하세요!'></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <input type="submit" class="submitBtn" value="회원가입">
                                                        <input type="button" class="listBtn" value="목록보기">
                                                    </div>
                                                </li>
                                            </ul>                                            
                                        </form>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <div class='output'></div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    


</main>





<?
    include_once('footer.php');
?>