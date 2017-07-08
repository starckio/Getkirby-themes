function getEventTarget(e) {
	e = e || window.event;
	return e.target || e.srcElement; 
}

function removeClass (argument) {
	for (var i = argument.length - 1; i >= 0; i--) {
		argument[i].className = ""
	}
}

function selectUSD(){
	var options = document.getElementById("options")
	removeClass(document.getElementsByTagName("li"))
	var activeAmount =  getEventTarget(event)
	activeAmount.className = "active"
	document.getElementsByName("amount")[0].value = activeAmount.innerHTML
}