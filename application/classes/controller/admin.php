<?php defined('SYSPATH') OR die('No direct access allowed.');

Class Controller_Admin extends Controller_Template {
	
	public $template = 'admin/template';
	
	public function before() {
		$uri = Request::detect_uri();
		parent::before();
		if (!Auth::instance()->logged_in() && $uri !== '/admin/login'){
			
			Request::current()->redirect('admin/login');
			
		}
	}
	
	public function action_index() {
	
		$gender_female = ORM::factory('contact')->getContactCount('gender','female');
		$gender_male = ORM::factory('contact')->getContactCount('gender','man');
		
		$this->template->content = View::factory('admin/intro')
			->bind('gender_female',$gender_female)
			->bind('gender_male',$gender_male);
			
	}
	
	public function action_imageadd() {
	
		if(strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
				
			$file = Validation::factory($_FILES)
				->rule('image', 'Upload::type', array(':value',array('jpg','png','gif')));

			if($file->check()) {
			
				$fileName = Upload::save($_FILES['image'],NULL,'assets/images/uploads/');
				
				$randName = str_replace(DOCROOT.'assets/images/uploads/','',$fileName);
				
				Image::factory($fileName)
						->resize(225,225, Image::INVERSE)
						->crop(225,225, Image::AUTO)
						->save('assets/images/randomimage/'.$randName);
						
				unlink($fileName);
				
				Request::current()->redirect('page/images');
			
			}
			
			
		}
		
		$this->template->content = View::factory('admin/add_image');
		
	
	}
	
	public function action_all_news() {
	
		$this->template->content = View::factory('admin/all_news')
			->bind('articles',$articles)
			
			->bind('page_links',$page_links);

		// Get the total count of records in the database
		$count = DB::select(DB::expr('COUNT(*) AS mycount'))->from('article_type')->where('article_type.type_id','=',1)->execute('alternate')->get('mycount');
		
		// Create an instance of Pagination class and set values
		$pagination = Pagination::factory(array(
			'total_items'    => $count,
			'items_per_page' => 5,
		));

		$articles = DB::select(array('article.id','article_id'),'title','content','images','created_at','updated_at')->from('article_type')
			->join('article')->on('article_type.article_id','=','article.id')
			->where('article_type.type_id','=',1)
			->order_by('article_id','DESC')
			->as_object()
			->limit($pagination->items_per_page)
			->offset($pagination->offset)->execute();

		$page_links = $pagination->render();

	}

	
	
	
	public function action_login() {
	
		
		if(Auth::instance()->logged_in()) {
			
			Request::current()->redirect('admin');
		
		}
		if(strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
			
			$post = Validation::factory($_POST);
			
			$post->rule('username', 'not_empty')
				 ->rule('password', 'not_empty');
				 
			if($post->check()) {
				$user = Auth::instance()->login($post['username'], $post['password']);
				
				if($user) {
					
					Request::current()->redirect('admin');
				
				}
			
			}
		
		}
		
		$this->template->content = View::factory('admin/login');
	}
	
	public function action_logout() {
	
		if(Auth::instance()->logged_in()) {
			
			Auth::instance()->logout();
			Request::current()->redirect('admin/login');
			
		}
	
	}
	
	public function action_medewerkers() {
		
		$employees = ORM::factory('employees')->getAllEmployees();
		$this->template->content = View::factory('admin/employees')->bind('employees',$employees);
	
	}
	
	
	
}