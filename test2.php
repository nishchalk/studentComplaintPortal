<!DOCTYPE html>

<html>
	<head>
		<title>PHP MySQL Insert Tutorial</title>
		<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
	</head>
	
	<body>
		<form action='insert.php' method='post' id='myform' >
			<p>
				<input type='text' name='username' placeholder='user name' id='username' />
			</p>
			
			<p>
				<input type='password' name='password' placeholder='password' id='password' />
			</p>
			
			<button id='insert'>Insert</button>
			
			<p id='result'></p>
			
			<script src='insert.js'></script>
		</form>
	</body>
</html>