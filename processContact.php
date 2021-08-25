<?php

require_once("function.php");

//Collecting information from the contact form in the Index.pho into the data base

$name = $_POST["name"];

$email = $_POST["email"];

$mobile = $_POST["mobile"];

$message = $_POST["message"];

//this was install in the database
function registerNewMember($name, $email, $mobile, $message)
{
    $con =  connect();
    $sql =  $con->prepare("INSERT INTO contact(YourName, YourEmail, Mobile, YourMessage) VALUES
     (:name, :email, :mobile, :message)");

    $sql->bindValue(":name", $name, PDO::PARAM_STR);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":mobile", $mobile);
    $sql->bindValue(":message", $message);

    $sql->execute();

    echo $sql->errorInfo()[2];
}

registerNewMember($name, $email, $phone, $c);
?>
<?php

if ($name !== $email) {
    echo "<script>alert('Thank you!Blessing has received your message, he will get back to you shortly
 .');</script>";
    return;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/CSS/style.css">

    <!-- Favicons -->
    <link href="assets/img/favicon2.png" rel="icon">

    <!-- === Font Style === -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- ===BOX ICONS === -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>Blessing Samuel</title>
</head>

</html>


Thank you
<?php echo $name ?> Blessing has received your message, he will get back to you shortly
