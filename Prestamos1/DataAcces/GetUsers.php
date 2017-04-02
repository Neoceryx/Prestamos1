<?php

// Add Connection String
include 'Conncetion.php';


{ /* Region Get DataBase INFO */

  // Build the Query
  $Query="SELECT * FROM Users";

  // Exequte Query
  $Stmt=mysql_query($Query, $Conn);

  // Get DataBase INFO
  while ($result = mysql_fetch_array($Stmt)  ) {

    echo "
    <tr>
      <td>".$result[0]."</td>
      <td>".$result[1]."</td>
      <td>".$result[2]."</td>
    </tr>
    ";

  }

} /* End Region */
 ?>
