<?php defined('SYSPATH') OR die('No direct access allowed.');

Class Controller_Article extends Controller_Template {


	public function action_all_news() {
	
		$this->template->content = View::factory('all_news')
				->bind('articles',$articles)
				
				->bind('page_links',$page_links);

		// Get the total count of records in the database
		$count = DB::select(DB::expr('COUNT(*) AS mycount'))->from('article_type')->where('article_type.type_id','=',1)->execute('alternate')->get('mycount');

		// Create an instance of Pagination class and set values
		$pagination = Pagination::factory(array(
			'total_items'    => $count,
			'items_per_page' => 10,
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
	
	public function action_view_news($id) {
	
		$article = ORM::factory('article')->where('id','=',$id)->find();
		
		if($article->title == null) {
		
			Request::current()->redirect('article/all_news');
			
		} else {
			
			$this->template->content = View::factory('article')->bind('article',$article);
			
		}
	}


}