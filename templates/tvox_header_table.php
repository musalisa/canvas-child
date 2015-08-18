<?php 

$tvox_stories_url = home_url('category/stories');
$tvox_library_url = home_url('media/library');
$tvox_links_url = home_url('p/links.html');
$tvox_news_url = home_url('category/news');
$tvox_forum_url = home_url('forums');
$tvox_shop_url = home_url('p/shop.html');
$tvox_images_url = get_stylesheet_directory_uri().'/includes/images/';

?>
<table id="tvox-header-tb">
<tr id="tvox-header-tr">
<td id="tvox-logo-td"><div id="tvox-logo-div"><a href="<?php echo(home_url()); ?>"><img src="<?php echo($tvox_images_url);?>theremin.gif" /></a></div></td><td id="tvox-logo1-td"><div id="tvox-logo1-div"><a href="<?php echo(home_url()); ?>"><img src="<?php echo($tvox_images_url);?>thereminvox_com.gif" /></a></div><div id="tvox-logo2-div"><a href="<?php echo(home_url()); ?>"><img src="<?php echo($tvox_images_url);?>claim.gif" /></a></div></td>
<td id="tvox-pulsantiera-td">
<table id="tvox-pulsantiera-tb">
<tr>
<td><div class="tvox-puls"><a href="<?php echo(home_url()); ?>"><img id="bot-home" src="<?php echo($tvox_images_url);?>bottone_<?php if (is_home()) echo ('att'); ?>.gif" alt="Home" /></a><a href="<?php echo(home_url()); ?>"><img id="label-home" src="<?php echo($tvox_images_url);?>home_<?php if (is_home()) echo ('att'); ?>.gif" alt="Home" /></a></div></td>
<td><div class="tvox-puls"><a href="<?php echo $tvox_stories_url;?>"><img id="bot-stories" src="<?php echo($tvox_images_url);?>bottone_.gif" alt="Stories" /></a><a href="<?php echo $tvox_stories_url;?>"><img id="label-stories" src="<?php echo($tvox_images_url);?>stories_.gif" alt="Stories" /></a></div></td>
<td><div class="tvox-puls"><a href="<?php echo $tvox_library_url;?>"><img src="<?php echo($tvox_images_url);?>bottone_<?php if (is_tax('media')) echo ('att'); ?>.gif" alt="Library" /></a><a href="<?php echo $tvox_library_url;?>"><img src="<?php echo($tvox_images_url);?>library_<?php if (is_tax('media')) echo ('att'); ?>.gif" alt="Library" /></a></div></td>
<td><div class="tvox-puls"><a href="<?php echo $tvox_links_url;?>"><img src="<?php echo($tvox_images_url);?>bottone_.gif" alt="Links" /></a><a href="<?php echo $tvox_links_url;?>"><img src="<?php echo($tvox_images_url);?>links_.gif" alt="Links" /></a></div></td>
</tr>
<tr>
<td><div class="tvox-puls"><a href="<?php echo $tvox_news_url;?>"><img id="bot-news" src="<?php echo($tvox_images_url);?>bottone_.gif" alt="News" /></a><a href="<?php echo $tvox_news_url;?>"><img id="label-news" src="<?php echo($tvox_images_url);?>news_.gif" alt="News" /></a></div></td>
<td><div class="tvox-puls"><img src="<?php echo($tvox_images_url);?>bottone_.gif" alt="Search" /><img src="<?php echo($tvox_images_url);?>search_.gif" alt="Search" /></div></td>
<td><div class="tvox-puls"><a href="<?php echo $tvox_forum_url;?>"><img src="<?php echo($tvox_images_url);?>bottone_.gif" alt="Forum" /></a><a href="<?php echo $tvox_forum_url;?>"><img src="<?php echo($tvox_images_url);?>forum_.gif" alt="Forum" /></a></div></td>
<td><div class="tvox-puls"><a href="<?php echo $tvox_shop_url;?>"><img src="<?php echo($tvox_images_url);?>bottone_.gif" alt="Shop" /></a><a href="<?php echo $tvox_shop_url;?>"><img src="<?php echo($tvox_images_url);?>shop_.gif" alt="Shop" /></a></div></td>
</tr>
</table>
</td></tr>
</table>
