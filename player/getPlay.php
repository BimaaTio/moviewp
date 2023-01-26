<?php
/*
* ----------------------------------------------------
* @author: fr0zen
* @author URI: https://fr0zen.sellix.io
* @copyright: (c) 2022 Vincenzo Piromalli. All rights reserved
* ----------------------------------------------------
* @since 3.8.7
* 20 May 2022
*/

$id = $_GET['id'];
$sv = $_GET['sv'];
$site = "";

if ($sv == "2embed") {
$site = "https://www.2embed.to/embed/imdb/movie?id=".$id;
} 
else if ($sv == "vidsrc") {
$site = esc_url( get_template_directory_uri() ).'/player/se_player.php?video_id='.$id;
} 
else if ($sv == "gdriveplayer") {
$site = 'https://databasegdriveplayer.co/player.php?imdb='.$id;
}
else if ($sv == "") {
$site = "https://www.2embed.to/embed/imdb/movie?id=".$id;
} 
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		body,html{
			padding:0;
			left: 0;
			background: transparent;
		}

		iframe{
			position: fixed;
			top: 0px;
			left: 0px;
			width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>
	<script>
		window.location.href="<?php echo $site; ?>";
	</script>
</body>
</html>