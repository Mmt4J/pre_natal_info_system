
//Toggling menu
var navLinks = document.getElementById("nav-links");
	
	function showMenu(){
		navLinks.style.right = '0';
	}

	function hideMenu(){
		navLinks.style.right = '-200px';
	}
//Toggling chatBox
function showHide(){
	const x = document.getElementById('screen');
	if (x.style.display === "block"){
		x.style.display = "none";
	}else{
		x.style.display = "block";
	}
}