<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class User extends CI_Model {


	public function getIPAddress() {  
		//whether ip is from the share internet  
		 if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
					$ip = $_SERVER['HTTP_CLIENT_IP'];  
			}  
		//whether ip is from the proxy  
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
		 }  
	//whether ip is from the remote address  
		else{  
				 $ip = $_SERVER['REMOTE_ADDR'];  
		 }  
		 return $ip;  
	}  

	public function event($operation){
		$header = str_replace("{","",json_encode(getallheaders()));
		$header = str_replace("}","",$header);
		$data = array
		(
			'date' => date('Y-m-d H:i:s'), 
			'operation' => $operation, 
			'header_info' => $header, 
			'ip_address' => $this->getIPAddress()

		);
		return $this->db->insert('strong_up_log',$data);

	}

    public function getData($table,$condition = null){
        if (!empty($condition) and $condition != null) {
            $this->db->where($condition);
        }
		$this->db->order_by('id', 'DESC');
		return $this->db->get($table)->result();

	}

    public function loadDataInnerJoin($table,$join_table,$join_description){

        $this->db->join($join_table,$join_description); 

		return $this->db->get($table)->result_array();

	}

	public function getINNERJOIN($toSelect, $table,$join_table,$join_description){
		$this->db->select($toSelect);
		$this->db->from($table);
		$this->db->join($join_table, $join_description);
		$query = $this->db->get();
		return $query->result_array();
	}



	public function loadDataInnerJoinWhere($table,$join_table,$join_description,$where = array()){

        $this->db->join($join_table,$join_description); 

		return $this->db->get_where($table, $where)->result_array();

	}

    public function insertData($table,$data=array()){

		return $this->db->insert($table,$data);

	}



    public function deleteData($table,$conditon=array()){

		return $this->db->delete($table,$conditon);

	}



    public function updateData($table,$data=array(),$conditon=array()){

		return $this->db->update($table,$data,$conditon);

	}





}