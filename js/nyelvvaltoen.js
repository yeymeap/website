function nyelvvaltas() {
	let text = window.location.pathname + window.location.search;
	const myArray = text.slice(4);
	var x = "/" + myArray;
	window.location.assign(x);
}
