<?php
include('config.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mat_no = $_POST['mat_no'];
    $idid = $_POST['idid'];
    

    // Retrieve user data from the database based on the provided email
    $sql = "SELECT id, mat_no, idid FROM cards WHERE mat_no = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $mat_no);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    

    // Verify the password
    if ($user && $idid === $user['idid']) {
        // Successful login
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: id-card.php");
        exit();
    } else {
        // Invalid login
        $errorMessage = "Invalid IDID or password.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body >
    
<div class="container text-center">
<h1>Welcome to the Electronic id System</h1>
<h3>login</h3>
</div>

    <div class="container px-5">
    <div class="card shadow-lg">
        
        <div class="card-body">           
        <form method="POST">
            <div class="form-floating mt-3">
            <input type="text" class="form-control" id="mat_no" placeholder="Matric No" name="mat_no">
            <label for="mat_no">Matric No</label>
            </div>
            <div class="form-floating mt-3 pb-4">
            <input type="text" class="form-control" id="idid" placeholder="ID Number" name="idid">
            <label for="idid">ID Number</label>
            </div>

            <button class="btn btn-primary w- py-2" type="submit">Login</button>
            <div class="py-3 text-center"><span>Don't have an account <a href="register.php" class="text-primary">Register</a></span></div>            
        </div>
        </form>
    </div>
    </div>
</body>
</html>