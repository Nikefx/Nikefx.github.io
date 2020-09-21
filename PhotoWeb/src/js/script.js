function plus() {
	var num1, num2, result;
	num1 = 80;
	num1 = parseInt(num1);


	num2 = document.getElementById('n2').value;
num2 = parseInt(num2);


result = num1 * num2;

document.getElementById('out').innerHTML = result;
document.getElementById('onno').value = result;
document.getElementById('fot-num').value = num2;

	// body...
}
function priceOclock() {
	var num1, num2, result;
	num1 = 1300;
	num1 = parseInt(num1);


	num2 = document.getElementById('hour').value;
num2 = parseInt(num2);


result = num1 * num2;

document.getElementById('resultPriceOclock').innerHTML = result;
document.getElementById('unnu').value = result;
document.getElementById('num-fot').value = num2;

}