<?php
  $showData = false;
  $output = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $country = htmlspecialchars($_POST['country']);
    $gender = htmlspecialchars($_POST['gender']);
    $about = htmlspecialchars($_POST['about']);
    $showData = true;

    $output = "
      <div class='display-data'>
        <h2>Application Submitted Successfully!</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Date of Birth:</strong> $dob</p>
        <p><strong>Country:</strong> $country</p>
        <p><strong>Gender:</strong> $gender</p>
        <p><strong>About:</strong> $about</p>
      </div>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <nav>
    <a href="index.html">Home</a> |
    <a href="register.php" class="active">Application Form</a>
  </nav>
  <section class="form-container">
    <h1>Application/Registration Form</h1>
    <?php
      if ($showData) {
        echo $output;
      } else {
    ?>
    <form method="post" action="register.php" id="applicationForm">
      <label for="name">Full Name:</label>
      <input type="text" required id="name" name="name" />

      <label for="email">Email:</label>
      <input type="email" required id="email" name="email" />

      <label for="dob">Date of Birth:</label>
      <input type="date" required id="dob" name="dob" />

      <label for="country">Country:</label>
      <select required name="country" id="country">
        <option value="">Select Country</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
      </select>

      <label>Gender:</label>
      <input type="radio" id="male" name="gender" value="Male" required />
      <label for="male" class="inline">Male</label>
      <input type="radio" id="female" name="gender" value="Female" required />
      <label for="female" class="inline">Female</label>
      <input type="radio" id="other" name="gender" value="Other" required />
      <label for="other" class="inline">Other</label>

      <label for="about">About You:</label>
      <textarea id="about" name="about" rows="3" required></textarea>

      <button type="submit" class="btn-main">Submit Application</button>
    </form>
    <?php } ?>
  </section>
</body>
</html>
