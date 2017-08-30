<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Article extends ORM {
	
	protected $_table_name = 'article';
	
	public function searchNews($q) {
		
		$query = DB::select(array('article.id','article_id'),'title','content')->from('article_type')
			->join('article')->on('article_type.article_id','=','article.id')
			->join('type')->on('article_type.type_id','=','type.id')
			->where('article_type.type_id','=',1)
			->and_where('content','LIKE','%'.$q.'%')
			->or_where('title','LIKE','%'.$q.'%')
			->order_by('created_at','DESC')
			->as_object()
			->execute();
			
		return $query;
	
	}
	
	public function getAllNews() {
	
		$query = DB::select(array('article.id','article_id'),'title','content','images','created_at','updated_at')->from('article_type')
			->join('article')->on('article_type.article_id','=','article.id')
			->join('type')->on('article_type.type_id','=','type.id')
			->where('article_type.type_id','=',1)
			->order_by('created_at','DESC')
			->as_object()
			->execute();
			
		return $query;
	
	}
	
	
	public function editArticle($id,$files=null) {
			
		DB::update('article')->set(
			array(
				'title' => $_POST['title'],
				'content' => $_POST['content'],
				'images' => $files,
			))
		->where('id','=',$id)->execute();
		
	}
	
	public function getImages($id) {
		
		$query = DB::select('images')->from('article')
			->where('article.id','=',$id)
			->as_object()
			->execute();
		
		return $query['images'];
		
	}
	
	public function deleteArticle($id) {
	
		DB::delete('article_type')->where('article_id','=',$id)->execute();
		DB::delete('article')->where('id','=',$id)->execute();
		
	}
	
	public function newArticle($article,$files=NULL) {
		$query = DB::insert('article',array('title','content','images','created_at','updated_at'))
			->values(array($article['title'],$article['content'],$files,date('Y-m-d H:i:s'),date('Y-m-d H:i:s')))
			->execute();
			
		DB::insert('article_type',array('article_id','type_id'))
			->values(array($query[0],'1'))
			->execute();
		
		return $query[0];
    }
	
	
	public function updateArticle($id) {
		
		DB::update('article')->set(
			array(
				'title' => $_POST['title'],
				'content' => $_POST['content'],
			))
		->where('id','=',$id)->execute();
	
	}
	
}