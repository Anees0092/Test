<?php include "./db_connect.php";
?>
    <?php
       $sql = "SELECT * FROM `employees_info`";
       $result = mysqli_query($conn , $sql);
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Test</title>
    <style>
      .navbar{
        background-color: rgb(255, 255, 0);
        
      }.navbar-brand{
        color: black;
        font-size: 25px;
        font-weight: bolder;
      }
      .navbar ul li {
        color: black;
      }
      .navbar ul li a{
        color: black;
      }
      .navbar ul li a:hover{
        color: red;
      }
    </style>
   
</head>

<body class="text-bg-dark ">
  <!-- navbar__ -->
    <nav class="navbar navbar-expand-lg bg-warning fs-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php  ">Data Log</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="./index.php  ">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./signup.php">Signup</a>
        </li>
        
      
    </div>
  </div>
</nav>
<h1 class="text-center mt-5" >Employee Information</h1>
<!-- showing data from dataase into table -->
<div class="container mt-5">
<table  class="table table-bordered" style="
vertical-align: middle; border:1px solid rgb(244, 243, 243); color:white; font-size: 20px; font-family: sans-serif;">
  <thead>
    <tr>
      <th scope="col" class="text-warning fs-4">id</th>
      <th scope="col" class="text-warning fs-4">Name</th>
      <th scope="col" class="text-warning fs-4">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_assoc($result)):?>
    <tr>
      <td class="text-warning"><?php echo $row['id']?></td>
      <td ><?php echo $row['Name']?></td>
      <td><span><button class="btn btn-warning edit-button view_data" name="action" id="<?php echo $row['id']?>">Details</button>
      <button type="button" name="edit"  class="btn btn-warning edit_data" data-bs-dismiss="modal" id="<?php echo $row['id']?>">Edit</button></span>
    </td>
      
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>

</body>
</html>

<!-- view data modal -->
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                  <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail"> 
                      <input type="hidden" name="employee_id" id="employee_id">
                      <input type="submit" name = "submit" value="Update" id="submit" class="btn btn-primary">

                </div>  

                <div class="modal-footer">  
                     <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary" id="update" data-bs-dismiss="modal">Update</button>
                </div>  
           </div>  
      </div>  
    </div>
    <!-- editmoal -->
    <div id="editData" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
           <form action="#" method="POST" id="update_form">
                <div class="modal-header">  
                  <h4 class="modal-title">Employee Details</h4>  
                  </div>  
                  <div class="modal-body" id="info_update"> 
                </div>  

                <div class="modal-footer">  
                     <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary" id="update" data-bs-dismiss="modal">Update</button>
                </div>  
              </form>
           </div>  
      </div>  
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    
    
 <script>
  $(document).ready(function(){  
    // for showing all data

      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });

      $(document).on('click',".edit_data",function(){
        var edit_id = $(this).attr("id");
        $.ajax({
            url:"edit_data.php",
            method:"post",
            data:{edit_id:edit_id},
            success:function(data){
             $('#info_update').html(data);
             $('#editData').modal("show"); 
            }
        });
      }); 
      $(document).on('click' , '#update' , function(){
         $.ajax({
             url:"save_update.php",
             method :"post",
             data :$('#update_form').serialize(),
             success:function(data){
              $("#editData").modal("hide");
              location.reload();
             }
         });
      }); 
    });  
  
  </script>







