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

console.log {
	myObj(checkObj(run))
}