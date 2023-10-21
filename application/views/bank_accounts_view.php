<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Accounts</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h2>Bank Accounts</h2>
    <table>
        <tr>
            <th>Bank Name</th>
            <th>Branch</th>
            <th>Account Number</th>
            <th>Action</th>
        </tr>
        <?php foreach ($accounts as $account): ?>
            <tr>
                <td>
                    <?php echo $account->bank_name; ?>
                </td>
                <td>
                    <?php echo $account->branch; ?>
                </td>
                <td>
                    <?php echo $account->account_number; ?>
                </td>
                <td><a href="<?php echo site_url('BankAccountController/delete/' . $account->id); ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>