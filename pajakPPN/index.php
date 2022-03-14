<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pajak PPN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <a href="../index.php" class="fs-1 m-3 text-dark"><i class="bi bi-house-fill"></i></a>
    <div class="container">
        <div class="card position-absolute top-50 start-50 translate-middle bg-light">
            <div class="card-header">Pajak PPN</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="number" name="totalHarga" class="form-control" placeholder="Total Harga" min=0>
                    </div>
                    <div class="float-end">
                        <button class="btn btn-danger" type="reset">Reset</button>
                        <button class="btn btn-primary" type="submit" name="hitung">Hitung</button>
                    </div>
                </form>
            </div>
            <?php 
                if (isset($_POST['hitung'])) {
                    $totalHarga = $_POST['totalHarga'];
                    $ppn = $totalHarga * 10 / 100;
                    $jumlah = $totalHarga + $ppn;
            ?>
            <div class="container fs-6">
                <p>PPN (10%) = Rp <?php echo $ppn; ?></p>
                <p>Jumlah = Rp <?php echo $jumlah; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

