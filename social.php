<?php
    // Load Elgg engine
    include_once(dirname(dirname(__FILE__)) . "/engine/start.php");
    include_once(dirname(dirname(__FILE__)) . "/mod/elgg_social_login/start.php");
	
    // set the title
    $title = "Login - Centillien";

   echo elgg_view("elgg_social_login/login");
