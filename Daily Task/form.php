<!DOCTYPE html>
<html>

<!--- 
    Yash Patel , Student number : 000842226, Date : Sept 29, 2021 --->
<?php
$date = filter_input(INPUT_GET, "date", FILTER_SANITIZE_SPECIAL_CHARS);


// Data for Task 1 with description, start time and end time.
$description1 = filter_input(INPUT_GET, "Description1",  FILTER_SANITIZE_SPECIAL_CHARS); 
$starttime1 = filter_input(INPUT_GET,"Starttime1", FILTER_SANITIZE_SPECIAL_CHARS );         
$endtime1 = filter_input(INPUT_GET,"Endtime1", FILTER_SANITIZE_SPECIAL_CHARS );

// Data for Task 2 with description, start time and end time.
$description2 = filter_input(INPUT_GET, "Description2",  FILTER_SANITIZE_SPECIAL_CHARS);
$Starttime_task2 = filter_input(INPUT_GET, "StartTime_Task_2",FILTER_SANITIZE_SPECIAL_CHARS);
$Endtime_task2 = filter_input(INPUT_GET, "EndTime_Task_2", FILTER_SANITIZE_SPECIAL_CHARS);

// Data for Task 3 with description, start time and end time.
$description3 = filter_input(INPUT_GET, "Description3",  FILTER_SANITIZE_SPECIAL_CHARS);
$Starttime_task3= filter_input(INPUT_GET, "StartTime_Task_3", FILTER_SANITIZE_SPECIAL_CHARS);
$ENDtime_task3= filter_input(INPUT_GET, "endTime3", FILTER_SANITIZE_SPECIAL_CHARS);

// Data for Task 4 with description, start time and end time.
$description4 = filter_input(INPUT_GET, "Description4",  FILTER_SANITIZE_SPECIAL_CHARS);
$Starttime_task4= filter_input(INPUT_GET, "startTime4", FILTER_SANITIZE_SPECIAL_CHARS);
$ENDtime_task4= filter_input(INPUT_GET, "endTime4", FILTER_SANITIZE_SPECIAL_CHARS);

// Data for Task 5 with description, start time and end time.
$description5 = filter_input(INPUT_GET, "Description5",  FILTER_SANITIZE_SPECIAL_CHARS);
$Starttime_task5= filter_input(INPUT_GET, "startTime5", FILTER_SANITIZE_SPECIAL_CHARS);
$ENDtime_task5= filter_input(INPUT_GET, "endTime5", FILTER_SANITIZE_SPECIAL_CHARS);


?>
<head>
    <title>Daily Task View </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Adding the css stylesheet for view page--->
    <link rel="stylesheet" href="css/Viewform.css">
</head>


<body class= "body">

<div class = "date">
<P> DATE: <?= $date?></P>
</div>
<br><br>

<div class = "tasks">

<div class="task">
<p>Task 1: <?= $description1?>

<div>
 Start time:  <?= $starttime1?>
</div>

End time:  <?= $endtime1?></p>
</div>
</div>


<br>
<div class="tasks">
<p> Task 2:  <?= $description2 ?></p>

<P> Start time: <?= $Starttime_task2 ?> </P>
<P> End Time: <?= $Endtime_task2 ?> </p>

</div>
<br>
<div class="tasks">
<p>Task 3: <?= $description3 ?></p>

<p> Start time: <?= $Starttime_task3 ?> </p>
<p> End Time: <?= $ENDtime_task3 ?> </p>
</div>

<br>
<div class="tasks">
<p>Task 4: <?= $description4 ?></p>

<p> Start time: <?= $Starttime_task4 ?> </p>
<p>End Time: <?= $ENDtime_task4 ?> </p>
</div>
<br>

<div class="tasks">
<p>Task 5: <?= $description5 ?></p>

<p> Start time: <?= $Starttime_task5 ?> </p>
<p>End Time: <?= $ENDtime_task5 ?> </p>
</div>

</div>

</body>

</html>