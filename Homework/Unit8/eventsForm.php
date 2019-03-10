<?php
  include("../Unit7/connectPDO.php"); // Makes your class available to the program
  include("eventValidations.php"); // Makes your class available to the program

  $eventValidations = new eventValidations(); // create new validations object

  $eventId="";
  $eventName="";
  $eventDescription="";
  $eventPresenter="";
  $eventDate="";
  $eventTime="";

  $eventIdErrMsg="";
  $eventNameErrMsg="";
  $eventDescriptionErrMsg="";
  $eventPresenterErrMsg="";
  $eventDateErrMsg="";
  $eventTimeErrMsg="";

  $validForm = false;

  if(isset($_POST['event_submit']) )
  {
    // Check for the honeypot field. If the name is set then it came from a bot
    if(isset($_POST["prod_number"])) {
      //header("Location: http://www.artisticpawprint.com");
      //Jeff, when I uncommented this it would just always catch it and give me the blank form. So somehow
      //the prod_number is getting set without me doing so. Why is it falling into this every time?
    }

    // Get data from name=value pair
    $eventId=$_POST["eventId"];
    $eventName=$_POST["eventName"];
    $eventDescription=$_POST["eventDescription"];
    $eventPresenter=$_POST["eventPresenter"];
    $eventDate=$_POST["eventDate"];
    $eventTime=$_POST["eventTime"];

    if(!($eventValidations->validateId($eventId))) {
      $eventIdErrMsg = "Please enter a valid numeric event id.";
    }

    if(!($eventValidations->validateName($eventName))) {
      $eventNameErrMsg = "Please enter an event name.";
    }

    if(!($eventValidations->validateDescription($eventDescription))) {
      $eventDescriptionErrMsg = "Please enter an event description.";
    }

    if(!($eventValidations->validatePresenter($eventPresenter))) {
      $eventPresenterErrMsg = "Please enter a valid presenter name.";
    }

    if(!($eventValidations->validateDateEntry($eventDate))) {
      $eventDateErrMsg = "Please enter a valid date: YYYY-MM-DD.";
    }

    if(!($eventValidations->validateTime($eventTime))) {
      $eventTimeErrMsg = "Please enter a valid time: HH:mm.";
    }

    if($eventValidations->validateId($eventId) && $eventValidations->validateName($eventName)  && $eventValidations->validateDescription($eventDescription)  && $eventValidations->validatePresenter($eventPresenter)  && $eventValidations->validateDateEntry($eventDate) && $eventValidations->validateTime($eventTime)) {
      $sql = "INSERT INTO wdv341_event (event_id, event_name, event_description, event_presenter, event_date, event_time) VALUES ($eventId, '$eventName', '$eventDescription', '$eventPresenter', '$eventDate', '$eventTime')";
      if ($conn->query($sql) == True) {
          echo " New record created successfully";
      }
    }
  }
?>
<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>WDV341 Intro PHP - Validating Form</title>
		<style>
      body {
        background-color: #40e0d0;
        color: purple;
      }
  		#eventArea	{
  			width:600px;
  			border:thin solid black;
  			margin: auto auto;
  			padding-left: 20px;
  		}

  		#eventArea h3	{
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
		<h2>Unit 8 - SQL Insertion Assignment</h2>
		<p>&nbsp;</p>
		<div id="eventArea">
		<form name="eventForm" method="post" action="">
		  <h3>Event Registration Form</h3>
      <p>
        <label for="eventId">Event ID</label>
        <input type="text" name="eventId" id="eventId" value="<?php echo $eventId; ?>"><label class="errorMessage"> <?php echo "$eventIdErrMsg"; ?></label>
      </p>
      <p>
        <label for="eventName">Event Name</label>
        <input type="text" name="eventName" id="eventName" value="<?php echo $eventName; ?>"><label class="errorMessage"> <?php echo "$eventNameErrMsg"; ?></label>
      </p>
      <p>
        <label for="eventDescription">Event Description</label>
        <input type="text" name="eventDescription" id="eventDescription" value="<?php echo $eventDescription; ?>"><label class="errorMessage"> <?php echo "$eventDescriptionErrMsg"; ?></label>
      </p>
      <p>
        <label for="eventPresenter">Event Presenter</label>
        <input type="text" name="eventPresenter" id="eventPresenter" value="<?php echo $eventPresenter; ?>"><label class="errorMessage"> <?php echo "$eventPresenterErrMsg"; ?></label>
      </p>
      <p>
        <label for="eventDate">Event Date</label>
        <input type="text" name="eventDate" id="eventDate" value="<?php echo $eventDate; ?>"><label class="errorMessage"> <?php echo "$eventDateErrMsg"; ?></label>
      </p>
      <p>
        <label for="eventTime">Event Time</label>
        <input type="text" name="eventTime" id="eventTime" value="<?php echo $eventTime; ?>"><label class="errorMessage"> <?php echo "$eventTimeErrMsg"; ?></label>
      </p>
			<p class="displayNumber">
				<label for="prod_number">Product Number: </label>
				<input type="text" name="prod_number" id="prod_number" value="<?php echo $prod_number; ?>">
			</p>
		  <p>
		    <input type="submit" name="event_submit" id="event_submit" value="Submit">
				<input type="reset" name="Reset" id="button" value="Reset">
		  </p>
		</form>
		</div>
	</body>
</html>
