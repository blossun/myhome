<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Javakong Cafe</title>
    <link rel="stylesheet" type="text/css" href="style.css?rnd=335">
  </head>
  <body>
    <?php require('./view/top.php')?>
    <div class="contents">
      <div class="join">
        <div class="title">
          <h2>JOIN</h2>
        </div>

        <form action="join.php" method="POST">
          <fieldset> <!--폼 요소를 그룹으로 묶는 태그 -->
            <legend></legend> <!-- 그룹으로 묶는 구역에 제목을 붙이는 태그 -->
            <h3>기본정보</h3>
            <table width="100%">
              <caption>기본 정보</caption> <!--표에 대한 제목-->
              <colgroup><!--col(열) 사이즈 설정 -->
                <col style="width:150px;"/>
                <col style="width:auto;"/>
              </colgroup>
              <tbody>
                <tr>
                  <th scope="row">아이디</th>
                  <td><input type="text" name="user" placeholder="아이디를 입력하세요."><span>(영문소문자/숫자,4~16자)</span></td>
                </tr>
                <tr>
                  <th scope="row">비밀번호</th>
                  <td><input type="password" name="pw" placeholder="비밀번호를 입력하세요."><span>(영문 대소문자/숫자/특수문자 중 2가지 이상 조합, 8자~16자)</span></td>
                </tr>
                <tr>
                  <th scope="row">비밀번호 확인</th>
                  <td><input type="password" name="check_pw"></td>
                </tr>
                <tr>
                  <th scope="row">이름</th>
                  <td><input type="text" name="name" maxlength="20"></td><!--alt : 구글에 이미지에 대한 설명 제공 -->
                </tr>
                <tr>
                  <th scope="row">주소</th>
                  <td><input type="text" name="address"></td>
                </tr>
                <tr>
                  <th scope="row">휴대 전화</th>
                  <td><input type="text" name="phone_number"></td>
                </tr>
                <tr>
                  <th scope="row">이메일</th>
                  <td><input type="email" name="email"></td>
                </tr>
              </tbody>
            </table>
            <h3>추가정보</h3>
            <table>
              <caption>회원 추가정보</caption>
              <tbody>
                <tr>
                  <th>성별</th>
                  <td><input type="radio" name="is_sex" value="female">여자
                  <input type="radio" name="is_sex" value="male">남자</td>
                </tr>
                <tr>
                  <th>생년월일</th>
                  <td><input type="date" name="birth_day"></td>
                </tr>
              </tbody>
            </table>
          <div class="btn_sbmWrap">
            <input type="submit" value="회원가입" class="btn_submit">
            <a href="./index.php" class="btn_submit normal">취소</a>
          </div>
          </fieldset>
        </form>

      </div>
    </div>
    <?php require('./view/bottom.php')?>
  </body>
</html>
