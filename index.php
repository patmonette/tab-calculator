<!doctype html>
<html class="no-js" lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tab Calculator</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/app.css">
  </head>
  <body>
	<div class="grid-container">
	  <div class="grid-x grid-padding-x">
		<div class="large-12 cell">
		  <h1>Tab Calculator</h1>
		</div>
	  </div>

	  <div class="grid-x grid-padding-x">
		<div class="large-7 medium-7 cell">
		  <h5>Select a device and an optional down payment</h5>
		  <form>
			<div class="grid-x grid-padding-x">
			  <div class="large-12 cell">
				<label>Select Your Device</label>
				<select id="device" required>
				  <option value="">- Select -</option>
				  <option value="0">Bring Your Own Phone</option>
				  <option value="99.95">Alcatel GO FLIP</option>
				  <option value="229.95">Samsung J3</option>
				  <option value="849.95">Galaxy S8 64GB</option>
				  <option value="969.95">Galaxy S8+ 64GB</option>
				  <option value="1019.95">Galaxy S9 64GB</option>
				  <option value="1179.95">Galaxy S9+ 64GB</option>
				  <option value="1399.95">Galaxy S10 128GB</option>
				  <option value="1574.95">Galaxy S10+ 128GB</option>
				  <option value="1124.95">Galaxy S10e 128GB</option>
				  <option value="648.95">iPhone 7 32GB</option>
				  <option value="844.95">iPhone 8 64GB</option>
				  <option value="1059.95">iPhone 8 256GB</option>
				  <option value="974.95">iPhone 8+ 64GB</option>
				  <option value="1189.95">iPhone 8+ 256GB</option>
				  <option value="1274.95">iPhone X</option>
				  <option value="1419.95">iPhone XS 64GB</option>
				  <option value="1559.95">iPhone XS Max 64GB</option>
				  <option value="1059.95">iPhone XR 64GB</option>
				  <option value="1134.95">iPhone XR 128GB</option>
				  <option value="349.95">Kyocera Dura XE</option>
				  <option value="1099.95">Google Pixel 3 64GB</option>
				  <option value="499.95">BB KEY2 LE</option>
				  <option value="399.95">Turbo Hub ZTE MF288</option>
				</select>
			  </div>
			</div>
			<div class="grid-x grid-padding-x">
			  <div class="large-12 cell">
				<label>Optional TAB Down Payment:</label>
				<div class="input-group">
					<span class="input-group-label">$</span>
					<input id="optionalDown" class="input-group-field" type="number" placeholder="0.00" name="downpayment" value="0" min="0" max="2000" step=".01" />
				</div>
				<p id="calculate" class="button">Calculate</p>
			  </div>
			</div>
			<!-- <div class="grid-x grid-padding-x">
			  <div class="large-6 medium-6 cell">
				<label>Choose Your Favorite</label>
				<input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
				<input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
			  </div>
			  <div class="large-6 medium-6 cell">
				<label>Check these out</label>
				<input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
				<input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
			  </div>
			</div>
			<div class="grid-x grid-padding-x">
			  <div class="large-12 cell">
				<label>Textarea Label</label>
				<textarea placeholder="small-12.cell"></textarea>
			  </div>
			</div> -->
		  </form>
		</div>

		<div class="large-5 medium-5 cell">
			<div class="callout">
				<h2 id="devicename"></h2>
				<table class="calc-table">
					<tbody>
						<tr>
							<td>Device Retail Price:</td>
							<td id="retailprice">N/A</td>
						</tr>
						<tr>
							<td>TAB Credit:</td>
							<td id="credit">N/A</td>
						</tr>
						<tr>
							<td>Required TAB Down Payment:</td>
							<td id="required">N/A</td>
						</tr>
						<tr>
							<td>Optional TAB Down Payment:</td>
							<td id="optional">N/A</td>
						</tr>
						<tr>
							<td><strong>MONTHLY TAB Payment:</strong></td>
							<td class="blue"><strong id="monthly">N/A</strong></td>
						</tr>
					</tbody>
				</table>
		  	</div>

		  <!-- <div class="callout">
			<h5>So many components, girl!</h5>
			<p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
			<a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
		  </div> -->
		</div>
	  </div>
	</div>

	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/what-input/dist/what-input.js"></script>
	<script src="node_modules/foundation-sites/dist/js/foundation.js"></script>
	<script src="js/app.js"></script>
  </body>
</html>
