<?php

class First extends Application
{
    public function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // get the single author
        $record = $this->quotes->get(1);
        
        // merge data with record (both associative arrays)
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
}