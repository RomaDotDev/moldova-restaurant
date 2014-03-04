<?php
$row = 1;
if (($handle = fopen("list.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;

        $dishName = str_replace(' ', '-', $data[0]);
		$dishName = str_replace('"', '', $dishName);
		preg_replace('/\(.*\)/i', ' ', $dishName);
		
		$price = $data[1];
		$descriptionEn = htmlspecialchars($data[2]);
		$descriptionRus = htmlspecialchars($data[3]);
		$imageName = $data[6] . '_'. $data[7] . '_' . $dishName . '.jpg';
    }
    fclose($handle);
}



$file = <<<END
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no">
		<title>___TITLE____</title>
		<meta name="description" content="___DESCRIPTION____" />
		<link rel="shortcut icon" href="../favicon.png"/>
		<link rel="apple-touch-icon" sizes="114x114" href="../touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="../touch-icon-72x72.png" />
		<link rel="apple-touch-icon" href="../touch-icon-iphone.png" />				
		<link rel="stylesheet" href="../css/jquery.mobile.min.css?v1" />
		<link rel="stylesheet" href="../css/style.css?v1" />		

		<script src="../js/vendor/jquery.min.js?v1"></script>
		<script src="../js/vendor/jquery.mobile.min.js?v1"></script>
		<script>
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-33528867-1']);
		  _gaq.push(['_setDomainName', 'moldaviancuisine.com']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	
	<body>

		<div data-role="page" class="type-interior" id="__PAGE_ID__">

			<div data-role="header">
				<h1>_____PAGE_HEADER_____</h1>
			</div><!-- /header -->
			
			<div data-role="content">
				
				<img src="" alt="___PAGE_ALT____">
				
				<div class="ui-grid-a ui-responsive">
					<div class="ui-block-a">
						______DESCRIPTION_RUS_________
					</div>
					<div class="ui-block-b">
						______DESCRIPTION_EN_________
					</div>
				</div><!-- /grid-a -->
					
			</div><!-- /content -->

			<div data-role="footer" class="pagefooter">
				<p id="menu_footer">
					<a rel="nofollow" target="_blank" href="http://m.yelp.com/biz/moldova-restaurant-brooklyn"><span class="ui-icon ui-icon-yelp"></span></a>
					<a rel="nofollow" target="_blank" href="https://m.facebook.com/moldovarestaurant"><span class="ui-icon ui-icon-facebook"></span></a>
					<a rel="nofollow" target="_blank" href="https://mobile.twitter.com/MoldovaNY"><span class="ui-icon ui-icon-twitter"></span></a>
					<a rel="nofollow" target="_blank" href="https://plus.google.com/105705932386237233076"><span class="ui-icon ui-icon-google-plus"></span></a>
					<a rel="nofollow" target="_blank" href="http://m.vk.com/moldovarestaurant"><span class="ui-icon ui-icon-vkontakte"></span></a>
				</p>

				<p>
					&copy; 2012-2013 Moldova Restaurant New York
				</p>
				<p>
					1827 Coney Island Ave<br> 
					Brooklyn NY 11230<br>
					Tel: <a href="tel:+17189982892" class="ui-icon-phone">(718) 998-2892</a><br>
					<a href="tel:+17189982827" class="ui-icon-phone">(718) 998-2827</a>
				</p>
			</div>			

		</div><!-- /page -->


	</body>
</html>
END;
