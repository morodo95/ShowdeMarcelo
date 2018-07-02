<?php
$content = apply_filters( 'the_content', get_the_content() );
$video = get_media_embedded_in_content( $content, array( 'video' ) );

if ( ! empty( $video ) ) {
	foreach ( $video as $video_html ) {
		echo '<div class="entry-video">';
		echo $video_html;
		echo '</div>';
	}
};


?>