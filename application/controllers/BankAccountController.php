<?php
class BankAccountController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BankAccountModel');
    }

    public function index()
    {
        $data['accounts'] = $this->BankAccountModel->get_accounts();
        $this->load->view('bank_accounts_view', $data);
    }

    public function add()
    {
        // validate input data
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('branch', 'Branch', 'required');
        $this->form_validation->set_rules('account_number', 'Account Number', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('add_bank_account_view');
        } else {
            $data = array(
                'bank_name' => $this->input->post('bank_name'),
                'branch' => $this->input->post('branch'),
                'account_number' => $this->input->post('account_number')
            );
            $this->BankAccountModel->insert_account($data);
        }
    }
    public function delete($id)
    {
        $this->BankAccountModel->delete_account($id);
        redirect('BankAccountController/index');
    }
}

?>