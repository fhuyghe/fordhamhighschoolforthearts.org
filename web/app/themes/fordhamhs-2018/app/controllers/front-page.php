<?php

namespace App;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

    public function art_pages() {
	    $args = array(
	    	'post_type' => 'page',
	    	'cat'	=> 3
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query;
    }

    public function topImage() {
        return get_field('top_image');
	}
	
	public function video() {
        return get_field('video');
    }
}
