<?php include("connection.php");

session_start();

$id = $_GET['id'];

$userprofile = $_SESSION['username'];

if($userprofile == true) {

} else {
    header('location:login.php');
}

$query = "SELECT * FROM form where id= '$id'";
$data = mysqli_query($conn, $query);

// $total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
    <style>
    body {
        background: linear-gradient(135deg, #71b7e6, #9b59b6); 
    }
    </style>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
        <div class="title">
            UPDATE VENDOR'S DETAIlS
        </div>
        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" value="<?php echo $result['fname']; ?>" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label>Username</label>
                <input type="text" value="<?php echo $result['user']; ?>" class="input" name="user" required>
            </div>

            <div class="input_field">
                <label>Email Address</label>
                <input type="text" value="<?php echo $result['email']; ?>" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text"  value="<?php echo $result['phone']; ?>" class="input" name="phone" required>
            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" value="<?php echo $result['password']; ?>" class="input" name="password" required>
            </div>

            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password"  value="<?php echo $result['confirm']; ?>" class="input" name="confirm" required>
            </div>

            <div class="input_field">
                <label>Aadhar Number</label>
                <input type="text" value="<?php echo $result['adhar']; ?>" class="input" name="adhar" required>
            </div>

            <div class="input_field">
                <label>Comapany</label>
                <input type="text" value="<?php echo $result['company']; ?>" class="input" name="company">
            </div>

            <div class="input_field">
                <label>Position</label>
                <input type="text" value="<?php echo $result['position']; ?>" class="input" name="position">
            </div>

            <div class="input_field">
                <label>Start Date</label>
                <input type="text"  value="<?php echo $result['start']; ?>" class="input" name="start" required>
            </div>

            <div class="input_field">
                <label>End Date</label>
                <input type="text"  value="<?php echo $result['end']; ?>" class="input" name="end" required>
            </div>

            <div class="input_field">
                <label>Gender</label>
                <div class="custom_select">

                <select name="gender" required>
                    <option value="">Select</option>
                    <option value="male"
                        <?php
                            if($result['gender'] == 'male')
                            {
                                echo "selected";
                            }
                        ?>
                    >
                    Male</option>
                    <option value="female"
                    <?php
                            if($result['gender'] == 'female')
                            {
                                echo "selected";
                            }
                        ?>
                    >
                    Female</option>
                </select>
                </div>
            </div>
            
            <div class="input_field">
                <label>Temporary Address</label>
                <textarea class="textarea" name="temporary" required><?php echo $result['temporary']; ?>
                </textarea>
            </div>

            <div class="input_field">
                <label>Permanent Address</label>
                <textarea class="textarea" name="permanent" required><?php echo $result['permanent']; ?>
                </textarea>
            </div>

            <div class="input_field">
                <label>Description</label>
                <textarea class="textarea" name="description"><?php echo $result['description']; ?></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to term and condition</p>
            </div>
            <div class="input_field">
                <input type="submit" value="UPDATE DETAILS" class="btn" name="update">
            </div>
        </div>
        </form>
    </div>
</body>
</html>

<?php
// Check if the form is submitted
if(isset($_POST['update'])) {
    $fname = $_POST['fname'];
    $uname = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $adhar = $_POST['adhar'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $gender = $_POST['gender'];
    $temporary = $_POST['temporary'];
    $permanent = $_POST['permanent'];
    $description = $_POST['description'];

    $query = "UPDATE form SET fname='$fname', user='$uname', password='$password', confirm='$confirm', adhar='$adhar', company='$company', position='$position', start='$start', end='$end', gender='$gender', temporary='$temporary', permanent='$permanent', description='$description' WHERE id='$id'";

    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Record Updated')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/crud/display.php" />
        <?php
    } else {
        echo "Failed to Update";
    }
}
?>

