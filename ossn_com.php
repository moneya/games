<?php

function games_init(){
	$games_url = ossn_site_url().'games';
	$icon = ossn_site_url('components/games/images/game.png');
    ossn_register_sections_menu('newsfeed', array(
            'text' => 'Games',
            'url' => $games_url,
            'section' => 'links',
            'icon' => $icon
        ));
	
	ossn_register_page('games', 'games_page');
}
function games_page(){
  	$title = 'Games';
    $contents = array('content' => ossn_view('components/games/index'));
    $content = ossn_set_page_layout('contents', $contents);
    echo ossn_view_page($title, $content);	
}
		
ossn_register_callback('ossn', 'init', 'games_init');

?>