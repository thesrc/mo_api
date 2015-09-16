<?php

class mo_api_contacts extends mo_api
{

    public function __construct($id = false, $history = false)
    {
        parent::__construct();
        if (! $id) {
            $this->set_uri(self::APIURI . 'contacts');
        } elseif($id && $history) {
            $this->set_uri(self::APIURI . 'contacts/' . $id . '/history');
        }else{
			 $this->set_uri(self::APIURI . 'contacts/' . $id);
		}
    }
}