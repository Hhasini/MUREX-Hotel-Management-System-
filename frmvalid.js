function formValidate() {
	var cardName = document.forms["f2"]["cardName"].value;
	var type = document.forms["f2"]["type"].value;
	var fname = document.forms["f2"]["fname"].value;
	var lname = document.forms["f2"]["lname"].value;
	var cardNo = document.forms["f2"]["cardNo"].value;
	var email = document.forms["f2"]["email"].value;
	var zip = document.forms["f2"]["zip"].value;
	var nic= document.forms["f2"]["nic"].value;
	
	if (!isEmpty(cardNo, "Card No") && !isEmpty(cardName, "Card Name") && !isEmpty(type, "Card type")) {
		alert("yes");
	} else {
	}
	
	if (isAlphabatic(fname)) {
		if (isAlphebatic(lname)) {
			if (isNumaric(zip)) {
				if (userValidation(nic, 6, 10)) {
					if (emailValidation(email)) {
						return true;
					} else {
						return false;
					}
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	} else {
		return false;
	}

}

function isEmpty(elemValue, field) {
	if (elemValue == "" || elemValue == null) {
		alert("You have" + field + " field Empty");
		return true;
	} else
		return false;
}

function userValidation(elemValue, min, max) {
	if (!isEmpty(elemValue, "NIC Number")) {
		if (elemValue.length >= min && elemValue.length <= max) {
			return true;
		} else {
			alert("Enter a user name in between" + min + "and" + max + "characters.");
			return false;
		}
	}
	return false;
}

function isAlphabatic(elemValue) {
	var exp = /^[a-zA-Z]+$/;
	if (!isEmpty(elemValue, "First name")) {
		if (elemValue.match(exp)) {
			return true;
		} else {
			alert("Enter only text for your First Name");
			return false;
		}
	} else
		return false;
}

function isAlphebatic(elemValue) {
	var exp = /^[a-zA-Z]+$/;
	if (!isEmpty(elemValue, "Last name")) {
		if (elemValue.match(exp)) {
			return true;
		} else {
			alert("Enter only text for your First Name");
			return false;
		}
	} else
		return false;
}

function isAlphaNumeric(elemValue) {
	var exp = /^[0-9a-zA-Z]+$/;
	if (!isEmpty(elemValue, "Address")) {
		if (elemValue.match(exp)) {
			return true;
		} else {
			alert("Enter only letters and numbers for the Address");
			return false;
		}
	} else
		return false;

}

function isNumaric(elemValue) {
	var exp = /^[0-9]+$/;
	if (!isEmpty(elemValue, "zip/postal")) {
		if (elemValue.match(exp)) {
			return true;
		} else {
			alert("Enter a valid zip");
			return false;
		}
	} else
		return false;
}

function emailValidation(elemValue) {
	
	if (!isEmpty(elemValue, "your Email Address")) {
		var atpos = elemValue.indexOf("@");
		var dotpos = elemValue.indexOf("\.");
				
		if (atpos > 1) {			
			return true;
		} else{
			alert("Enter a valid email address");
			return false;
		}
	} else
		return false;
}
