<?php

  include "dbcon.php";

  $qry="SELECT `state`,SUM(`confirmed`) `conf` FROM `cases` GROUP BY `state`";

  $result=mysqli_query($con,$qry);
  $data=array();
  while ($row=mysqli_fetch_assoc($result)) {
    $data[]=$row;
  }

  echo json_encode($data);

 ?>
