//Draw NavBar
var $nav = $("nav");

	$nav.addClass("navbar");
	$nav.addClass("navbar-expand-lg");
	$nav.addClass("fixed-top");

var $container = $('<div class = "container"></div>');

	$nav.append($container);




//NavBar Brand
var $brand = $('<a class = "navbar-brand" href = "https://cronicle.space/learning/"></a>');

	$container.append($brand);

var $row = $('<div class = "row"></div>');

	$brand.append($row);

	//Cronicle Logo Image
	$logo = $('<img src = "https://cronicle.space/main/image/logo.webp" alt = "Cronicle Logo" width = "40" height = "40">');

	$row.append($logo);

	//Cronicle Logo Text
	$cronicle = $('<p><b>Cronicle</b> | Learning</p>');

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

		//Articles Button
		var $articlesLi = $('<li class = "nav-item"></li>');

		$ul.append($articlesLi);

		var $articlesA = $('<a class = "nav-link" href = "https://cronicle.space/learning/articles/">Articles</a>');

		$articlesLi.append($articlesA);

		//Series Button
		var $seriesLi = $('<li class = "nav-item"></li>');

		$ul.append($seriesLi);

		var $seriesA = $('<a class = "nav-link" href = "https://cronicle.space/learning/series/">Series</a>');

		$seriesLi.append($seriesA);

		//Writers Button
		var $writersLi = $('<li class = "nav-item"></li>');

		$ul.append($writersLi);

		var $writersA = $('<a class = "nav-link" href = "https://cronicle.space/learning/#writers">Writers</a>');

		$writersLi.append($writersA);

	//Cronicle Link
	var $cronicleFlex = $('<span class = "d-flex"></span>');

		$collapse.append($cronicleFlex);

		var $cronicleA = $('<a class = "nav-link" href = "https://cronicle.space" style = "padding-left: 0;">Cronicle.space</a>');

		$cronicleFlex.append($cronicleA);

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

	/**	

	//Dashboard Link
	var $dashboardFlex = $('<span class = "d-flex"></span>');

		$collapse.append($dashboardFlex);

		var $dashboardA = $('<a class = "nav-link profile" href = "https://cronicle.space/dashboard/"></a>');

		$dashboardFlex.append($dashboardA);

		var $dashboardRow = $('<div class = "row"></div>');

			$dashboardA.append($dashboardRow);

			$dashboardImg = $('<img src = "https://cronicle.space/dashboard/image/logo profile.svg" alt = "Profile" width = "40" height = "40">');

			$dashboardRow.append($dashboardImg);

			$dashboardP = $('<p>Kevin Wijaya</p>');

			$dashboardRow.append($dashboardP);

	*/