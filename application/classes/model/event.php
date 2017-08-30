<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Event extends ORM {
	
	protected $_table_name = 'event';
	
	public function getAllEvents() {
	
		$query = DB::select()->from('agenda_event')
			->join('agenda')->on('agenda_event.agenda_id','=','agenda.id')
			->join('event')->on('agenda_event.event_id','=','event.id')
			->execute();
			
		return $query;
	
	}
	
	
}