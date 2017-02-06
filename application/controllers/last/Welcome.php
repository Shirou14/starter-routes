<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hogwarts extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->get('6');
        /*$who = $this->$source['who'];
        $what = $this->$source['what'];
		/*$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		*/$this->data = array_merge($this->data, $source);
       /* $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];*/

		$this->render();
	}

}