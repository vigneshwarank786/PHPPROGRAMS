<?php
require_once('./db.php');


if(isset($_POST['submit']))
{
    $id=$_GET['id'];
    $emp_name=$_POST['emp_name'];
    $emp_role=$_POST['emp_role'];
    $emp_salary=$_POST['emp_salary'];
    $email=$_POST['emailid'];
    
    $sql="UPDATE it set emp_name='$emp_name',emp_role='$emp_role',emp_salary='$emp_salary',email='$email' where emp_id='$id'";
    $res=mysqli_query($conn,$sql);

if($res)
{
    echo "successfully edited";
}
else{
    echo mysqli_error($conn);
}

    mysqli_close($conn);
    header("location: index.php");
}
else{
    $id=$_GET['id'];

    $sql="SELECT * FROM it where emp_id='$id' ";
    $result=mysqli_query($conn,$sql);
    mysqli_close($conn);
}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
        <div class="button text-end mt-4 ">
            <a type="submit" class="btn btn-danger " href="index.php">Employee Table</a>
        </div>
        <h1 class="text-center">EDIT EMPLOYEE</h1>
        <div class="div p-5">
            <?php 
       
                while($row=mysqli_fetch_assoc($result))
                {
             ?>       
            <form class="form" action="" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <label for="emp_name" class="form-label">Employee Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="emp_name"
                      name="emp_name"
                      value="<?php echo $row['emp_name']?>"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="emp_role" class="form-label">Employe Role</label>
                    <select
                      class="form-select"
                      aria-label="Default select example"
                      name="emp_role"
                    >
                      <option  selected><?php echo strtoupper($row['emp_role'])?></option>
                     <option value="FRONTEND">FRONTEND</option>
                      <option value="BACKEND">BACKEND</option>
                      <option value="FULLSTACK">FULLSTACK</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="emp_salary" class="form-label">Employee Salary</label>
                    <input
                      type="number"
                      class="form-control"
                      id="emp_salary"
                      name="emp_salary"
                      value="<?php echo $row['emp_salary']?>"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                      <label for="emailid" class="form-label">EmailID</label>
                      <input
                        type="email"
                        class="form-control"
                        id="emailid"
                        name="emailid"
                        value="<?php echo $row['email']?>"
                        required
                      />
                    </div>
                </div>
                <div class="col-12 mt-4 text-center">
                  <button class="btn btn-primary" type="submit" name="submit" >Submit form</button>
                </div>
              </form>
              <?php
                }
            ?>
        </div>
      
    </div>
    
  </body>
</html>
