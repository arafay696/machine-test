<?php

class Common_model extends CI_Model
{
    public function insert_entry($table = 'test_histories', $data = [])
    {
        $this->db->insert($table, $data);
    }

    public function select_all_histories()
    {
        $this->db->order_by("created_at", "desc");
        $query = $this->db->get('test_histories');
        $data = $query->result_array();

        $results = [];
        foreach ($data as $result) {
            array_push($results, [
                'id' => $result['id'],
                'title' => $result['title'] . ' on ' . date('F j, Y, g:i a', strtotime($result['created_at']))
            ]);
        }
        return $results;
    }

    public function delete_entry($table = 'test_histories', $id)
    {
        $this->db->delete('test_histories', array('id' => $id));
        return $this->select_all_histories();
    }

}