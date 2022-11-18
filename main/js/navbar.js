//Draw NavBar
var $nav = $("nav");

	$nav.addClass("navbar");
	$nav.addClass("navbar-expand-lg");
	$nav.addClass("fixed-top");

var $container = $('<div class = "container"></div>');

	$nav.append($container);




//NavBar Brand
var $brand = $('<a class = "navbar-brand" href = "https://cronicle.space"></a>');

	$container.append($brand);

var $row = $('<div class = "row"></div>');

	$brand.append($row);

	//Cronicle Logo Image
	$logo = $('<img src = "https://cronicle.space/main/image/logo.webp" alt = "Cronicle Logo" width = "50" height = "50">');

	$row.append($logo);

	//Cronicle Logo Text
	$cronicle = $('<p>Cronicle</p>');

	$row.append($cronicle);




//Button Toggler
var $button = $('<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation" style = "margin-left: 0; float: right;"></button>');

	$container.append($button);

	//Icon Bars
	$iconBar1 = $('<span class = "icon-bar"></span>');

	$button.append($iconBar1);

	$iconBar2 = $('<span class = "icon-bar"></span>');

	$button.append($iconBar2);

	$iconBar3 = $('<span class = "icon-bar"></span>');

	$button.append($iconBar3);




//Collapse Div
var $collapse = $('<div class = "collapse navbar-collapse" id = "navbarSupportedContent"></div>');

	$container.append($collapse);

	//Links List
	var $ul = $('<ul class = "navbar-nav mr-auto"></ul>');

		$collapse.append($ul);

		//Features Button
		var $featuresLi = $('<li class = "nav-item"></li>');

		$ul.append($featuresLi);

		var $featuresA = $('<a class = "nav-link" href = "https://cronicle.space/features/">Features</a>');

		$featuresLi.append($featuresA);

		//Learning Button
		var $learningLi = $('<li class = "nav-item"></li>');

		$ul.append($learningLi);

		var $learningA = $('<a class = "nav-link" href = "https://cronicle.space/learning/">Learning</a>');

		$learningLi.append($learningA);

		//Careers Button
		var $careersLi = $('<li class = "nav-item"></li>');

		$ul.append($careersLi);

		var $careersA = $('<a class = "nav-link" href = "https://cronicle.space/careers/">Careers</a>');

		$careersLi.append($careersA);

	//Contact Sales Link
	var $contactFlex = $('<span class = "d-flex"></span>');

		$collapse.append($contactFlex);

		var $contactA = $('<a class = "nav-link" href = "https://cronicle.space/contact-sales/" style = "padding-left: 0;">Contact Sales</a>');

		$contactFlex.append($contactA);

	//Sign Up Button
	var $signFlex = $('<span class = "d-flex"></span>');

		$collapse.append($signFlex);

		var $signA = $('<a href = "https://cronicle.space/signup/"></a>');

		$signFlex.append($signA);

		var $signBtn = $('<button class = "primary">Sign Up</button>');

		$signA.append($signBtn);

	//Log In Button
	var $logFlex = $('<span class = "d-flex"></span>');

		$collapse.append($logFlex);

		var $logA = $('<a href = "https://cronicle.space/login/"></a>');

		$logFlex.append($logA);

		var $logBtn = $('<button class = "secondary">Log In</button>');

		$logA.append($logBtn);