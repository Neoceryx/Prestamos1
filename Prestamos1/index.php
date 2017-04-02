<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h4>Index</h4>

    <a href="DataAcces\GetUsers.php" target="_blank">Get User</a>

    <button id="js_GetUsers" type="button" name="button">
      GET USERS INFO
    </button>

    <button id="js_NewUser" type="button" name="button">
      New User
    </button>

    <hr>
    <h4>Users Information</h4>

    <table id="js_UsersInfo">

      <thead>
        <tr>
          <th>No User</th>
          <th>User Name</th>
          <th>User First Name</th>
        </tr>
      </thead>

      <tbody class="js_UserInfo">
        <!-- Here javascript Put the User Information -->
      </tbody>

    </table>


      <form class="js_NewUser">

        <input id="js_UserName" type="text" name="" value="" placeholder="User Name"> <br>
        <input id="js_FirsName" type="text" name="" value="" placeholder="User First Name"> <br>

        <button id="js_SaveUsr" type="button" name="button">
          Register
        </button>

        <div class="js_result"></div>

      </form>




  </body>

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!--View Controller  -->
  <script type="text/javascript" src="js\GetUsers.js"> </script>


</html>
