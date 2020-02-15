<?php



include_once("db_connect.php");

      $e_cost = $_POST["e_cost"];
      $p_cost = $_POST["p_cost"];
      $t_cost = $_POST["t_cost"];
      $o_cost = $_POST["o_cost"];
      
      if(isset($_POST["submit"])){


  

 $sql = "INSERT INTO payroll (e_cost, p_cost, t_cost, o_cost) VALUES ('$e_cost','$p_cost','$t_cost','$o_cost')";
      	
      	if (mysqli_query($con,$sql)){

            echo "success";
      	
      }
  }

      
?>