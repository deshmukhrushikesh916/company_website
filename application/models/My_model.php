<?php

class  My_model extends  CI_model
{
	public  function  insert($tname,$data)
	{
		$this->db->insert($tname,$data);
	}

	public  function select($tname)
	{
		return $this->db->get($tname)->result_array();
	}

	public function select_where($tname,$cond)
	{
		return $this->db->where($cond)->get($tname)->result_array();
	}
	

	public function update($tname,$cond,$data)
	{
		$this->db->where($cond)->update($tname,$data);
	}
	public  function delete($tname,$cond)
	{
		return $this->db->where($cond)->delete($tname);
	}
}



?>