<!doctype html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>iSaw</title>
    
    <link rel="stylesheet" href="includes/css/normalize.css" />
    <link rel="stylesheet" href="includes/css/foundation.css" />
    <!--[if lt IE 9]><!-->
    <link rel="stylesheet" href="includes/css/foundation.ie8.css" />
    <!--<![endif]-->
    <link rel="stylesheet" href="includes/css/class.css" />
    <link rel="stylesheet" href="includes/css/override.css" />
    <script src="includes/js/vendor/custom.modernizr.js"></script>
</head>
<body>
	<?php include("includes/nav.php"); ?>
    
    <div class="row">
        <div class="large-3 small-3 columns">
        <img src="http://placehold.it/400x500"/><br/>
        <div class="section-container vertical-nav " data-section>
            <div class="section text-center">
            <form action="" method="post">
            <h2><label id="sname" name="sname">Student Name</label></h2>
            <input id="grade" name="grade" type="text" placeholder="Enter Grade" required/>
            <textarea id="comment" name="comment" placeholder="Enter Comment" style="height:100px;"></textarea>
            <input type="submit" value="Submit"/>
            </form>
            </div>
        </div>
        </div>
        
        <div class="large-9 small-9 columns">
        <div class="panel scroll-main">
        <h3 id="gdocs">Google Docs</h3>
        <iframe id="iframe" src="https://docs.google.com/spreadsheet/ccc?key=0ArdoG-x5ZY4ndENSWGVtTDc4cDNrQ2FZTDNKOW9nblE#gid=0" width="100%" height="100%" style="border: none;">
        <base target="_parent" />
        </iframe>
        </div>
        </div>
    </div>
    
	<?php include("includes/footer.php"); ?>
    <script>
	$(document).ready(function () {    
		$.getJSON('https://script.google.com/macros/d/M681ndbrlhygXqTRdrmcMHkq0wEnsVTCk/edit?uiv=2&tz=America/New_York&docTitle=Homework+(Responses)&csid=tCRXemL78p3kCaYL3J9ognQ.02283992560128664173.6327191706092098988&mid=ACjPJvGEqu45yUy_Mx3wA9bIlVJGxBzg9JEMGpQqi43SI1EjyLyp5fE17Hbi5Nc8AzSK4bsGUEicvH6_gZ22iUEF9eTjEkJwXnBRfu0c_fjLT4XnC8c&hl=en_US', null, function (results) {
			console.log(results);
		});
		
		function updateURL(url){
			document.getElementById('iframe').src = url;
		}
	});
	</script>
</body>
</html>
