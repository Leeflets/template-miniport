<?php
namespace User\Template;

class Code extends \Leeflets\Template\Code {
	function setup_hooks() {
		$this->enqueue_script( 'miniport-config', 'js/config.js', array( 'jquery') );
		$this->enqueue_script( 'skeljs', 'js/skel.min.js', array(), '0.3.3' );
	}
}
