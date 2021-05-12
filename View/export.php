<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "projet");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM arti";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>contenue article</th>  
                         <th>age</th>  
       <th>contact</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["CIN"].'</td>  
                         <td>'.$row["FullName"].'</td>  
                         <td>'.$row["Age"].'</td>  
       <td>'.$row["Email"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
