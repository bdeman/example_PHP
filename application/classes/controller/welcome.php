<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {

	public function action_index() {
		
		$article = ORM::factory('article')->where('title','=','homepage')->find();
		
		$this->template->content = View::factory('home')->bind('article',$article);
		
	}

}