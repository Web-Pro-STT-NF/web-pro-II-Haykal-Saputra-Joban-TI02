<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispenser serba ada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="text-center">
        <div class="card mt-3 ms-4" style="width: 50rem;">
            <h1 class="card-header">Data Dispenser </h1>
            <div class="card-body">
                <?php
                require_once "class_dispenser.php";
                $pembeli1 = new dispenser("Ucup", "Es Jeruk", 15000);

                echo "Nama : ", $pembeli1->getnama(), "<br/>";
                echo "Membeli : ", $pembeli1->getminum(), "<br/>";

                $pembeli1->setVolume(8000);

                echo "Volume Wadah awal : " . $pembeli1->getVolume() . "<br>";
                echo $pembeli1->teh_tarik() . "<br>";
                echo $pembeli1->nambah() . "<br>";
                echo $pembeli1->nambah_lagi() . "<br>";
                echo "Volume Sisa Dari Wadah Teh tarik : " . $pembeli1->getVolume() . "<br>";
                ?>

            </div>
        </div>
    </div>
</body>

</html>