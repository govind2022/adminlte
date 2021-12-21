function manageUser(){
    $.ajax({
        type:'get',
        url:'controller/user/userlist.php',
        cache: false,
        success:function(response){
          var jsonData = JSON.parse(response);
          console.log(response);
           // user is logged in successfully in the back-end
           // let's redirect
           if (jsonData.success == true)
           {
                console.log(JSON.parse(jsonData.data));
                var tableData = JSON.parse(jsonData.data);
                var tablerow ='';
                $.each(tableData,function(k,v){
                    tablerow = tablerow+"<tr><td>"+v.name+"</td><td>"+v.email+"</td><td>"+v.address+"</td><td>"+v.city+"</td><td>"+v.status+"</td></tr>";
                    

                    

                    console.log(tablerow);
                });
                $("#userdata").append(tablerow);
                $("#manageuser1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                  }).buttons().container().appendTo('#manageuser1_wrapper .col-md-6:eq(0)');

                  
                //   $('#manageuser2').DataTable({
                //     "paging": true,
                //     "lengthChange": false,
                //     "searching": false,
                //     "ordering": true,
                //     "info": true,
                //     "autoWidth": false,
                //     "responsive": true,
                //   });
           }
        },
        error: function (exception) {
          console.log(exception);        
          return false;
        }
    });
}