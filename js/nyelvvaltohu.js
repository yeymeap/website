function nyelvvaltas() {
	let text = window.location.pathname + window.location.search;
	const myArray = text.slice(1);
	var x = "/hu/" + myArray;
	window.location.assign(x);
}
