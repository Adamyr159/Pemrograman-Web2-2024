<?php 
require_once 'koneksi.php';
$id_pasien = $_GET['id'];
if($id_pasien){
    $query = "SELECT * FROM pasien WHERE id_pasien=?";
    $stmt = $dbh->prepare($query);
    $stmt->execute([$id_pasien]);
    $pasien = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Create Data Pasie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
<div class="container">
        <h2>Daftar Pasien</h2>
        <form method="POST" action="proses.php">
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode</label> 
                <div class="col-8">
                <input id="kode" name="kode" type="text" class="form-control" required="required" value="<?= $pasien['kode']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" required="required" value="<?= $pasien['nama']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
                <div class="col-8">
                <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $pasien['tmp_lahir']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                <div class="col-8">
                <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required" value="<?= $pasien['tgl_lahir']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required" <?= ($pasien['gender'] == 'L' ? 'checked' : ''); ?>> 
                    <label for="gender_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" required="required" <?= ($pasien['gender'] == 'P' ? 'checked' : ''); ?>> 
                    <label for="gender_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" type="text" class="form-control" required="required" value="<?= $pasien['email']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">Alamat</label> 
                <div class="col-8">
                <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" required="required"><?= $pasien['alamat']; ?></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="kelurahan" class="col-4 col-form-label">Kelurahan</label> 
                <div class="col-8">
                <select id="kelurahan" name="kelurahan" class="custom-select" required="required">
                    <?php 
                    $query_kelurahan = "SELECT * FROM kelurahan";
                    $result_query_kelurahan = $dbh->query($query_kelurahan);
                    foreach($result_query_kelurahan as $kelurahan){
                        $selected = ($kelurahan['id_kelurahan'] == $pasien['kelurahan_id']) ? 'selected' : '';
                    ?>
                        <option value="<?= $kelurahan['id_kelurahan']; ?>" <?= $selected; ?>><?= $kelurahan['nama']; ?></option>
                    <?php } ?>
                </select>
                </div>
            </div> 
            <?php if($id_pasien){ ?>
                <input type="hidden" name="id" value="<?= $id_pasien; ?>">
            <?php }?>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary" value="edit">Update Data</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>