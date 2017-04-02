<?php

// Add Connection String
include 'Conncetion.php';

// Validate Users Register Form values
if ( isset($_POST['us'] ) && isset($_POST['fs']) ) {

  $UsrName= $_POST['us'];
  $FstName= $_POST['fs'];

  // echo $UsrName." :: ".$FstName;

  {/* Region Add Users */

    // Build the query
    $Query="INSERT INTO Users ( Name, FirstName) VALUES
    ( '$UsrName', '$FstName' );";

    // Query Exequte
    $Stmt=mysql_query($Query, $Conn);

    // Handling errors
    if ($Stmt==false) {
      die(mysql_error());
    }

    // Display a success message 
    echo $UsrName." has benn Registered";

  } /* End Region */

}

 ?>
