<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<style>
	html, body{
		background-color:#EEEEEE;
	}
</style>
<?php
$src_mov[1] = "movies_and_storyboards/demo_montage.mov";
$title[1] = "Demoreel Winter 2007. Design and Animation ( 30 Mb )";

$src_mov[2] = "movies_and_storyboards/x_music.mov";
$title[2] = "”X Music” Festival. Show Package";

$src_mov[3] = "movies_and_storyboards/yopc.mov";
$title[3] = "”Yo PC”. Promo Package";

$src_mov[4] = "movies_and_storyboards/bacardi_zone.mov";
$title[4] = "Fortdance ”Bacardi 2006”. Montage";

$src_mov[5] = "movies_and_storyboards/rgd_ny.mov";
$title[5] = "”The Way to New Year”. Show Package";

$src_mov[6] = "movies_and_storyboards/burn_map.mov";
$title[6] = "Personal Project. Inspired by Book Kobo Abe “The Ruined Map”";

$src_mov[7] = "movies_and_storyboards/m-chart.mov";
$title[7] = "SMS Chart ”M Chart”. Show Package";

$src_mov[8] = "movies_and_storyboards/top_guide.tif";
$title[8] = "“Top Guide”. Show Package";

$src_mov[9] = "movies_and_storyboards/vip.tif";
$title[9] = "”Vip International”. Show Package";

$src_mov[10] = "movies_and_storyboards/pg_pictures.mov";
$title[10].= "PG Film. Identity";

$src_mov[11] = "movies_and_storyboards/o2_montage.mov";
$title[11] = "O2TV Network. Montage";

if (isset($_GET['id'])) {
	$output .= "<title>".$title[$id]."</title>\n";
	$output .= "</head>\n";
	$output .= "<body>\n";
	$output .= "<div align=\"center\">\n";
	if (isset($_GET['id']) == 8) {
		$output .= "<img src=\"".$src_mov[$id]."\" alt=\"".$title[$id]."\"/>";
	} elseif (isset($_GET['id']) == 9) {
		$output .= "<img src=\"".$src_mov[$id]."\" alt=\"".$title[$id]."\"/>";
	} else {
		$output .= "<embed height=\"350\" width=\"420\" src=\"".$src_mov[$id]."\" controller=\"true\" autoplay=\"true\" pluginspage=\"http://www.apple.com/quicktime/download/win.html/\">\n";
		$output .= "</embed>\n";
	}
	$output .= "</div>\n";
} else {
	$output .= "<title></title>\n";
	$output .= "</head>\n";
	$output .= "<body>\n";
}
echo $output;
?>
</body>
</html>
