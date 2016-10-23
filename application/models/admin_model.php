<?php
class Admin_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function add_news($data)
    {
    	$this->db->insert('news', $data);
    }

    public function delete_news($id)
    {
    	$this->db->delete('news', array('id' => $id));
    }

    public function delete_review($id)
    {
    	$this->db->delete('reviews', array('id' => $id));
    }

    public function get_news($id = NULL, $per_page = NULL,$offset = NULL)
    {
    	if($id != NULL)
    		$this->db->where('id', $id);
    	$q = $this->db->get('news', $per_page, $offset);
    	return $q->result_array();
    }

    public function edit_news($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('news', $data); 
    }

    public function add_review($data)
    {
    	$this->db->insert('reviews', $data);
    }

    public function get_reviews($id = NULL)
    {
    	if($id != NULL)
    		$this->db->where('id', $id);
    	$q = $this->db->get('reviews');
    	return $q->result_array();
    }

    public function edit_review($id, $data)
    {
		$this->db->where('id', $id);
		$this->db->update('reviews', $data); 
    }

    public function has_voted($ip, $id)
    {
        $this->db->where('vote_ip', $ip);
        $this->db->where('vote_id', $id);
        $q = $this->db->get('votes');
        if($q->num_rows($q) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function add_vote($ip, $id, $type)
    {
        if($type == 'up')
        {
            $data = array('vote_ip' => $ip,
                'vote_id' => $id,
                'vote_type' => '+1');
            $this->db->insert('votes', $data);
        }
        else if($type == 'down')
        {
            $data = array('vote_ip' => $ip,
                'vote_id' => $id,
                'vote_type' => '-1');
            $this->db->insert('votes', $data);
        }
    }

    public function votes($id)
    {
        $this->db->select('SUM(vote_type) as votes');
        $this->db->where('vote_id', $id);
        $q = $this->db->get('votes');
        return $q->row_array();
    }
}