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
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

	public function shucks()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// Grab the author to pass to our view
		$source = $this->quotes->get('2');
		$this->data = array_merge($this->data, $source);

		$this->render();
	}
        
        /**
         * Random quote page - issue 10
         */
        public function random()
        {
		$this->data['pagebody'] = 'justone';
                $count = count($this->quotes->data);
		$source = $this->quotes->get(rand(0, $count));
		$this->data = array_merge($this->data, $source);
		$this->render();	
        }

}
