<?php  
       include "./db_connect.php";
?>
<?php
       if(isset($_POST["edit_id"])){
        $id=$_POST["edit_id"];
        $sql = ("SELECT * FROM `employees_info` WHERE `id` = '$id'");
        $result = mysqli_query($conn ,$sql);
        while($row  = mysqli_fetch_assoc($result)){
              $id = $row['id'];
              $fname = $row['first_name'];
              $lname = $row['last_name'];
              $name = $row['Name'];
        }
       }
?>

                  <input type="hidden" name="edit_id" value="<?php echo $id ?>"  class="form-control" id="edit_id" aria-describedby="emailHelp">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                   <input type="text" name="first_name"  class="form-control" id="first_name" value="<?php echo $fname ?>" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Last Name</label>
                    <input type="text" name="last_name" value="<?php echo $lname ?>"  class="form-control" id="last_name">
              </div>
              <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Full Name</label>
                     <input type="text" name="full_name" value="<?php echo $name ?>"  class="form-control" id="full_name" aria-describedby="emailHelp">
               </div>