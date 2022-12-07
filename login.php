<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>login</title>
  <?php
    $username=$_POST['id'];
    $userpw=$_POST['pw'];
    $conn= mysqli_connect('localhost', 'root', '', 'movie');
    $sql="SELECT * FROM 회원 where 회원아이디 ='$username'&&비밀번호='$userpw'";
    $sql_getname="SELECT 이름 FROM 회원 where 회원아이디  ='$username'&&비밀번호='$userpw'";

    $name = mysqli_query($conn,$sql_getname);
    $print_name = mysqli_fetch_row($name);

    if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
      echo "$print_name[0] 님 환영합니다.";
      //영화 예메
      /*echo "
      <form method=\"post\" name=\"go_to_movie\" action=\"movie_ticket.php\">
      <p><input type=\"submit\" value=\"영화예매\"></p>
      </form>
      ";*/
      //영화 예메
      echo "
      <form method=\"post\" name=\"go_to_movie\" action=\"movie_ticket.php\">
      <label><input type=\"hidden\" value = \"$result[0]\" name=\"id\" /></label>
      <p><input type=\"submit\" value=\"영화예매\"></p>
      </form>
      ";
      //음식 주문
      echo "
      <form method=\"post\" name=\"go_to_movie\" action=\"order_food.php\">
      <label><input type=\"hidden\" value = \"$result[0]\" name=\"id\" /></label>
      <p><input type=\"submit\" value=\"음식주문\"></p>
      </form>
      ";
      //로그아웃
      echo "
      <form method=\"post\" name=\"logout\" action=\"main.php\">
      <p><input type=\"submit\" value=\"로그아웃\"></p>
      </form>
      ";

    }
    else{
      echo "<br>가입된 정보가 없습니다.<br><br>새로 가입해주세요.";
      echo "
      <form method=\"post\" name=\"go_to_main\" action=\"new_account.php\">
      <p><input type=\"submit\" value=\"회원가입\"></p>
      </form>
      ";
    }
    ?>
</head>
<body>
</body>
</html>
