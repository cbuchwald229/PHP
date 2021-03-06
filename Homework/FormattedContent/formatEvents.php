<?php
	//Get the Event data from the server.
  include("../Unit7/connectPDO.php");

  $stmt = $conn->prepare("SELECT event_id,event_name,event_description, event_presenter, event_date, event_time FROM wdv341_event_class ORDER BY event_id");
  $stmt->execute();

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Intro PHP  - Display Events Example</title>
    <style>
		.eventBlock{
			width:500px;
			margin-left:auto;
			margin-right:auto;
			background-color:#CCC;
		}

		.displayEvent{
			text_align:left;
			font-size:18px;
		}

		.displayDescription {
			margin-left:100px;
		}
	</style>
</head>

<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Example Code - Display Events as formatted output blocks</h2>
    <h3>??? Events are available today.</h3>

<?php
	//Display each row as formatted output in the div below
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
    echo "<tr>";
      echo "<td>" . $row['event_id'] . "</td>";
      echo "<td>" . $row['event_name'] . "</td>";
      echo "<td>" . $row['event_description'] . "</td>";
    echo "</tr>";
  }
?>
	<p>
        <div class="eventBlock">
            <div>
            	<span class="displayEvent">Event:</span>
                <span>Presenter:</span>
            </div>
            <div>
            	<span class="displayDescription">Description:</span>
            </div>
            <div>
            	<span class="displayTime">Time:</span>
            </div>
            <div>
            	<span class="displayDate">Date:</span>
            </div>
        </div>
    </p>

<?php
	//Close the database connection
  $stmt = null;
  $conn = null;
?>
</div>
</body>
</html>
