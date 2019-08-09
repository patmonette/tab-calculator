$(document).foundation();

const maxMonthlyTab = 27.5;

// Calculated values
var currentDevicePrice;
var deviceRetailPrice;
var TABcredit;
var requiredDown;
var optionalDown;
var monthlyPayment;

// The main Calculation function that gets triggered on the "Calculate" button click
function calculate(){

	
	// Getting Device name
	currentDeviceName = $("#device option:selected").html();

	// Getting Device price from select value
	currentDevicePrice = $("#device").val();

	//Getting Optional Down Payment
	optionalDown = parseInt($("#optionalDown").val(), .01);

	
	// Validate
	if (!currentDevicePrice) {
		alert("You must select a device.");
	} else if (optionalDown > currentDevicePrice) {
		alert("Your Optional TAB Down Payment cannot be greater than the currently selected device, " + currentDeviceName + ", which is $" + currentDevicePrice + ".");
	} else {
		// Setting the TAB Credit variable based on which device is selected
		if(currentDeviceName.includes("iPhone") || currentDeviceName.includes("Galaxy") || currentDeviceName.includes("Google")) {
			TABcredit = 400.00;
		} else if(currentDeviceName.includes("Alcatel")) {
			TABcredit = 99.95;
		} else if(currentDeviceName.includes("J3")) {
			TABcredit = 299.95;
		} else if(currentDeviceName.includes("Kyocera")) {
			TABcredit = 349.95;
		} else if(currentDeviceName.includes("KEY2")) {
			TABcredit = 499.95;
		} else if(currentDeviceName.includes("Turbo Hub")) {
			TABcredit = 399.95;
		} else {
			TABcredit = 0;
		}
	
		// Calculating the Required Down Payment
		if (((currentDevicePrice - TABcredit) / 24) <= maxMonthlyTab) {
			requiredDown = 0;
		} else {
			requiredDown = (currentDevicePrice - TABcredit) - maxMonthlyTab * 24;
		}
	
		// Calculating the Monthly Payment
		if ((currentDevicePrice - TABcredit - requiredDown - optionalDown) / 24 < 0) {
			monthlyPayment = 0;
		} else {
			monthlyPayment = (currentDevicePrice - TABcredit - requiredDown - optionalDown) / 24;
		}
	
		// Injecting the values into the HTML table
		$("#devicename").html(currentDeviceName);
		$("#retailprice").html("$" + currentDevicePrice + " <small>+ HST</small>");
		$("#credit").html("$" + TABcredit.toFixed(2));
		$("#required").html("$" + requiredDown.toFixed(2));
		$("#optional").html("$" + optionalDown.toFixed(2));
		$("#monthly").html("$" + monthlyPayment.toFixed(2));
	}
}

$("#calculate").click(function(){
	calculate();
});