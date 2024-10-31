<?php
add_action('admin_menu','nantuki_ytsadm');

function nantuki_ytsadm() { add_menu_page('Search YTS ID','Search YTS ID','administrator','nantuki','new_settings_page','dashicons-admin-generic');
}
function new_settings_page() { 
?>
    <div align="center">
		<h2>Search Yts ID</h2>
		<p>Enter IMDB id of any movie here<br/>to find YTS torrents and their id<br/>From here, You need to copy the YTS id and <br/> add it in your post with the shortcode.<br/><i>Example :</i><b> [yts id="535"] </b> would be the shortcode for<br/>the YTS torrent id 535.</p>
<p>You will find the id of each torrent at the left column of <br/> each table, along with the shortcode generated fot you.
		<br/> &nbsp <br/>
        <form method="post">
<input name="tuki" size="30" />&nbsp
<input name="submit" type="submit" />
</form>

<?php
if (!isset($_POST['submit'])) die();
$ytsids = $_POST['tuki'];
$nanrutis = explode (",",$ytsids) ;
foreach ($nanrutis as $tuktuki) {
$tuktuki=str_replace(" ","",$tuktuki) ;
get_imdb($tuktuki) ;
}
?>
</div>
<?php
}
?>