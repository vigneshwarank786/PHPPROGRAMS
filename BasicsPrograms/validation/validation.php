<?php

$usernameError = $passwordError="";
$username = $password="";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST['username']))
    {
        $usernameError="Username is Required";
    }
    else{
        $username=test_input($_POST["username"]);
    }

    if(empty($_POST['password']))
    {
        $passwordError="Password is Required";
    }
    else{

        $password=test_input($_POST["password"]);
    }

    
}


function test_input($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
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
    <style>
        .error{
            color: red;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <h1 class="text-center">Login Form</h1>
        <div class="div p-5">
            <form class="form" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <label for="username" class="form-label">Username</label>
                    <input
                      type="text"
                      class="form-control"
                      id="username"
                      name="username"
                      
                    />
                    <span class="error"> * 
                            <?php echo $usernameError ?>
                    </span>
                  </div>
                  <div class="col-md-6">
                      <label for="password" class="form-label">Password</label>
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        
                      />
                      <span class="error"> * 
                            <?php echo $passwordError ?>
                    </span>
                    </div>
                </div>
                </div>
                <div class="col-12 mt-4 text-center">
                  <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                </div>
              </form>
        </div>
    </div>
  </body>
</html>