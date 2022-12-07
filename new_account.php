<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>new_account</title>
</head>
<body>
  <h2>▶회원가입</h2>
  <form name "mem_form" method="post" action="add_account.php">
    <input type="hidden" name="title" value="회원가입 양식">
    <table border="1" width="640" cellspacing="1" cellpadding="4">
      <tr>
        <td align="right">*아이디:</td>
        <td><input type="input" minlength="6" maxlength="20" name="id" value="6~20자리로 작성하세요"></td>
      </tr>
      <tr>
        <td align="right">*비밀번호:</td>
        <td><input type="input" minlength="8" maxlength="20" name="pw" value="8~20자리로 작성하세요"></td>
      </tr>
      <tr>
        <td align="right">*이름:</td>
        <td><input type="input"  maxlength="12" name="name"></td>
      </tr>
      <tr>
        <td align="right">*나이:</td>
        <td><input type="input"  maxlength="12" name="age"></td>
      </tr>
      <tr>
        <td align="right">*전화번호:</td>
        <td><input type="input"  maxlength="13" name="phone"></td>
      </tr>
  </table>
  <br>
  <table border="0" width="640">
    <tr>
      <td align="center">
        <input type="submit" value="확인">
        <input type="reset" value="다시작성">
      </td>
    </tr>
  <br>
</form>
<table>
  <form method="post" name="go_to_main" action="main.php">
      <input type="submit" value="시작화면으로">
    </form>
  </table>
</body>
</html>
