<?php
// $Id$

// Inspircd 1.1/1.2 protocol file for Denora support on Magirc

class Protocol {
	var $oper_hidden_mode = 'H';
	var $helper_mode = 'h';
	var $bot_mode = 'B';
	var $services_protection_mode = '';
	var $chan_hide_mode = 'I';
	var $chan_secret_mode = 's';
	var $chan_var_mode = 'p';
	
	var $chan_exception = 1;
	var $chan_invites = 1;
	var $line_sq = 0;
	var $line_g = 1;
	var $host_cloaking = 1;
	
	function Protocol() {
		;
	}
	
	function getParam($param) {
		return @$this->$param;
	}
}

?>