<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
	<body>
		<div>
			<form method="post" action="welcome/search">
				{daysdropdown}
				{timeslotsdropdown}
				{submitBtn}
			</form>
		</div>
		<br>
		<br>
		<div>
			<form method="post" action="welcome/bingo">
				{daysdropdownB}
				{timeslotsdropdownB}
				{submitBtnB}
			</form>
		</div>
		<br>
		<h1>Days</h1>
		<br>
		<table width="100%" border="1">
			{days}
			<tr>
				<th colspan="4">
					{dayofweek}
				</th>
			</tr>
			<tr>
				<th width="10%">Time</th>
				<th width="10%">Course</th>
				<th width="10%">Room</th>
				<th width="10%">Instructor</th>

			</tr>
			{daybooking}
			<tr>
				<td>
					{time}
				</td>
				<td>
					{courseName}
				</td>
				<td>
					{room}
				</td>
				<td>
					{instructor}
				</td>
			</tr>
			{/daybooking}
			{/days}
		</table>

		<br>
		<br>
		<h1>Courses</h1>
		<br>
		<table width="100%" border="1">
			{courses}
			<tr>
				<th colspan="4">
					{code}
				</th>
			</tr>
			<tr>
				<th width="10%">Week Day</th>
				<th width="10%">Time</th>
				<th width="10%">Room</th>
				<th width="10%">Instructor</th>

			</tr>
			{coursebooking}
			<tr>
				<td>
					{weekday}
				</td>
				<td>
					{time}
				</td>
				<td>
					{room}
				</td>
				<td>
					{instructor}
				</td>
			</tr>
			{/coursebooking}
			{/courses}
		</table>

		<br>
		<br>
		<h1>Periods</h1>
		<br>

		<table width="100%" border="1">
			{periods}
			<tr>
				<th colspan="4">

					{time}
				</th>
			</tr>
			<tr>
				<th width="10%">Week Day</th>
				<th width="10%">Course Name</th>
				<th width="10%">Room</th>
				<th width="10%">Instructor</th>

			</tr>
			{periodbooking}

			<tr>
				<td>
					{weekday}
				</td>
				<td>
					{courseName}
				</td>
				<td>
					{room}
				</td>
				<td>
					{instructor}
				</td>
			</tr>
			{/periodbooking}
			{/periods}
		</table>
	</body>
</html>
