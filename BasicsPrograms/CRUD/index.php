<?php
require_once("./db.php");

$sql = "SELECT * FROM IT";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
    <div class="button text-center mt-4 ">
<a type="submit" class="btn btn-primary" href="form.html">ADD NEW</a>
</div>

<div class=" mt-4 text-start p-5">
<div class="table-responsive">
    <table
        class="table table-striped table-hover table-borderless  align-middle">
        <thead class="table-dark">
            <caption>
               Employee Datas
            </caption>
            <tr>
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Employee Role</th>
                <th>Employee Salary</th>
                <th>Email ID</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) 
            {
                while ($row = mysqli_fetch_assoc($result)) 
                {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['emp_id']; ?>
                        </td>
                        <td>
                            <?php echo $row['emp_name']; ?>
                        </td>
                        <td>
                            <?php echo $row['emp_role']; ?>
                        </td>
                        <td>
                            <?php echo $row['emp_salary']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                        <a type="submit" class="btn btn-primary" href="edit.php?id=<?php echo $row['emp_id']; ?>">Update</a>
                        </td>
                        <td>
                        <a type="submit" class="btn btn-danger" href="delete.php?id=<?php echo $row['emp_id'];?>" onclick="myfunction()">Delete</a>
                            </td>
                        <tr />
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
   
    </div>
<script>
    function myfunction()
    {
        alert("Are you sure want to delete");
    }
</script>
</body>

</html>


