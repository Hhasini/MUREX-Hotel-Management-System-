function formValidate() {
	
	var checkin = document.forms["f1"]["in"].value;
	var checkout = document.forms["f1"]["out"].value;
	var adults = document.forms["f1"]["adults"].value;
	//var zip = document.forms["f2"]["zip"].value;
	//var email = document.forms["f2"]["email"].value;
	//var zip = document.forms["f2"]["zip"].value;

		if (!isEmpty(checkin, "checkin") && !isEmpty(checkout, "checkout") && !isEmpty(adults, "Adults")) {
		//alert("yes");
		return true;
	} else { return false;
	}
	}
function isEmpty(elemValue, field) {
	if (elemValue == "" || elemValue == null) {
		alert("You have" + field + " field Empty");
		return true;
	} else
		return false;
}
