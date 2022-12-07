<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>주문 버튼 누른후</title>
</head>
<h3>주문이 완료되었습니다.</h3>

<?php
  $user_id=$_POST['id'];
  $food_num=$_POST['food_num'];


  $connect = mysqli_connect("localhost","root","","movie");

  $sql = "select * from 주문;";
  $result = mysqli_query($connect,$sql);
  $fields = mysqli_num_fields($result);
  $temp=0;

  while( $row = mysqli_fetch_row($result))
  {
    $temp++;
  }
  $temp++;


  $sql = "insert into 주문 values";
  $sql = $sql."($temp,'$user_id',$food_num);";
  $result = mysqli_query($connect,$sql);



  echo "

  <form method=\"post\" name=\"main.php\" action=\"order_food.php\">
    <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
      <input type=\"submit\" value=\"뒤로\">
      ";


?>


</body>
</html>
