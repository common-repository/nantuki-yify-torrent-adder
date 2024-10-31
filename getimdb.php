<?php
function get_imdb($q) {
?> <div align= "center" > <?php

$f = file_get_contents("http://yts.re/api/listimdb.json?imdb_id=".$q) ;
$in=json_decode($f, true) ;
if ($in['MovieList']['0']['State']=="OK"){
print "<h3>Results for id: \"".$q."\"</h3><br/>" ;
print "<img src=".$in['MovieList']['0']['CoverImage']." />"."<br/>" ;
print "<b>Total Torrents found :</b> ".$in['MovieCount']."<br/>" ;
print "<b>IMDB rating</b> : ".$in['MovieList']['0']['MovieRating']."<br/>" ;
print "<b>Genre</b> : ".$in['MovieList']['0']['Genre']."<br/>" ;
print "<b>Release Year</b> : ".$in['MovieList']['0']['MovieYear']."<br/>" ;
print "<table border=\"1\" width=\"90%\">" ;
foreach ($in['MovieList'] as $info) {
print "<tr><td width=\"22%\" >" ;
print "<b>YtsID:</b>".$info['MovieID']."<br/>" ;
print "Shrtcode for this torrent : <br/> <b>[yts id=\"".$info['MovieID']."\"] </b></td><td width=\68%\">"; 
print "<b>Title</b> : ".$info['MovieTitle']."<br/>" ;
print "<b>Quality</b> : ".$info['Quality']." &nbsp &nbsp &nbsp &nbsp &nbsp" ;
print "<b>Size</b> : ".$info['Size']."<br/>" ;

print "<b>Seeds</b> : ".$info['TorrentSeeds']."&nbsp &nbsp &nbsp &nbsp &nbsp" ;
print "<b>Peers</b> : ".$info['TorrentPeers']."<br/>" ;

print "<b><a href=\"".$info['TorrentUrl']."\">Download</a><br/></td></tr>" ;

    }
print "</table><br/><br/>" ; 
} else {
print "<h3>No movies found for id=".$q."</h3><br/><br/>" ;
  }  ?></div><?php

 }

?>