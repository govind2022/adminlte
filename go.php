<?php
require_once('../../config/db.php');
require_once('../../config/define.php');
require_once('../../helper/functions.php');

?>
<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Registered User List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="manageuser1" class="table table-bordered table-striped">
            <thead>
            <table>
            <tr>
                
                <td>NAME</td>
                <td>Email</td>
                <td>Address</td>
                <td>City</td>
        </tr>
            </thead>
                        <tbody id="userdata">
            
            </tbody>
            <tfoot>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>City</th>
              
            </tr>
            </tfoot>

<?php

if ($result->num_rows > 0){ 

    while($row = $result->fetch_assoc()){



?>

<tr>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Address"]; ?></td>
<td><?php echo $row["City"]; ?></td>
    
<td> <img src="C:\xampp\htdocs\adminlet\adminlte\images\">
<td><a href=view.php>view</a>
<td><a href=delete.php>delete</a>

</tr>
   <?php 
    }
}
?>
</table>

</head>
</html>  
