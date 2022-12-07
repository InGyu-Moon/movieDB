<?php
  $user_id=$_POST['id'];

  $connect = mysqli_connect("localhost","root","","movie");

  $sql = "select * from 음식;";
  $result = mysqli_query($connect,$sql);

  $fields = mysqli_num_fields($result);
?>
<table width = 800 border=1 cellpadding=10 >
  <tr>
    <td bgcolor=lightblue align=center>NUM</td>
    <td bgcolor=lightblue align=center>음식</td>
    <td bgcolor=lightblue align=center>가격</td>
    <td bgcolor=lightblue align=center>주문</td>
  </tr>
  <?php
    while( $row = mysqli_fetch_row($result))
    {
      echo "<tr>";
      for($i=0;$i<$fields;$i++)
      {
        if($i==2){
          echo "<td align=center> $row[$i] 원 </td>";
        }
        else{
          echo "<td align=center> $row[$i] </td>";
        }
      }
      echo "<td align=center>
      <form method=\"post\" name=\"order\" action=\"order_done.php\">
      <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
      <label><input type=\"hidden\" value = \"$row[0]\" name=\"food_num\" /></label>
      <p><input type=\"submit\" value=\"주문\"></p>
      </form>
      </td>";

      echo "</tr>";
    }
    mysqli_close($connect);

    //영화 예메
    echo "
    <p>
    <form method=\"post\" name=\"go_to_movie\" action=\"movie_ticket.php\">
    <label><input type=\"hidden\" value = \"$user_id\" name=\"id\" /></label>
    <p><input type=\"submit\" value=\"영화예매\"></p>
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
