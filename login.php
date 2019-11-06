<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Javakong Cafe</title>
    <link rel="stylesheet" type="text/css" href="style.css?rnd=132">
  </head>
  <body>
    <?php require('./view/top.php')?>
    <div class="login">
      <h3>Registered Customers</h3>
      <h4>가입하신 아이디와 패스워드를 입력해주세요.</h4>

      <form action="login.php" method="POST">
        <fieldset> <!--폼 요소를 그룹으로 묶는 태그 -->
          <legend></legend> <!-- 그룹으로 묶는 구역에 제목을 붙이는 태그 -->
          <!-- <div class="LoginTable"> -->
          <label for="id"><input type="text" name="id" placeholder="ID"></label>
          <label for="password"><input type="password" name="password" placeholder="PASSWORD"></label>
          <label for="login"><input type="submit" value="로그인" class="btnLogin"></label>
          <p>
          <a href="join.html" class="idurl">회원가입</a>
          <a href="find_id.html" class="idurl">아이디찾기</a>
          <a href="find_passwd_info.html" class="idurl">비밀번호찾기</a></p>
          <!-- </div> -->
        </fieldset>
      </form>

    </div>
    <?php require('./view/bottom.php') ?>
  </body>
</html>
