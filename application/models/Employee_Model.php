<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 /*
     * author : bharani
     * date : 21-12-2016
     * Login Details
     */
class Employee_Model extends CI_Model{

	public function __construct()
    {
        parent::__construct();
    }
	
	public function allEmployee() {

		 	$this->db->select('*');
            $this->db->from('employee');
            $where = "( is_deleted = '0')";
            $this->db->where($where);
            //$this->db->order_by("empid","desc");
            $result = $this->db->get();
           
            if( $result->num_rows() != 0 )
				{
					$result = $result->result();

					return $result;
				}
		 

		
	}

	public function singleEmployee($id) {

		 	$this->db->select('*');
            $this->db->from('employee');
            $where = "( empid = '$id')";
            $this->db->where($where);
            //$this->db->order_by("empid","desc");
            $result = $this->db->get();
           
            if( $result->num_rows() != 0 )
				{
					$result = $result->row();

					return $result;
				}
		 

		
	}
	
	public function addEmployee($postdata) {
		$data =parse_str($postdata);
		$empno= isset( $empno ) ? $empno : '';
		$empname= isset( $empname ) ? $empname : '';
		$emailid= isset( $emailid ) ? $emailid : '';
		$phone= isset( $phone ) ? $phone : '';
		$dob= isset( $dob ) ? $dob : '';
		$currentdate = date('Y-m-d H:i:s');
		$dobs = date('Y-m-d',strtotime($dob));
		$data = array('empname' => $empname,
				     'emailid'=>$emailid,
				     'phone'=>$phone,
				     'dob'=>$dobs,
				     'is_deleted'=>'0',
				     'createddate'=>$currentdate,
				     'updateddate'=>$currentdate
				    	  );

		if(!empty($empno)) {
				$this->db->where('empid', $empno);
			    $this->db->update('employee', $data);
			    echo "updated";
		}else {
			$this->db->insert('employee', $data); 
				    $insert_id = $this->db->insert_id();
			if($insert_id) {
				echo "success";
			}
		}
				    
		
	}


	public function deleteEmployee($id) {
				$currentdate = date('Y-m-d H:i:s');
				 $data = array('is_deleted'=>'1',
		                 'updateddate'=>$currentdate
		                 );
		       $this->db->where('empid', $id);
			    $this->db->update('employee', $data);
			    echo "Deleted successfully";

	}
}
