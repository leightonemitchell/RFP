<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portland Historical Tour Reservations</title>
  <meta name="description" content="Register for a race.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=style.css>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
  <div id="wrapper">
      <?php include 'includes/header.inc.html.php'; ?>
      <?php include 'includes/nav.inc.html.php'; ?>
    <main>
      <h1>Registration</h1>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="reservations">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="tour">*Tour:</label>
        <select size="1" name="tour" id="tour">
          <option>Register for a race</option>
          <option value="downtown">Downtown - $50</option>
          <option value="growth">Growth - $80</option>
          <option value="landmarks">Landmarks - $70</option>
        </select>
        <label for="myfname">*First Name:</label>
          <input type="text" name="myfname" id="myfname" required>
        <label for="mylname">*Last Name:</label>
          <input type="text" name="mylname" id="mylname" required>
        <label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required>
        <label for="myphone">Phone:</label>
          <input type="tel" name="myphone" id="myphone">
        <label for="mydate">*Race:</label>
          <input type="date" name="mydate" id="mydate" required>
        <label for="mycomments">*What race(s) are you registering for? Tell us a little about you.</label>
          <textarea name="mycomments" id="mycomments" rows="4" cols="20" required></textarea>
          <input id="mysubmit" type="submit" value="Submit">
      </form>
      </div>
    </main>
      <?php include 'includes/footer.inc.html.php'; ?>
  </div>
</body>
</html>



<?php

$servername = "localhost";
$username = "XXXX";
$password = "XXXXX";
$dbname = "instruct_contactform";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_website = $_POST['website'];
$users_comment = $_POST['comment'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `instruct_contactform`.`contact` (`id`, `name`, `email`, `website`,
        `comment`, `time_stamp`) VALUES (NULL, '$users_name',
        '$users_email', '$users_website', '$users_comment',
        CURRENT_TIMESTAMP);";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<?php
if ((!empty($_POST['fname'])) && (empty ($_POST['honeypot']))) {

try {
    $pdo = new PDO('mysql:host=localhost;dbname=jessica6_ace_db', 'jessica6_ace_db_user', 'MyP4ssWorD1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $event = $_POST['event'];
    $registration = $_POST['registration'];
    $myfname = $_POST['myfname'];
    $mylname = $_POST['mylname'];
    $myaddress = $_POST['myaddress'];
    $mycity = $_POST['mycity'];
    $mystate = $_POST['mystate'];
    $myzipcode = $_POST['myzipcode'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $mygroup = $_POST['mygroup'];
    $subject = $_POST['subject'];


    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO registration SET
          event = :event,
          registration = :registration,
          myfname = :myfname,
          mylname = :mylname,
          myaddress = :myaddress,
          mycity = :mycity,
          mystate = :mystate,
          myzipcode = :myzipcode,
          myemail = :myemail,
          myphone = :myphone,
          mygroup = :mygroup,
          subject = :subject,';
        $s = $pdo->prepare($sql);
        $s->bindValue(':event', $event);
        $s->bindValue(':registration', $registration);
        $s->bindValue(':myfname', $myfname);
        $s->bindValue(':mylname', $mylname);
        $s->bindValue(':myaddress', $myaddress);
        $s->bindValue(':mycity', $mycity);
        $s->bindValue(':mystate', $mystate);
        $s->bindValue(':myzipcode', $myzipcode);
        $s->bindValue(':myemail', $myemail);
        $s->bindValue(':mygroup', $mygroup);
        $s->bindValue(':subject', $subject);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted registration' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs

    include 'success.html.php';

    // Add an else to load the initial page if the initial (line 19) if statement is false

} else {

    include 'registration.html.php';

} //Modify this to include the initial file for this folder
?>