<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Member Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <table class="table text-center table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Account</th>
                    <th>Pemilik</th>
                    <th>jumlah Saldo</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include_once "class_bankAccount.php";
                $ctr1 = new BankAccount('C01', 5000000, 'Syeh');
                $ctr2 = new BankAccount('C02', 6043000, 'Adi');
                $ctr3 = new BankAccount('C03', 1025000, 'Sigit');
                $array1 = [$ctr1, $ctr2, $ctr3];
                $ctr1->deposit(1000000);
                $ctr2->transfer($ctr3, 1500000);
                $ctr1->transfer($ctr2, 500000);
                $ctr3->withdraw(2500000);
                $array2 = [$ctr1, $ctr2, $ctr3];
                $no = 1;
                foreach ($array1 as $ar1) : ?>
                    <tr>
                        <th><?= $no++; ?>
                        </th>
                        <td><?= $ar1->nomor ?></td>
                        <td><?= $ar1->customer ?></td>
                        <td><?= $ar1->saldo ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>




