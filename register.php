<?php
include('config.php');

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"];
    $mat_no = $_POST["mat_no"];
    $level =$_POST["level"];
    $dept = $_POST['dept'];
    $dob = $_POST['dob'];
    $student = $_POST['student'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $idid = 'UC/'.rand(10000, 99999);

    // Check if the email field is empty
    if ($name == '' || $mat_no == '') {
        $errorMessage = "Fill empty fields";
    } else {
        // Check if the email already exists in the database
        $sql_check = "SELECT * FROM cards WHERE mat_no = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $result_check = $stmt_check->get_result();

        if ($result_check->num_rows > 0) {
            $errorMessage = "Student with matric number already exists.";
        } else {
            // Insert data into the database
            // image upload 
          $uploaddir = 'assets/uploads/';
          $uploadfile = $uploaddir . basename($_FILES['image']['name']);

      
          if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
              
          } else {
              echo "Possible file upload attack!\n";
          }
            $sql = "INSERT INTO `cards`(`name`, `mat_no`, `level`, `dept`, `dob`, `student`, `email`, `exp_date`, `phone`, `password`, `idid`, `image`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssssssss", $name, $mat_no, $level, $dept, $dob, $student, $email, $exp_date, $phone, $pass, $idid, $uploadfile); 

            if ($stmt->execute()) {
                // Registration successful, send a success email
                $successMessage = "Registered successfully!";
                session_start();
                $_SESSION['idid'] = $idid;
                header("refresh:3;url=thank-you.php");              
                
            } else {
                // Error in registration
                $errorMessage = "Error: " . $stmt->error;
            }

            $stmt->close();
        }

        $stmt_check->close();
    }
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body >
    
<div class="container text-center">
<h1>Welcome to the Electronic id System</h1>
<h3>Register to get your ID</h3>
</div>

    <div class="container px-5">
    <?php if (isset($successMessage)): ?>
                            <div class="alert alert-success" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <?php echo $successMessage; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($errorMessage)): ?>
                            <div class="alert alert-danger" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                <?php echo $errorMessage; ?>
                            </div>
                        <?php endif; ?>
    <div class="card shadow-lg">
        
        <div class="card-body px-5 py-3">

            <form method="POST" enctype="multipart/form-data">
            <div class="form-row">
            <div class="form-group pb-3">
                <label for="inputCity">Student Name</label>
                <input type="text" name="name" class="form-control" id="inputCity">
            </div>
            <div class="form-group pb-3">
                <label for="inputState">Level</label>
                <select name="level" class="form-control">
                <option selected>Choose...</option>
                <option value="100">100</option>
                <option value="200">200</option>
                <option value="300">300</option>
                <option value="400">400</option>
                </select>
            </div>
            <div class="form-group pb-3">
                <label for="inputZip">Date Of Birth</label>
                <input type="date" name="dob" class="form-control">
            </div>
            </div>
            <div class="form-row">
            <div class="form-group pb-3">
                <label for="inputCity">Entry Type</label>
                <input type="text" name="student" class="form-control">
            </div>
            <div class="form-group pb-3">
                <label for="inputState">Email Id</label>
                <input type="text" name="email" class="form-control">
            </div>
            </div>
            
            <div class="form-row">
                <div class="form-group pb-3">
                <label for="id_no">Matric No.</label>
                <input class="form-control" id="mat_no" name="mat_no" ></input>
                </div>
                <div class="form-group pb-3">
                <label for="dept">Department</label>
                <input class="form-control" id="dept" name="dept" ></input>
                </div>
                <div class="form-group pb-3">
                <label for="phone">Phone No.</label>
                <input class="form-control" id="phone" name="phone" ></input>
                </div>
                <div class="form-group pb-3">
                <label for="photo">Photo</label>
                <input type="file" name="image" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Register</button>
            </form>
            </div>
            </div>

    </div>
    </div>
</body>
</html>