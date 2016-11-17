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

		function gatherFormData(form) {
			var inputs = form.getElementsByTagName('input');
			var array = [];

			for(i=0; i < inputs.length; i++) {
				var inputNameValue = inputs[i].name + '=' + inputs[i].value;
				array.push(inputNameValue);
			}
			return array.join('&');
		}

		function calculateMeasurements() {
			clearResult();

			var form = document.getElementById("measurement-form");
			var action = form.getAttribute("action");

			// gather form data
			var form_data = gatherFormData(form);

			var xhr = new XMLHttpRequest();
			xhr.open('POST', action, true);
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status == 200) {
					var result = xhr.responseText;
					console.log('Result: ' + result);
					postResult(result);
				}
			};
			xhr.send(form_data);
		}

		var button = document.getElementById("ajax-submit");
		button.addEventListener("click", calculateMeasurements);

	</script>

</body>
</html>