$(document).ready(function () {

  // Hide Users Register form
  $(".js_NewUser").hide();

  // Hide Users info Table
  $("#js_UsersInfo").hide();

  // Get User Information
  $("#js_GetUsers").click(function () {

    $("#js_UsersInfo").toggle();

    $.ajax({
      type:"POST",
      url:"DataAcces/GetUsers.php",
      data:{},
      success:function (data) {

        // Display DataBase on the DOM
        $(".js_UserInfo").html(data);

      },
      error:function () {
        alert("Error");
      }
    });
    // End ajax

  });
  // End click

  // Display Register Users Form
  $("#js_NewUser").click(function () {

    // Show/Hide the Users Register Form
    $(".js_NewUser").toggle();

  });

  // Save New Users
  $("#js_SaveUsr").click(function () {

    var UsrName=$("#js_UserName").val();
    var FstName=$("#js_FirsName").val();

    $.ajax({
      type:"POST",
      url:"DataAcces/AddUsers.php",
      data:{us:UsrName, fs:FstName},
      success:function (data) {

        // Display the info on the user notification
        // alert(data);
        // alert(UsrName + " has been Register");

        $(".js_result").html(data);

      },
      error:function () {
        alert("Error");
      }
    });
    // End ajax


  });


});
// End Scope
