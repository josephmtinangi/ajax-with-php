<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculate Volume</title>

	<style>
		#result {
			display: none;
		}
	</style>

</head>
<body>
	
	<div id="measurements">
		<p>Enter measurements below to determine the total volume.</p>
		<form action="/process_measurements.php" id="measurement-form" method="POST">
			Length: <input type="number" name="length"> <br>
			Width: <input type="number" name="width"> <br>
			Height: <input type="number" name="height"> <br>
			<br>
			<input type="submit" id="html-submit" value="Submit">
			<input type="button" id="ajax-submit" value="Ajax Submit">
		</form>
	</div>

	<div id="result">
		<p>The total volume is: <span id="volume"></span></p>
	</div>

	<script>
		
		var result_div = document.getElementById("result");
		var volume = document.getElementById("volume");

		function postResult(value) {
			volume.innerHTML = value;
			result_div.style.display = 'block';
		}

		function clearResult() {
			volume.innerHTML = '';
			result_div.style.display = 'none';
		}

		function calculateMeasurements() {
			clearResult();

			var form = document.getElementById("measurement-form");
			var action = form.getAttribute("action");

			// determine form actionn
			// gather form data

			var xhr = new XMLHttpRequst();
			xhr.open('POST', action, true);
			xhr.sendRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequst');
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status == 200) {
					var result = xhr.responseText;
					console.log('Result: ' + result);
					postResult(result);
				}
			};
			xhr.send(form_data);
		}

	</script>

</body>
</html>