<?php
class EmployeeModel extends CI_Model
{
    public function getEmployee()
    {
       $query= $this->db->get('employee');
        return $query->result();
    
    }
    public function insertemployee($data)
    {
        return $this->db->insert('employee',$data);
    }

    public function editemployee($id)
    {
        $query= $this->db->get('employee',['id'=>$id]);
        return $query->row();
    }
    public function updateemployee($data, $id)
    {
       return $this->db->update('employee',$data,['id'=>$id]);
        
    }
    public function deleteEmployee($id)
    {
       return $this->db->delete('employee',['id'=>$id]);
        
    }
}