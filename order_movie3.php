<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>아바타 결제 페이지</title>
</head>
<h3>좌석을 선택하세요.</h3>


<?php

  $connect = mysqli_connect("localhost","root","","movie");
  $user_id=$_POST['id'];
  $movie_name=$_POST['movie_name'];
  $sql = "select * from 상영정보 where 시간='11:00';";
  $result = mysqli_query($connect,$sql);

  $fields = mysqli_num_fields($result);

  $temp=0;
  while( $row = mysqli_fetch_row($result))
  {
    if($temp == 0){
      echo "<p>
      <form method=\"post\" name=\"order\" action=\"movie_order_done.php\">
      <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
      <label><input type=\"hidden\" value = \"$movie_name\" name=\"movie_name\" /></label>
      <label><input type=\"hidden\" value = \"$row[0]\" name=\"movie_info\" /></label>
      <p><input type=\"submit\" value=\"a석\"></p>
      </form>
      </td>";
    }
    if($temp == 1){
      echo "<p>
      <form method=\"post\" name=\"order\" action=\"movie_order_done.php\">
      <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
      <label><input type=\"hidden\" value = \"$movie_name\" name=\"movie_name\" /></label>
      <label><input type=\"hidden\" value = \"$row[0]\" name=\"movie_info\" /></label>
      <p><input type=\"submit\" value=\"b석\"></p>
      </form>
      </td>";
    }
    if($temp == 2){
      echo "<p>
      <form method=\"post\" name=\"order\" action=\"movie_order_done.php\">
      <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
      <label><input type=\"hidden\" value = \"$movie_name\" name=\"movie_name\" /></label>
      <label><input type=\"hidden\" value = \"$row[0]\" name=\"movie_info\" /></label>
      <p><input type=\"submit\" value=\"c석\"></p>
      </form>
      </td>";
    }
    $temp++;
  }
?>

</form>
</body>
</html>
