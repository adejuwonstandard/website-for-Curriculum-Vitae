var myObj= {
	run: "fast",
	walk: "slow",
	move: "hare"
};

function checkObj(checkProp) {
	if (myObj.hasitownproperty(checkProp)) {
		return myObj[checkProp];
	} else {
		return "Not Found"
	}
}

debug {
	myObj(checkObj(run))
}