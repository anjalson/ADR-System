<?php include ('config.php'); ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  ?>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "nelson");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // report Form
    $reportz = mysqli_real_escape_string($db, $_POST['reportz']);
    $caseb = mysqli_real_escape_string($db, $_POST['caseb']);
    // identify the facility
    $faciname = mysqli_real_escape_string($db, $_POST['faciname']);
    $tel = mysqli_real_escape_string($db, $_POST['tel']);
    $facicode = mysqli_real_escape_string($db, $_POST['facicode']);
  	// product identity
  	$brandname = mysqli_real_escape_string($db, $_POST['brandname']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $subject = mysqli_real_escape_string($db, $_POST['subject']);
    // adverse drug reaction
    $reaction = mysqli_real_escape_string($db, $_POST['reaction']);
    $datereact = mysqli_real_escape_string($db, $_POST['datereact']);
    $durreact = mysqli_real_escape_string($db, $_POST['durreact']);
    $xreact = mysqli_real_escape_string($db, $_POST['xreact']);
    $outreact = mysqli_real_escape_string($db, $_POST['outreact']);
    $serious = mysqli_real_escape_string($db, $_POST['serious']);
  	// reporter identity
  	$reporter = mysqli_real_escape_string($db, $_POST['reporter']);
    $repmail = mysqli_real_escape_string($db, $_POST['repmail']);


  	$sql = "INSERT INTO adrreport (reportz, caseb, faciname, tel, facicode, brandname, date, subject, reaction, datereact, durreact, xreact, outreact, serious, reporter, repmail) VALUES ('$reportz', '$caseb', '$faciname', '$tel', '$facicode', '$brandname', '$date', '$subject', '$reaction', '$datereact', '$durreact', '$xreact', '$outreact', '$serious','$reporter', '$repmail')";
  	// execute query
  	mysqli_query($db, $sql);

  		echo '<script type="text/javascript">
            alert("Message sent Successfully!");
            window.location.href = "adrreport.php";
          </script>';
  }
  $result = mysqli_query($db, "SELECT * FROM adrreport");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>
<body>
  <div class="bs-example">
          <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
              <a href="#" class="navbar-brand">
                  <p>Treneyan ADR Report Management System</p>
              </a>
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>
      
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ml-auto">
                     <a href="AdverseDrugReaction.pdf"download class="nav-item nav-link active">Download ADR FAQs</a>
                      <a href="about.php" class="nav-item nav-link active">About US</a>
                      <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                      <a href="FAQ.php" class="nav-item nav-link" target="blank">FAQ's</a>

                      <a href="logout.php">logout</a>
                  </div>
              </div>
          </nav>
  </div>

  <div style="position:relative; center:50px;top:50px;" class="container">
    <form method="POST" action="adrreport.php">
      <h4 style="color:blue;">Report Form</h4>
      <label for="fname">Report Type</label>
          <select name="reportz">
          <option value="Initial">Initial</option>
          <option value="Follow-up">Follow-up</option>
         </select>
      <label for="fname">Case Type</label>
      <select name="caseb">
          <option value="Normal case">Normal case</option>
          <option value="Parent child case">Parent child case</option>
         </select>
      <h4 style="color:blue;">Identify the Facility</h4>
      <label for="fname">Name of Facility</label>
      <input type="text"  name="faciname" placeholder="Name of the facility..">
      <label for="lname">Facility Tel:</label>
      <input type="text"  name="tel" placeholder="Facility Tel..">
      <label for="lname">Facility Code:</label>
      <input type="text"  name="facicode" placeholder="Facility Code.">
      <h4 style="color:blue;">Product Identity</h4>
      <label for="fname">Brand Name:</label>
      <input type="text"  name="brandname" placeholder="Enter the brand name..">
      <label for="fname">Date Receipt:</label>
      <input type="text"  name="date" placeholder="Enter the date receipt..">
      <label for="subject">Explain your Complaint</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
      <h4 style="color:blue;">Adverse Drug Reaction</h4>
      <label for="skin">Skin Reaction</label>
      <input type="text"  name="reaction" placeholder="Did the medication react ..">
      <label for="skin">Onset date reaction</label>
      <input type="text"  name="datereact" placeholder="Date of reaction..">
      <label for="Duration">Duration of Reaction</label>
      <input type="text"  name="durreact" placeholder="Duration of reaction..">
      <label for="Extent">Extent of reaction</label>
        <select name="xreact">
          <option value="Mid">Mid</option>
          <option value="Moderate">Moderate</option>
           <option value="Severe">Severe</option>
        </select>
      <label for="Extent">Outcome of reaction</label>
        <select name="outreact">
          <option value="Recovered">Recovered</option>
          <option value="Recovering">Recovering</option>
           <option value="Not Recovered">Not Recovered</option>
        </select>
      <label for="Extent">Serious Case</label>
        <select name="serious">
          <option value="YES">YES</option>
          <option value="NO">NO</option>
        </select>

      <h4 style="color:blue;">Reporter Identity</h4>
      <label for="fname">Name of Reporter</label>
      <input type="text"  name="reporter" placeholder="Reporter's Name..">
      <label for="lname">Reporter's Email:</label>
      <input type="text"  name="repmail" placeholder="Reporter Email..">
      <input type="submit" name="upload" value="Submit">
       
    </form>
  </div>
</body>
</html>