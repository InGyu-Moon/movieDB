<?php
  $connect = mysqli_connect("localhost","root","","movie");

  $sql = "insert into 회원 values";
  $sql = $sql."('{$_POST['id']}','{$_POST['pw']}','{$_POST['name']}',
  {$_POST['age']},'{$_POST['phone']}','1단계',0);";

  $result =mysqli_query($connect,$sql);

  if(!$result){
    echo "회원가입 실패!!";
    exit;
  }
  else{
    echo "회원가입 성공!!";

    echo "
    <form method=\"post\" name=\"logout\" action=\"main.php\">
    <p><input type=\"submit\" value=\"처음화면으로\"></p>
    </form>
    ";

  }
  mysqli_close($connect);

?>
