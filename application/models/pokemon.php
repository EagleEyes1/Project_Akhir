<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pokemon extends CI_Model{
    public function read ($id=FALSE) {
        if ($id === FALSE) {
            return $this->db->get("pokemon")->result_array();
        }
        else{
            $query =$this->db->get_where("pokemon", array('id' => $id));
            return $query->row();
        }
    }

    public function create($id, $filename){
        $data = array(
            'id'=>$id,
            'name'=>$this->input->pokemon('name', TRUE),
            'type1'=>$this->input->pokemon('type1', TRUE),
            'type2'=>$this->input->pokemon('type2', TRUE),
            'filename'=>$filename
        );

        $this->db->insert('pokemon', $data);
    }

    public function update($id,$filename){
        $data = array(
            'name'=>$this->input->pokemon('name', TRUE),
            'type1'=>$this->input->pokemon('type1', TRUE),
            'type2'=>$this->input->pokemon('type2', TRUE),
			'filename'=>$filename
        );
        $this->db->where('id', $id);
        $this->db->update('pokemon', $data);
    }
    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete('pokemon');
    }

    public function deleteAll(){
        $this->db->empty_table('pokemon');
    }
}
