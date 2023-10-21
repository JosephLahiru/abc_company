<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Add Bank Account</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('BankAccountController/add'); ?>
    <label for="bank_name">Bank Name:</label>
    <input type="text" id="bank_name" name="bank_name"><br>
    <label for="branch">Branch:</label>
    <input type="text" id="branch" name="branch"><br>
    <label for="account_number">Account Number:</label>
    <input type="text" id="account_number" name="account_number"><br>
    <input type="submit" name="submit" value="Add Bank Account">
    </form>
</body>

</html>