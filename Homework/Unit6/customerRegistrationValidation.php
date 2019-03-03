<?php
  include("validations.php"); // Makes your class available to the program
  $formValidations = new validations(); // create new validations object

  $name="";
  $phoneNumber="";
  $radio="";
  $emailAddress="";
  $registration="";
  $fridayDinner="";
  $saturdayLunch="";
  $sundayAwardBrunch="";
  $special="";

  $nameErrMsg="";
  $numberErrMsg="";
  $emailErrMsg="";
  $badgeErrMsg="";
  $registrationErrMsg="";

  $validForm = false;

  if(isset($_POST['prod_submit']) )
  {
    // Check for the honeypot field. If the name is set then it came from a bot
    if(isset($_POST["prod_number"])) {
      //header("Location: http://www.artisticpawprint.com");
      //Jeff, when I uncommented this it would just always catch it and give me the blank form. So somehow
      //the prod_number is getting set without me doing so. Why is it falling into this every time?
    }

    // Get data from name=value pair
    $name = $_POST["name"];
    $phoneNumber = $_POST["phoneNumber"];
    $emailAddress = $_POST["emailAddress"];
    $radio = isset($_POST["radio"]) ? $_POST["radio"] : "";
    $registration = $_POST["registration"];
    $fridayDinner = isset($_POST["fridayDinner"]) ? $_POST["fridayDinner"] : "";
    $saturdayLunch = isset($_POST["saturdayLunch"]) ? $_POST["saturdayLunch"] : "";
    $sundayAwardBrunch = isset($_POST["sundayAwardBrunch"]) ? $_POST["sundayAwardBrunch"] : "";
    $special = $_POST["special"];

    if(!($formValidations->validateName($name))) {
      $nameErrMsg = "Please enter a valid name.";
    }
    // Sanitize name and check if it's empty
    if(!($formValidations->validateUsPhone($phoneNumber))) {
      $numberErrMsg = "Please enter a valid US phone number.";
    }
    //I programmed this to sanitize and accept US numbers
    if(!($formValidations->validateEmail($emailAddress))) {
      $emailErrMsg = "Please enter a valid email.";
    }
    // Make sure the email is in the correct format
    if(!($formValidations->validateRadio($radio))) {
      $badgeErrMsg = "Please select a badge type.";
    }
    // Make sure one is selected
    if(!($formValidations->validateRegistration($registration))) {
      $registrationErrMsg = "Please select a registration type.";
    }
    // Make sure one is selected
    $formValidations->sanitizeSpecialBox($special);
    // Since this isn't required, I just sanitized it

    if($formValidations->validateName($name) && $formValidations->validateUsPhone($phoneNumber)  && $formValidations->validateEmail($emailAddress)  && $formValidations->validateRadio($radio)  && $formValidations->validateRegistration($registration)) {
      header("Location: accepted.html");
    }
    // If all is good, then go to my page
  }
?>
<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>WDV341 Intro PHP - Validating Form</title>
		<style>
      body {
        background-color: #ccffff;
        color: #000066;
      }
  		#orderArea	{
  			width:600px;
  			border:thin solid black;
  			margin: auto auto;
  			padding-left: 20px;
  		}

  		#orderArea h3	{
  			text-align:center;
  		}

  		#prod_number {
  			display: none;
  		}

  		.displayNumber {
  			display: none;
  		}

      .errorMessage {
        color:red;
        font-style:italic;
      }
		</style>
	</head>
	<body>
		<h1>WDV341 Intro PHP</h1>
		<h2>Unit-5 and Unit-6 Self Posting - Form Validation Assignment - Part 2</h2>
		<p>&nbsp;</p>
		<div id="orderArea">
		<form name="form3" method="post" action="">
		  <h3>Customer Registration Form</h3>
		      <p>
		        <label for="name">Name:</label>
		        <input type="text" name="name" id="name" value="<?php echo $name; ?>"><label class="errorMessage"> <?php echo "$nameErrMsg"; ?></label>
		      </p>
		      <p>
		        <label for="phoneNumber">Phone Number:</label>
		        <input type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber; ?>"><label class="errorMessage"><?php echo "$numberErrMsg"; ?></label>
		      </p>
		      <p>
		        <label for="emailAddress">Email Address: </label>
		        <input type="text" name="emailAddress" id="emailAddress" value="<?php echo $emailAddress; ?>"><label class="errorMessage"><?php echo "$emailErrMsg"; ?></label>
		      </p>
		      <p>
		        <label for="registration">Registration: </label>
		        <select name="registration" id="registration">
		          <option value="neg" selected <?php if(isset($registration) && $registration=="") echo "selected"; ?>>Choose Type</option>
		          <option value="attendee" <?php if(isset($registration) && $registration=="attendee") echo "selected"; ?>>Attendee</option>
		          <option value="Presenter" <?php if(isset($registration) && $registration=="Presenter") echo "selected"; ?>>Presenter</option>
		          <option value="volunteer" <?php if(isset($registration) && $registration=="volunteer") echo "selected"; ?>>Volunteer</option>
		          <option value="guest" <?php if(isset($registration) && $registration=="guest") echo "selected"; ?>>Guest</option>
		        </select>
            <label class="errorMessage"> <?php echo "$registrationErrMsg" ?> </label>
		      </p>
		      <p>Badge Holder:</p><label class="errorMessage"> <?php echo "$badgeErrMsg"; ?> </label>
		      <p>
		        <input type="radio" name="radio" id="clip" value="clip" <?php if(isset($radio) && $radio=="clip") echo "checked"; ?>>
		        <label for="clip">Clip</label> <br>
		        <input type="radio" name="radio" id="lanyard" value="lanyard" <?php if(isset($radio) && $radio=="lanyard") echo "checked"; ?>>
		        <label for="lanyard">Lanyard</label> <br>
		        <input type="radio" name="radio" id="magnet" value="magnet" <?php if(isset($radio) && $radio=="magnet") echo "checked"; ?>>
		        <label for="magnet">Magnet</label>
		      </p>
		      <p>Provided Meals (Select all that apply):</p>
		      <p>
		        <input type="checkbox" name="fridayDinner" value="fridayDinner" <?php if($fridayDinner=="fridayDinner") echo "checked"; ?>>
		        <label for="fridayDinner">Friday Dinner</label><br>
		        <input type="checkbox" name="saturdayLunch" value="saturdayLunch" <?php if(isset($saturdayLunch) && $saturdayLunch=="saturdayLunch") echo "checked"; ?>>
		        <label for="saturdayLunch">Saturday Lunch</label><br>
		        <input type="checkbox" name="sundayAwardBrunch" value="sundayAwardBrunch" <?php if(isset($sundayAwardBrunch) && $sundayAwardBrunch=="sundayAwardBrunch") echo "checked"; ?>>
		        <label for="sundayAwardBrunch">Sunday Award Brunch</label>
		      </p>
		      <p>
		        <label for="special">Special Requests/Requirements: (Limit 200 characters)</label><br>
		        <textarea name="special" cols="40" rows="5" id="special"></textarea>
		      </p>
					<p class="displayNumber">
						<label for="prod_number">Product Number: </label>
						<input type="text" name="prod_number" id="prod_number" value="<?php echo $prod_number; ?>">
					</p>
		  <p>
		    <input type="submit" name="prod_submit" id="prod_submit" value="Submit">
				<input type="reset" name="Reset" id="button" value="Reset">
		  </p>
		</form>
		</div>
	</body>
</html>
