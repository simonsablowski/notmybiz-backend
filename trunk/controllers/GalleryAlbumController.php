<?php

class GalleryAlbumController extends /*Authentication*/Controller {
	public function getFields() {
		$Fields = array();
		
		$Fields[] = new ObjectField('ParentId', 'Parent Album', 'GalleryAlbum');
		
		$Fields[] = new TextField('key', 'Key', 20);
		
		$Fields[] = new TextField('title', 'Title', 255);
		
		$Fields[] = new TextField('description', 'Description');
		
		$Fields[] = new OptionsField('status', 'Status', array(
			new Option('active', 'active', TRUE),
			new Option('deleted', 'deleted')
		));
		
		return $Fields;
	}
}