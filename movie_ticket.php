<?php
  $connect = mysqli_connect("localhost","root","","movie");
  $user_id=$_POST['id'];
  $sql = "select * from 영화;";
  $result = mysqli_query($connect,$sql);

  $fields = mysqli_num_fields($result);
?>
<table width = 800 border=1 cellpadding=20 >
  <tr>
    <td bgcolor=ivory align=center>영화이름</td>
    <td bgcolor=ivory align=center>등급</td>
    <td bgcolor=ivory align=center>포스터</td>
    <td bgcolor=ivory align=center>결제</td>
  </tr>
  <?php
    $count =1;
    while( $row = mysqli_fetch_row($result))
    {
      echo "<tr>";
      for($i=0;$i<$fields;$i++)
      {

          echo "<td align=center> $row[$i] </td>";

      }

      if($count == 1){
        echo "<td align=center> <img src='movie1.png'/> </td>";
        echo "<td align=center>
        <form method=\"post\" name=\"order\" action=\"order_movie1.php\">
        <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
        <label><input type=\"hidden\" value = \"$row[0]\" name=\"movie_name\" /></label>
        <p><input type=\"submit\" value=\"결제하기\"></p>
        </form>
        </td>";
      }
      else if($count ==2){
        echo "<td align=center> <img src='movie2.png'/> </td>";
        echo "<td align=center>
        <form method=\"post\" name=\"order\" action=\"order_movie2.php\">
        <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
        <label><input type=\"hidden\" value = \"$row[0]\" name=\"movie_name\" /></label>
        <p><input type=\"submit\" value=\"결제하기\"></p>
        </form>
        </td>";
      }
      else if($count == 3){
        echo "<td align=center> <img src='movie3.png'/> </td>";
        echo "<td align=center>
        <form method=\"post\" name=\"order\" action=\"order_movie3.php\">
        <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
        <label><input type=\"hidden\" value = \"$row[0]\" name=\"movie_name\" /></label>
        <p><input type=\"submit\" value=\"결제하기\"></p>
        </form>
        </td>";
      }

    ++$count;
  }


    mysqli_close($connect);

    //음식 예메
    echo "
    <p>
    <form method=\"post\" name=\"go_to_food\" action=\"order_food.php\">
    <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
    <p><input type=\"submit\" value=\"음식예매\"></p>
    </form>
    ";
    //로그아웃
    echo "
    <form method=\"post\" name=\"logout\" action=\"main.php\">
    <p><input type=\"submit\" value=\"로그아웃\"></p>
    </form>
    </p>
    ";


  ?>
