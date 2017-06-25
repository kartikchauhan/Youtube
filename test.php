<?php
	require 'Youtube.php';

	$youtube = new Zarkiel\Media\Youtube();
	$links = $youtube->getDownloadLinks('q_gfD3nvh-8');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Youtube Downloader</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
	    body, html {
	        width: 100%;
	        height: 100%;
	        margin: 0;
	        padding: 0;
	        display:table;
	    }
	    body {
	        display:table-cell;
	        vertical-align:middle;
	    }
	    .well
	    {
	    	padding-left: 50px !important;
	    }
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<div class="well">
				<?php
					foreach($links as $videoType => $videos) 
					{
						if(count($videos) != 0)
						{
							echo 
							"<div class='row'>
								<h5 class='badge'>{$videoType}</h5>";
							foreach($videos as $key => $video) {
								echo 
								"<p>{$key} | 
									<a href='{$video}' download='{$video}'><i class='glyphicon glyphicon-download-alt'></i></a>
								</p>";
							}
							echo
							"</div>";
						}

					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
