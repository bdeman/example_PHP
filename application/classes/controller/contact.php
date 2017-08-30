<?php defined('SYSPATH') OR die('No direct access allowed.');

Class Controller_Contact extends Controller_Template {

	public function action_index() {
		
		if(strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
		
			$post = Validation::factory($_POST);
			
			$post->rule('lastname', 'not_empty')
				->rule('firstname', 'not_empty')
				
				->rule('phonenumber', 'not_empty')
				->rule('phonenumber', 'phone')
				
				->rule('postalcode', 'regex',array(':value','/[0-9]{4}[a-zA-Z]{2}/i'))
				
				->rule('birthday', 'max_length',array(':value','2'))
				->rule('birthday', 'numeric')
				
				->rule('birthmonth', 'max_length', array(':value', '2'))
				->rule('birthmonth', 'numeric')
				
				->rule('birthyear', 'max_length', array(':value', '4'))
				->rule('birthyear', 'min_length', array(':value', '4'))
				->rule('birthyear', 'numeric')
				
				->rule('content', 'not_empty')
				->rule('content', 'min_length', array(':value', '5'))
				
				->rule('email', 'Valid::email')
				
				->rule('help_type_area', 'not_empty')
				->rule('in_threatment', 'not_empty')
				->rule('found_how', 'not_empty');
			
		
			if($post->check()) {
				
				$contact = ORM::factory('contact');
				
				$help_type_area_all = '';
				if(isset($post['help_type_area'])) {
					foreach($post['help_type_area'] as $help_type) {
					
						$help_type_area_all .= $help_type.',';
					}
				}
				$help_type_area_all = substr($help_type_area_all,0,-1);

				$contact->newClient($post,$help_type_area_all);
				Request::current()->redirect('contact/done');
				
			} else {

				$errors = $post->errors('errors');

				$article = ORM::factory('article')->where('id','=',28)->find();
				
				$this->template->content = View::factory('contact_form')
					->bind('article',$article)
					->bind('post', $post)
					->bind('errors', $errors);

			}

		} else {
			
			$article = ORM::factory('article')->where('title','=','contact')->find();
			$this->template->content = View::factory('contact_form')
				->bind('article',$article);
				
		}
		
	}
	
	public function action_done() {
		
		$this->template->content = View::factory('contact_done');
		
	}
}