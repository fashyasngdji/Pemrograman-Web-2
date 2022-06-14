<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once 'class_account.php';
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No. Account</th>
                <th scope="col">Pemilik</th>
                <th scope="col">Saldo</th>
            </tr>
        </thead>
        <tbody></tbody>
        <?php
        class AccountBank extends Account
        {
            //tambahkan data baru
            public $customer;

            function __construct($nomor, $saldo, $cust)
            {
                //memanggil constructor parent class
                parent::__construct($nomor, $saldo);
                $this->customer = $cust;
            }
            //tulis ulang method cetak
            function cetak()
            {
                echo "Costumer : " . $this->customer;
                echo "<br>";
                parent::cetak();
                echo "<br>";
            }
            function transfer($obj_account, $jumlah)
            {
                $obj_account->deposit($jumlah);
                echo "Nasabah " . $this->customer . " melakukan transfer kepada " . $obj_account->customer . " sebesar " . $jumlah;
                echo "<br>";
                echo "<br>";
                $this->withdraw($jumlah);
            }
            public function getSaldo()
            {
                return $this->saldo;
            }
        }

        $nsb1 = new AccountBank('C001', 6000000, "Ahmad");
        $nsb2 = new AccountBank("C002", 5350000, 'Budi');
        $nsb3 = new AccountBank('C003', 2500000, "Kurniawan");

        $ar_nsb = [$nsb1, $nsb2, $nsb3];
        $no = 1;
        foreach ($ar_nsb as $arr) : ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $arr->nomor; ?></td>
                <td><?= $arr->customer; ?></td>
                <td><?= $arr->getSaldo(); ?></td>
            </tr>
        <?php
            $no++;
        endforeach; ?>
        <?php
        //ahmadd menabung
        $nsb1->deposit(1000000);
        $nsb1->cetak();
        $nsb2->cetak();
        $nsb3->cetak();
        echo "<hr>";
        //ahmad mentransfer kepada nasabah lain
        $nsb1->transfer($nsb2, 500000);
        $nsb1->transfer($nsb3, 500000);
        $nsb1->cetak();
        $nsb2->cetak();
        $nsb3->cetak();
        echo "<hr>";
        //budi menarik uang
        $nsb2->withdraw(2500000);
        $nsb1->cetak();
        $nsb2->cetak();
        $nsb3->cetak();
        ?>
        </tbody>
    </table>
</body>

</html>