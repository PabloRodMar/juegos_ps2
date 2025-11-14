<?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
                the_title('<h2>', '</h2>');
                if(has_post_thumbnail()){
                    the_post_thumbnail('full', array('class' => 'img-fluid'));
                }
                the_content();
             get_the_category( );
             wp_trim_words(get_the_excerpt(), 20);
        }
    } else {
        echo '<p>No content found</p>';
    }
?>