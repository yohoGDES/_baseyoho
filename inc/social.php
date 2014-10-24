<?php
	// Links to social sharing
	$title = urlencode(get_the_title());
	$url = urlencode(get_permalink());
?>
<ul class="social-share">
	<li>
		<a rel="external nofollow" class="ss-twitter" href="http://twitter.com/intent/tweet/?text=<?php echo $title; ?>&url=<?php echo $url; ?>" target="_blank"></a>
	</li>
	<li>
		<a rel="external nofollow" class="ss-facebook" href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=<?php echo $url; ?>&p[title]=<?php echo $title; ?>" target="_blank"></a>
	</li>
	<li>
		<a rel="external nofollow" class="ss-google" href="https://plus.google.com/share?url=<?php echo $url; ?>" target="_blank"></a>
	</li>
</ul>