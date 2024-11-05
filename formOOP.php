<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .container:nth-child(1){
        background-color: #e1e1e1;
    }
</style>
<body>
    <div class="container mt-5 w-25 p-3 rounded">
        <form action="" method="post">
            <div class="form-group">
                <label for="fname" class="form-label">First Name:</label>
                <input type="text" name="firstName" class="form-control" id="fname">
            </div>
            <div class="form-group">
                <label for="lname" class="form-label">First Name:</label>
                <input type="text" name="lastName" class="form-control" id="lname">
            </div>
           <div class="form-group">
            <label for="dob" class="form-label">Date of birth:</label>
            <input type="text" name="dob" class="form-control" id="dob">
           </div>
           <div class="form-group">
                <label for="email" class="form-label">Email :</label>
                <input type="email" name="email" class="form-control" id="email">
           </div>
            <div class="form-group">
                <label for="phone" class="form-label">Phone Number :</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" name="btnSubmit" class="btn mt-3 btn-success me-2">Submit</button>
                <button type="reset"  class="btn mt-3 btn-danger">Reset</button>
            </div>
        </form>
    </div>
    
</body>
</html>
<?php
    include 'People.php';
    if(isset($_POST['btnSubmit'])){
        $fname=$_POST['firstName'];
        $lname=$_POST['lastName'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $person=new People($fname,$lname,$dob,$email,$phone);
        $person->showData();
    }
    
?>