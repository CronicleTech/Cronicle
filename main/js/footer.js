//Draw Footer
var $footer = $("footer");

var $container = $('<div class = "container"></div>');

	$footer.append($container);




//Top Row
var $rowTop = $('<div class = "row"></div>');

	$container.append($rowTop);

	//Company Column
	var $companyCol = $('<div class = "col-sm-3"></div>');

	$rowTop.append($companyCol);

	var $companyH = $('<h3>COMPANY</h3>');

	$companyCol.append($companyH);

		//About Us Link
		var $aboutA = $('<p><a href = "https://cronicle.space/about/">About Us</a></p>');

		$companyCol.append($aboutA);

		//Features Link
		var $featuresA = $('<p><a href = "https://cronicle.space/features/">Features</a></p>');

		$companyCol.append($featuresA);

		//Brand Link
		var $brandA = $('<p><a href = "https://cronicle.space/brand/">Brand</a></p>');

		$companyCol.append($brandA);

		//Careers Link
		var $careersA = $('<p><a href = "https://cronicle.space/careers/">Careers</a></p>');

		$companyCol.append($careersA);

	//Products Column
	var $productsCol = $('<div class = "col-sm-3"></div>');

	$rowTop.append($productsCol);

	var $productsH = $('<h3>PRODUCTS</h3>');

	$productsCol.append($productsH);

		//Cronicle Link
		var $cronicleA = $('<p><a href = "https://cronicle.space">Cronicle</a></p>');

		$productsCol.append($cronicleA);

		//Learning Link
		var $learningA = $('<p><a href = "https://cronicle.space/learning/">Cronicle Learning</a></p>');

		$productsCol.append($learningA);

	//Careers Column
	var $careersCol = $('<div class = "col-sm-3"></div>');

	$rowTop.append($careersCol);

	var $careersH = $('<h3>CAREERS</h3>');

	$careersCol.append($careersH);

		//Marketing Link
		var $marketingA = $('<p><a href = "https://cronicle.space/careers/#marketing">Marketing</a></p>');

		$careersCol.append($marketingA);

		//Engineering Link
		var $engineeringA = $('<pli><a href = "https://cronicle.space/careers/#engineering">Engineering</a></p>');

		$careersCol.append($engineeringA);

		//Product Link
		var $productA = $('<p><a href = "https://cronicle.space/careers/#product">Product</a></p>');

		$careersCol.append($productA);

	//Contact Column
	var $contactCol = $('<div class = "col-sm-3"></div>');

	$rowTop.append($contactCol);

	var $contactH = $('<h3>CONTACT</h3>');

	$contactCol.append($contactH);

		//Cronicle Link
		var $salesA = $('<p><a href = "https://cronicle.space/contact-sales/">Contact Sales</a></p>');

		$contactCol.append($salesA);

		//Learning Link
		var $helpA = $('<p><a href = "https://cronicle.space/help-center/">Help Center</a></p>');

		$contactCol.append($helpA);




//Bottom Row
var $bottom = $('<div class = "bottom"></div>');

	$container.append($bottom);

var $col12 = $('<div class = "col-sm-12"></div>');

	$bottom.append($col12);

var $row = $('<div class = "row"></div>');
		
	$col12.append($row);

	//Cronicle Logo
	var $leftCol = $('<div class = "col-sm-6 logo"></div>');

		$row.append($leftCol);

		$logoA = $('<a href = "https://cronicle.space"></a>');

		$leftCol.append($logoA);

		$leftRow = $('<div class = "row"></div>');

		$logoA.append($leftRow);

		//Cronicle Logo Image
		$logo = $('<img src = "https://cronicle.space/main/image/logo.webp" alt = "Cronicle Logo" width = "50" height = "50">');

		$leftRow.append($logo);

		//Cronicle Logo Text
		$cronicle = $('<p>Cronicle</p>');

		$leftRow.append($cronicle);

	//Social Links
	var $rightCol = $('<div class = "col-sm-6 social"></div>');

		$row.append($rightCol);

		//Linked In
		var $linkedin = $('<a href = "https://www.linkedin.com/company/cronicle/" target = "blank"><img src = "https://cronicle.space/main/image/footer linkedin.svg" alt = "LinkedIn Logo" width = "25" height = "25"></a>');

			$rightCol.append($linkedin);

		//Facebook
		var $facebook = $('<a href = "https://www.facebook.com/cronicletechnologies/" target = "blank"><img src = "https://cronicle.space/main/image/footer facebook.svg" alt = "Facebook Logo" width = "25" height = "25"></a>');

			$rightCol.append($facebook);

		//Instagram
		var $instagram = $('<a href = "https://www.instagram.com/cronicletechnologies/" target = "blank"><img src = "https://cronicle.space/main/image/footer instagram.svg" alt = "Instagram Logo" width = "25" height = "25"></a>');

			$rightCol.append($instagram);

		//Twitter
		var $twitter = $('<a href = "https://twitter.com/cronicletech/" target = "blank"><img src = "https://cronicle.space/main/image/footer twitter.svg" alt = "Twitter Logo" width = "25" height = "25"></a>');

			$rightCol.append($twitter);