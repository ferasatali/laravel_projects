<!DOCTYPE html>
<html>
<head>
	<title>Student Records</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid black;
		}
		th {
			background-color: #ddd;
			font-weight: bold;
		}
			button {
			background-color: #4CAF50;
			color: white;
			padding: 8px 16px;
			border: none;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Student Records</h1>

	<input type="text" placeholder="Enter roll number to delete" id="search-input"><br>
	<button style="color:red">Delete</button>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Roll Number</th>
				<th>CGPA</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>001</td>
				<td>12345</td>
				<td>3.5</td>
				
			</tr>
			<tr>
				<td>002</td>
				<td>23456</td>
				<td>3.2</td>
				
			</tr>
			<tr>
				<td>003</td>
				<td>34567</td>
				<td>3.8</td>
			
			</tr>
			<tr>
				<td>004</td>
				<td>45678</td>
				<td>3.4</td>
				
			</tr>
		</tbody>
	</table>
<button><a href="insert.html">Insert New Record</a></button>
</body>
</html>
