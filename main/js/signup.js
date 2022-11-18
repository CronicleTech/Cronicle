//Sign Up Footer
var $signup = $("div.sign-up");

var $container = $('<div class = "container"></div>');

	$signup.append($container);

var $col12 = $('<div class = "col-sm-12"></div>');

	$container.append($col12);

var $row = $('<div class = "row"></div>');

	$col12.append($row);



//Background Image
var $colImg = $('<div class = "col-lg-2"></div>');

	$row.append($colImg);

	var $img = $('<img src = "https://cronicle.space/main/image/footer sign up.webp" alt = "Cronicle Logo" style = "height: 175px;">');

	$colImg.append($img);




//Text Content
var $colText = $('<div class = "col-lg-7"></div>');

	$row.append($colText);

	//Title
	var $h2 = $('<h2>Welcoming the next level of efficiency.</h2>');

	$colText.append($h2);

	var $p = $('<p>Maximize your working hours by organizing your tasks.</p>');

	$colText.append($p);




//Sign Up Button
var $colButton = $('<div class = "col-lg-2"></div>');

	$row.append($colButton);

	var $button = $('<a href = "https://cronicle.space/signup/"><button class = "primary">Sign Up</button></a>');

	$colButton.append($button);