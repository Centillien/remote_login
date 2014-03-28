<head>
<script type="text/javascript" src="https://www.centillien.com/vendors/jquery/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="https://www.centillien.com/vendors/jquery/jquery-ui-1.8.16.min.js"></script>
</head>
<?php
    // Load Elgg engine
    include_once(dirname(dirname(__FILE__)) . "/engine/start.php");
 
    // make sure only logged in users can see this page	
 
    // set the title
    $title = "Login - Centillien";
 
    // layout the page

        $login_form_html = elgg_view_form('login');

        $login_form_html .= <<<STYLE
        <style type="text/css">
                #centillien-embedded-login fieldset {
			width: 212px;
			border: 1px;
			color #0054A7;
                        margin: 0;
                        padding: 0;
		}

		img{
		border:0px;
		margin: 2px;
		float: left;
		}
		

		label {
                float:left;
                width:50%;
                margin-right:0.5em;
                padding-top:0.2em;
                text-align:left;
		font-family : Georgia;
		font-size: 10px;`
                }

                #centillien-embedded-login .elgg-menu {
                        list-style: none;
                        padding: 0;
			font-family : Georgia;
			font-size: 10px;
			color : #0054A7;
                }

                #centillien-login .elgg-menu li {
                        display: inline-block;
			color : #0054A7;
                }
        </style>
STYLE;


    // View the form
	echo '<div id="centillien-embedded-login">';
	echo '<img alt="Centillien" width="210" src="https://www.centillien.com/_graphics/remote-login-centillien.jpg"></a><br/><br/><br/>';
	echo $login_form_html;
	echo '</div>';
?>
