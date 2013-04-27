<?php

class GalleryImageController extends AuthenticationController {
	public function getFields() {
		$Fields = array();
		
		$Fields[] = new ObjectField('AlbumId', 'Album', 'GalleryAlbum');
		
		$Fields[] = new TextField('fileName', 'File Name', 100);
		
		$Fields[] = new TextField('title', 'Title', 100);
		
		$Fields[] = new TextField('description', 'Description');
		
		$Fields[] = new PositionField('position', 'Position');
		
		$Fields[] = new OptionsField('preview', 'Preview', array(
			new Option('yes', 'yes', TRUE),
			new Option('no', 'no')
		));
		
		$Fields[] = new OptionsField('status', 'Status', array(
			new Option('active', 'active', TRUE),
			new Option('deleted', 'deleted')
		));
		
		return $Fields;
	}
}