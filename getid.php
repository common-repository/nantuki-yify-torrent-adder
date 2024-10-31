<?php
function get_id($id) {
?><div align="center"><?php

$idf = file_get_contents("http://yts.re/api/movie.json?id=".$id) ;
$info=json_decode($idf, true) ;
print "<img src=".$info['LargeCover']." />"."<br/>" ;
print "<b>".$info['MovieTitle']." </b> <br/>" ;
print "<b>IMDB rating</b> : ".$info['MovieRating']."<br/>" ;
print "<b>Genre</b> : ".$info['Genre1'].", ".$info['Genre2']."<br/>" ;
print "<b>Release Year</b> : ".$info['MovieYear']."<br/>" ;
print "<b>Quality</b> : ".$info['Quality']."<br/>" ;
print "<b>Resolution</b> : ".$info['Resolution']."<br/>" ;
print "<b>FrameRates</b> : ".$info['FrameRate']."<br/>" ;
print "<b>Size</b> : ".$info['Size']."<br/>" ;

print "<b>Seeds</b> : ".$info['TorrentSeeds']."<br/>" ;
print "<b>Peers</b> : ".$info['TorrentPeers']."<br/>" ;
print "<b>ScreenShots :</b><br/>" ;
print "<img src=\"".$info['MediumScreenshot1']."\" /><br/>&nbsp<br/>" ;
print "<img src=\"".$info['MediumScreenshot2']."\" /><br/>&nbsp<br/>" ;
print "<img src=\"".$info['MediumScreenshot3']."\" /><br/>&nbsp<br/>" ;
print "<b>Plot: </b>".$info['LongDescription']."<br/>" ;
print "<br/><b>Download</b> : "."<a href=".$info['TorrentUrl']."><strong>Click here to Download </strong></a>"."<br/>" ;
print "<br/><b>Hash</b> : ".$info['TorrentHash']."<br/>" ;
print "<b>Magnet</b> : "."<a href=".$info['TorrentMagnetUrl'].">Magnet link</a>" ;
?></div><?php
}

?>