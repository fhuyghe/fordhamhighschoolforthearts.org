<?php

namespace App;

use Sober\Controller\Controller;

class PageAdmissions extends Controller
{
    public function introText () {
        return get_field('banner_info_text');
    }
}
