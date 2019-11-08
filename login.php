<!doctype html>
<html>
  <?php require('./view/head.html')?>
  <body>
    <?php require('./view/top.php')?>
    <div class="contents">
      <div class="login">
        <h3>Registered Customers</h3>
        <h4>가입하신 아이디와 패스워드를 입력해주세요.</h4>

        <form action="login.php" method="POST">
          <fieldset> <!--폼 요소를 그룹으로 묶는 태그 -->
            <legend></legend> <!-- 그룹으로 묶는 구역에 제목을 붙이는 태그 -->
            <table class="LoginTable">
              <caption>로그인</caption>
              <tr>
                <td><input type="text" name="member_id" placeholder="ID"></td>
                <td rowspan="2" style="border: 0;
                width: 182px;"><input type="submit" value="로그인" class="btnLogin"></td>
              </tr>
              <tr>
                <td><input type="password" name="member_password" placeholder="PASSWORD"></td>
              </tr>



            </table>
            <!-- <div class="LoginTable"> -->

            <p>
            <a href="join.html" class="idurl">회원가입</a>
            <a href="find_id.html" class="idurl">아이디찾기</a>
            <a href="find_passwd_info.html" class="idurl">비밀번호찾기</a></p>
            <!-- </div> -->
          </fieldset>
        </form>

      </div>
    </div>
    <?php require('./view/bottom.php') ?>
  </body>
</html>
