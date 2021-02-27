<?php
class server_model extends CI_model{

    function create($form_Array){

        $this->db->insert("student",$form_Array); //INSERT INTO student (sname,rollno,std) values (?, ?, ?);
         
    }
    function all(){
        return $users = $this->db->get('student')->result_array(); //SELECT * from student;
    }
   /* function fetch_data(){
        $this->db->select('*');
        $result = $this->db->get('student');
        return $result; 
    }*/
    function getUser($id){
            
        $this->db->where('id',$id);
        return $result = $this->db->get('student')->row_array();// select from student where id=?

}
}
?>