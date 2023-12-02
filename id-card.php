<?php 
        $notfound = false;
        include 'config.php';
        $html = '';
        if(isset($_POST['search'])){

             $mat_no = $_POST['mat_no'];

             $sql = "Select * from cards where mat_no='$mat_no' ";

             $result = mysqli_query($conn, $sql);
 
 
             if(mysqli_num_rows($result)>0){
                $html .= "<div class='card' style='width:500px; padding:0;'>";

                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row["name"];
                    $level = $row['level'];
                    $mat_no = $row['mat_no'];
                    $dept = $row['dept'];
                    $email = $row['email'];                    
                    $phone = $row['phone'];
                    $student = $row['student'];
                    $dob = $row['dob'];
                    $image = $row['image'];                    
                    $level =$row["level"];
                
                    // Add the front of the ID card
                    $html .= "
                        <!-- Front of the ID card -->
                        <div class='container' style='text-align:left; border:2px dotted black;'>
                        <div class=''><p class=' h4 text-center'>University Of Calabar</p>  </div>
                            <div class='header text-center'> </div>
                            <div class='container-2'>
                                <div class='box-1'>
                                    <img src='$image' />
                                </div>
                                <div class='box-2'>
                                    <h4>Student ID Card</h4>
                                    <h6>Name: $name</h6>                                    
                                </div>
                                <div class='box-3'>
                                    <img src='assets/images/unical-logo.jpg' alt=''>
                                </div>
                            </div>
                            <div class='container-3 pt-2'>
                                <div class='info-1'>
                                    <div class='id'>
                                        <h4>Matric No</h4>
                                        <p>$mat_no</p>
                                    </div>
                                    <div class='dob'>
                                        <h4>Phone</h4>
                                        <p>$phone</p>
                                    </div>
                                </div>
                                <div class='info-2'>
                                    <div class='join-date'>
                                        <h4>Level</h4>
                                        <p>$level</p>
                                    </div>
                                </div>
                                <div class='info-3 pl-3'>
                                    <div class='email'>
                                        <h4> Department</h4>
                                        <p>$dept</p>
                                    </div>
                                </div>
                                <div class='info-4 pb-2'>
                                    <div class='sign'>
                                        <img src='sign.png' alt='Italian Trulli' class='h-75 w-75'>
                                        <p style='font-size:12px;'>Your Signature</p>
                                    </div>
                                </div class='pb-2'>
                            </div>
                        </div>"; // End of the front of the ID card
                
                    // Add the back of the ID card (you can customize the back image source)
                    $html .= "
                        <!-- Back of the ID card -->
                        <div class='container pt-1 h-100' style='text-align:center; border:2px dotted black;'>
                            <img src='assets/images/16992390_748099838682446_315523580157973998_o.jpg' class='img-fluid' alt='Back of ID Card' />
                        </div>"; // End of the back of the ID card
                }
                
                $html .= "</div>"; // Close the card container
                
             } else {
                // User ID not found, display an error message
                $html = "<div class='error-message'>Student with the matric number Not Found</div>";
            }
            
        }

             ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" href="css/dashboard.css">
    
    <link rel="icon" type="image/png" href="images/favicon.png"/>

    <title>Student ID Card</title>
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">



<style>
body{
   font-family:'arial';
   }

.lavkush img {
  border-radius: 8px;
  border: 2px solid blue;
}
span{

    font-family: 'Orbitron', sans-serif;
    font-size:16px;
}
hr.new2 {
  border-top: 1px dashed black;
  width:350px;
  text-align:left;
  align-items:left;
}
 /* second id card  */
 p{
     font-size: 13px;
     margin-top: -5px;
 }
 .container {
    width: 80vh;
    height: 45vh;
    margin: auto;
    background-color: white;
    box-shadow: 0 1px 10px rgb(146 161 176 / 50%);
    overflow: hidden;
    border-radius: 10px;
}

.header {
    /* border: 2px solid black; */
    width: 73vh;
    height: 10vh;
    margin: 20px auto;
    background-color: white;
    /* box-shadow: 0 1px 10px rgb(146 161 176 / 50%); */
    /* border-radius: 10px; */
    background-image: url(assets/images/barcode3.png);  
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
}

.header h1 {
    color: rgb(27, 27, 49);
    text-align: right;
    margin-right: 20px;
    margin-top: 15px;
}

.header p {
    color: rgb(157, 51, 0);
    text-align: right;
    margin-right: 22px;
    margin-top: -10px;
}

.container-2 {
    /* border: 2px solid red; */
    width: 73vh;
    height: 10vh;
    margin: 0px auto;
    margin-top: -20px;
    display: flex;
}

.box-1 {
    border: 4px solid black;
    width: 90px;
    height: 95px;
    margin: -40px 25px;
    border-radius: 3px;
}

.box-1 img {
    width: 82px;
    height: 87px;
}

.box-2 {
    /* border: 2px solid purple; */
    width: 33vh;
    height: 8vh;
    margin: 7px 0px;
    padding: 5px 7px 0px 0px;
    text-align: left;
    font-family: 'Poppins', sans-serif;
}

.box-2 h2 {
    font-size: 1.3rem;
    margin-top: -5px;
    color: rgb(27, 27, 49);
    ;
}

.box-2 p {
    font-size: 0.7rem;
    margin-top: -5px;
    color: rgb(179, 116, 0);
}

.box-3 {
    /* border: 2px solid rgb(21, 255, 0); */
    width: 8vh;
    height: 8vh;
    margin: 8px 0px 8px 30px;
}

.box-3 img {
    width: 8vh;
}

.container-3 {
    /* border: 2px solid rgb(111, 2, 161); */
    width: 73vh;
    height: 12vh;
    margin: 0px auto;
    margin-top: 10px;
    display: flex;
    font-family: 'Shippori Antique B1', sans-serif;
    font-size: 0.7rem;
}

.info-1 {
    /* border: 1px solid rgb(255, 38, 0); */
    width: 17vh;
    height: 12vh;
}

.id {
    /* border: 1px solid rgb(2, 92, 17); */
    width: 17vh;
    height: 5vh;
}

.id h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.dob {
    /* border: 1px solid rgb(0, 46, 105); */
    width: 17vh;
    height: 5vh;
    margin: 8px 0px 0px 0px;
}

.dob h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.info-2 {
    /* border: 1px solid rgb(4, 0, 59); */
    width: 17vh;
    height: 12vh;
}

.join-date {
    /* border: 1px solid rgb(2, 92, 17); */
    width: 17vh;
    height: 5vh;
}

.join-date h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.expire-date {
    /* border: 1px solid rgb(0, 46, 105); */
    width: 17vh;
    height: 5vh;
    margin: 8px 0px 0px 0px;
}

.expire-date h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.info-3 {
    /* border: 1px solid rgb(255, 38, 0); */
    width: 17vh;
    height: 12vh;
}

.email {
    /* border: 1px solid rgb(2, 92, 17); */
    width: 22vh;
    height: 5vh;
}

.email h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.phone {
    /* border: 1px solid rgb(0, 46, 105); */
    width: 17vh;
    height: 5vh;
    margin: 8px 0px 0px 0px;
}

.info-4 {
    /* border: 2px solid rgb(255, 38, 0); */
    width: 22vh;
    height: 12vh;
    margin: 0px 0px 0px 0px;
    font-size:15px;
}

.phone h4 {
    color: rgb(179, 116, 0);
    font-size:15px;
}

.sign {
    /* border: 1px solid rgb(0, 46, 105); */
    width: 17vh;
    height: 5vh;
    margin: 41px 0px 0px 20px;
    text-align: center;
}

.error-message {
        color: red;
        font-weight: bold;
    }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>

 <!-- Navigation bar start  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="assets/images/codingcush-logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
  </div>
</nav>
<!-- Navigation bar end  -->

  <br>

<div class="row" style="margin: 0px 20px 5px 20px">
  <div class="col-sm-6">
    <div class="card jumbotron">
      <div class="card-body">
        <form class="form" method="POST" action="id-card.php">.
        <label for="exampleInputEmail1">Matric No.</label>
        <input class="form-control mr-sm-2" type="search" placeholder="Enter Id Card No." name="mat_no">
        <small id="emailHelp" class="form-text text-muted">Every student's should have a Matric no.</small>
        <br>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="search">Verify</button>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
      <div class="card">
          <div class="card-header" >
              Here is your Student Id
          </div>
        <div class="card-body" id="mycard">
          <?php echo $html ?>
        </div>
        <br>
        
     </div>
  </div>
<hr>
<button id="demo" class="downloadtable btn btn-primary" onclick="downloadtable()"> Download Id Card</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>

    function downloadtable() {

        var node = document.getElementById('mycard');

        domtoimage.toPng(node)
            .then(function (dataUrl) {
                var img = new Image();
                img.src = dataUrl;
                downloadURI(dataUrl, "staff-id-card.png")
            })
            .catch(function (error) {
                console.error('oops, something went wrong', error);
            });

    }



    function downloadURI(uri, name) {
        var link = document.createElement("a");
        link.download = name;
        link.href = uri;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
        delete link;
    }



</script>
  </body>
</html>