$(function () {
  //login submit
  $("#loginSubmit").on('click',function(e){
     e.preventDefault();
      var username = $("#loginUsername").val();
      var password = $("#loginPassword").val();

      var dataParam={"username":username,"password":password};
      console.log(dataParam);
      $.ajax({
          type:'post',
          url:'controller/loginprocess.php',
          data:dataParam,
          dataType: "json",
          cache: false,
          success:function(response){
            var jsonData = JSON.parse(JSON.stringify(response));
            console.log(jsonData);
             // user is logged in successfully in the back-end
             // let's redirect
             if (jsonData.success == true)
             {
                 location.href = 'index.php';
             }
          },
          error: function (exception) {
            console.log(exception);
            $("#loginerror").text('login failed');
            return false;
          }
      });
  });

  //navbar


  //sidebar

});