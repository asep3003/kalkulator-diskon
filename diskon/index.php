<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <a href="../index.php" class="fs-1 m-3 text-dark"><i class="bi bi-house-fill"></i></a>
    <div class="container">
        <div class="card position-absolute top-50 start-50 translate-middle bg-light">
            <div class="card-header">Diskon</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="number" name="hargaSemula" class="form-control" placeholder="Harga Semula" min=0>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" name="persenDiskon" class="form-control" placeholder="Persentase Diskon" step="0.01" min=0 max=100>
                    </div>
                    <div class="float-end">
                        <button class="btn btn-danger" type="reset">Reset</button>
                        <button class="btn btn-primary" type="submit" name="hitung">Hitung</button>
                    </div>
                </form>
            </div>
            <?php 
                if (isset($_POST['hitung'])) {
                    $hargaSemula = $_POST['hargaSemula'];
                    $persenDiskon = $_POST['persenDiskon'];
                    $besarDiskon = $hargaSemula * $persenDiskon / 100;
                    $hargaSetelahDiskon = $hargaSemula - $besarDiskon;
            ?>
            <div class="container fs-6">
                <p>Besar Diskon = Rp <?php echo $besarDiskon; ?></p>
                <p>Harga Setelah Diskon = Rp <?php echo $hargaSetelahDiskon; ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>

