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
        // Load the form validation library
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
        $this->form_validation->set_rules('branch', 'Branch', 'required');

        // Validate bank account number: allow only numbers
        $this->form_validation->set_rules('account_number', 'Account Number', 'required|numeric|max_length[16]|min_length[8]');

        if ($this->form_validation->run() == FALSE) {
            // If validation fails, load the add_bank_account_view to show validation errors
            $this->load->view('add_bank_account_view');
        } else {
            // If validation succeeds, insert the data into the database
            $data = array(
                'bank_name' => $this->input->post('bank_name'),
                'branch' => $this->input->post('branch'),
                'account_number' => $this->input->post('account_number')
            );

            // Sanitize input to prevent XSS and injection attacks
            $data = $this->security->xss_clean($data);

            $this->BankAccountModel->insert_account($data);

            // Add a JavaScript alert to inform the user
            echo '<script>alert("Bank account added successfully.");</script>';

            // Redirect to the index page after a short delay (e.g., 2 seconds)
            echo '<script>setTimeout(function(){window.location.href="' . site_url('BankAccountController/index') . '";}, 1000);</script>';
        }
    }

    public function delete($id)
    {
        $this->BankAccountModel->delete_account($id);
        redirect('BankAccountController/index');
    }
}

?>