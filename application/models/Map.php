<?php
class Map extends CI_Model {
    public function getData(){
        $query = $this->db->get('book');
		return $query;
    }
    public function getOne($id){
        $this->db->where('id', $id);
        $query =   $this->db->get('book');
        $data = $query->result_array();
        return $data;
    }
    public function getBookName($id){
        $this->db->where('id', $id);
        $query =   $this->db->get('book');
        if($query->num_rows()>0){
        $array = $query->result_array();
        return $array[0]['name'];
        }

    }
    public function getBookNameByComment($id){
        $this->db->where('id', $id);
        $query =   $this->db->get('impression');
        if($query->num_rows()>0){
        $array = $query->result_array();
        $book_id= $array[0]['book_id'];
        return  $this->Map->getBookName($book_id);
        }
      

    }
    public function getAllComment($id){
    $query = $this->db->get('impression');
    $array1 = array();
    $array2 = array();
    foreach($query->result_array() as $row)
        {
        if ($row['book_id']==$id)
           $array1[] = $row['id']; 
        }
    foreach($query->result_array() as $row)
        {
        if ($row['book_id']==$id)
           $array2[] = $row['name']; 
        } 
    $array = array_combine($array1, $array2);       
    return $array;
    }
    public function getOneComment($id){
        $this->db->where('id', $id);
        $query =   $this->db->get('impression');
        $data = $query->result_array();
        return $data;
    }
}