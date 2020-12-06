<?php

    class database_model extends CI_Model
    {
        function __construct()
				{
					parent::__construct();
				}

			public function getassets()
				{
                    $result = $this->db->get('assets')->result_array();
                    return $result;
                }
                
                
			public function editassets()
				{
                    $result = $this->db->get('assets')->result_array();
                    return $result;
				}


    }

?>