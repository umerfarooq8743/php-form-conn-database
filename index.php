<?php
$insert= false;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$database="tour";
$con=mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("connection to the database failed due to".mysqli_connect_error());
}
// echo"succes";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$gender = $_POST['gender'];
$comment = $_POST['comment'];
$sql=" INSERT INTO `pak travels`( `name`, `email`, `password`, `phone`, `age`, `city`, `state`, `zip`, `gender`, 
`comment`, `date`) VALUES ('$name', '$email', 
'$password', '$phone', '$age', '$city', '$state', '$zip', '$gender', '$comment', current_timestamp());";
// echo $sql;
if($con ->query($sql) == true){
//    echo"success"
$insert = true;
}else{
    // echo"error $sql<br> $con->error";
}
$con ->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="tour2.jpg" class="bg" alt="tour">
    <div class="container">

        <form action="index.php" method="post">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row mb-3">

                        <div class="col-sm-10">
                            <h1>
                                Welcome To Travel Agency
                            </h1>
                            <p>
                                Fill your form for confirmation
                            </p>
                            <?php
                            if($insert == true){
                                echo "<p class='submitmsg'>
                                Thanksyou For Submitting The Form
                            </p>";
                            }
                            ?>
                            <input type="text" name="name" placeholder="Name" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">

                        <div class="col-sm-10">
                            <input type="email" name="email" placeholder="Email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">

                        <div class="col-sm-10">
                            <input type="password" name="password" placeholder="Password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3">

                            <div class="col-sm-10">
                                <input type="number" name="phone" placeholder="Phone Number" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">

                            <div class="col-sm-10">
                                <input type="number" name="age" placeholder="Age" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-5">

                            <input type="text" placeholder="City" name="city" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-5">

                            <select id="inputState" placeholder="State" name="state" class="form-select">
                                <option selected>Pakistan</option>
                                <option>IAus</option>
                                <option>Usa</option>
                                <option>Afg</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control" name="zip" placeholder="ZIPCODE" id="inputZip">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <select id="inputState" placeholder="Enter Your Gender" name="gender" class="form-select">
                                <option selected>Enter Your Gender</option>
                                <option>Male</option>
                                <option>Female</option>

                            </select>
                        </div>
                    </div>
                    <textarea class="form-control mb-3" name="comment" placeholder="Leave a comment here"
                        id="floatingTextarea"></textarea>
                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    I Agree
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <button type="submit" class=" col-md-8 btn btn-outline-light">Submit</button>
                        <div class="col-md-2"></div>
                       
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </form>
    </div>
    <script src="app.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>