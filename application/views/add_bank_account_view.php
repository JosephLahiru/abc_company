<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bank Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input[type="text"],
        input[type="submit"] {
            width: 90%;
            padding: 10px;

        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            margin-top: 50px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php $this->load->view('navbar'); ?>
    <h2 style="margin:20px">Add Bank Account</h2>
    <center>
        <?php echo validation_errors(); ?>
    </center>
    <?php echo form_open('BankAccountController/add'); ?>
    <label for="bank_name">Bank Name</label>
    <input type="text" id="bank_name" name="bank_name">
    <label for="branch">Branch</label>
    <input type="text" id="branch" name="branch">
    <label for="account_number">Account Number</label>
    <input type="text" id="account_number" name="account_number">
    <input type="submit" name="submit" value="Add Bank Account">
    </form>
</body>

</html>