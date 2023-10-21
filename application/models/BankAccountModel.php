<?php class BankAccountModel extends CI_Model
{
    public function get_accounts()
    {
        $query = $this->db->get_where('bank_accounts', array('deleted' => 0));
        return $query->result();
    }

    public function insert_account($data)
    {
        return $this->db->insert('bank_accounts', $data);
    }

    public function delete_account($id)
    {
        $this->db->where('id', $id);
        return $this->db->update('bank_accounts', array('deleted' => 1));
    }
} ?>