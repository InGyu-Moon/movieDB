<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>결제 완료</title>
</head>
<h3>결제가 완료되었습니다.</h3>

<?php
  $user_id=$_POST['id'];
  $movie_name=$_POST['movie_name'];
  $movie_info=$_POST['movie_info'];

  $connect = mysqli_connect("localhost","root","","movie");

  $sql = "select * from 예매;";
  $result = mysqli_query($connect,$sql);
  $fields = mysqli_num_fields($result);
  $temp=0;

  while( $row = mysqli_fetch_row($result))
  {
    $temp++;
  }
  $temp++;


  $sql = "insert into 예매 values";
  $sql = $sql."($temp,'$user_id','$movie_name', $movie_info);";
  $result = mysqli_query($connect,$sql);


echo "

<form method=\"post\" name=\"main.php\" action=\"movie_ticket.php\">
  <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
    <input type=\"submit\" value=\"뒤로\">
    ";
    ?>
</form>
</body>
</html>
