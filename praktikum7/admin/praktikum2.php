<?php 
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<div class="container">
        <h2>Form Nilai Siswa</h2>
        <form>
        <div class="form-group row">
            <label for="name" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="name" name="name" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select" required="required">
                <option value="PW2">Pemrograman Web 2</option>
                <option value="UI/UX">UI/UX</option>
                <option value="JARKOM">Jaringan Komputer</option>
                <option value="BASDAT">Basis Data</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="UTS" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="UTS" name="UTS" placeholder="Nilai UTS" type="number" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="UAS" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="UAS" name="UAS" placeholder="Nilai UAS" type="number" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="TUGAS" class="col-4 col-form-label">Nilai Tugas</label> 
            <div class="col-8">
            <input id="TUGAS" name="TUGAS" placeholder="Nilai Tugas" type="number" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>

    <?php 
    if (isset($_GET['submit'])) {
        // Menangkap data input
        $name = $_GET['name'];
        $matkul = $_GET['matkul'];
        $UTS = $_GET['UTS'];
        $UAS = $_GET['UAS'];
        $TUGAS = $_GET['TUGAS'];
        
        echo "Nama Siswa : " . $name;
        echo "<br>Mata Kuliah : " . $matkul;
        echo "<br>Nilai UTS : " . $UTS;
        echo "<br>Nilai UAS : " . $UAS;
        echo "<br>Nilai TUGAS : " . $TUGAS;
    }
    ?>

<?php
require_once 'footer.html';
?>