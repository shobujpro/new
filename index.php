<!DOCTYPE html>
<html>
<head>
	<title>Check</title>
</head>
<body>
		<p>Enter a number and click Ok</p>
		<input type="number" name="" id="id1" max="300" min="100" required>
		<button onclick="checkNumber()">Ok</button>
		<p id="demo"></p>



		<script>
			function checkNumber(){
				var x = document.getElementById('id1');
				if(!x.checkValidity()){
					document.getElementById('demo').innerHTML = x.validationMessage;
				}
				else{
					document.getElementById('demo').innerHTML = x.willValidate;
				}
			}
			

		</script>
</body>
</html>