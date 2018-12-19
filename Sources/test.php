<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script> -->
	<script type="text/javascript" src="helper/jquery/jquery.js"></script>
<!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="helper/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="http://botmonster.com/jquery-bootpag/jquery.bootpag.js"></script>
<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="helper/bootstrap/css/bootstrap.css">

</head>
<body>
	
<div id="dynamic_content">Pagination goes here</div>
<div id="show_paginator"></div>
<script>
	$('#show_paginator').bootpag({
      total: 23,
      page: 3,
      maxVisible: 10
}).on('page', function(event, num)
{
     $("#dynamic_content").html("Page " + num); // or some ajax content loading...
});
    $('#show_paginator li').addClass('page-item');
    $('#show_paginator a').addClass('page-link');

</script>
</body>
</html>