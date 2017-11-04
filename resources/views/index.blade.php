<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>
<body>
<h1>welcome</h1>
<script type="text/javascript" src="./admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	$.post('/index',{test:111},function(data){

		// console.log(data);
		alert(data);
	});
</script>
</body>
</html>