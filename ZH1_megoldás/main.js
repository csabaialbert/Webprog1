window.onload = function() {
	var kuld = document.getElementById("kuld");
	if (kuld) {
		kuld.disabled = true;
	}
};
function ellenoriz() {
	var rendben = true;
	var fokusz = null;

	var szoveg = document.getElementById("nev");
	if (szoveg) {
		if (szoveg.value.length<8 || szoveg.value.length>30) {
			rendben = false;
			szoveg.style.background = '#f99';
			fokusz = szoveg;
		} else {
			szoveg.style.background = '#9f9';
		}
	}

	var email = document.getElementById("email");
	if (email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (!checkPattern.test(email.value)) {
			rendben = false;
			email.style.background = '#f99';
			fokusz = email;
		} else {
			email.style.background = '#9f9';
		}
	}

	var szoveg = document.getElementById("darab");
	if (szoveg) {
		if (szoveg.value<1 || szoveg.value>10) {
			rendben = false;
			szoveg.style.background = '#f99';
			fokusz = szoveg;
		} else {
			szoveg.style.background = '#9f9';
		}
	}

	var szoveg = document.getElementById("nap");
	if (szoveg) {
		if (szoveg.value=="vasárnap" || szoveg.value=="szombat") {
			rendben = false;
			szoveg.style.background = '#f99';
			fokusz = szoveg;
		} else {
			szoveg.style.background = '#9f9';
		}
	}

	if (fokusz) {
		fokusz.focus();
	}

	var kuld = document.getElementById("kuld");
	if (kuld) {
		kuld.disabled = !rendben;
	}

	return rendben;
}