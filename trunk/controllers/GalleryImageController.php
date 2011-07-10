<?php

class GalleryImageController extends /*Authentication*/Controller {
	public function getFields() {
		$Fields = array();
		
		$Fields[] = new ObjectField('GalleryAlbumId', 'Album');
		
		$Fields[] = new TextField('fileName', 'File Name', 100);
		
		$Fields[] = new TextField('title', 'Title', 100);
		
		$Fields[] = new TextField('description', 'Description');
		
		$Fields[] = new PositionField('position', 'Position');
		
		$Fields[] = new OptionsField('preview', 'Preview', array(
			new Option('yes', 'Yes', TRUE),
			new Option('no', 'No')
		));
		
		$Fields[] = new OptionsField('status', 'Status', array(
			new Option('active', 'Active', TRUE),
			new Option('deleted', 'Deleted')
		));
		
		return $Fields;
	}
}