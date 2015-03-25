<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>Caesar Cipher</title>

		<!-- Custom styles for this template -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="js/script.js"></script>
	</head>

	<body>
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title">
									<span class="glyphicon glyphicon-copy" aria-hidden="true"></span>&nbsp; Plain Text
								</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<textarea class="form-control" id="plain" placeholder="Enter Plain Text . . ." rows="15" autocomplete="off" value=""></textarea>
								</div>
								<div class="pull-left">
									<button class="btn btn-default" type="button" id="enfresh">Clear</button>
								</div>
								<div class="pull-right">
									<button class="btn btn-success" type="button" id="encrypt">Encrypt &nbsp; <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">
									<span class="glyphicon glyphicon-paste" aria-hidden="true"></span>&nbsp; Chiper Text
								</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<textarea class="form-control" id="chiper" placeholder="Enter Chiper Text . . ." rows="15" autocomplete="off" value=""></textarea>
								</div>
								<div class="pull-left">
									<button class="btn btn-info" type="button" id="decrypt"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> &nbsp; Decrypt</button>
								</div>
								<div class="pull-right">
									<button class="btn btn-default" type="button" id="defresh">Clear</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>
