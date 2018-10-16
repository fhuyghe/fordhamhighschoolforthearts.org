<?php

namespace App;

use Sober\Controller\Controller;

class PageAbout extends Controller
{

    public function variables() {
        return (object) array(
            'missionStatement' => get_field('mission_statement'),
            'quote' => get_field('quote'),
            'author' => get_field('author'),
            'authorTitle' => get_field('author_title'),
            'rightImage' => get_field('right_image'),
            'bottomImage' => get_field('bottom_image')
        );
	}
	
	
}
