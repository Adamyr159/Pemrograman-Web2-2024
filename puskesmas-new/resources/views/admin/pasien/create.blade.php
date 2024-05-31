<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
        <h3>Tambah Pasien</h3>
        <!-- form validasi -->
        <form class="forms-sample" action="{{ url('/dashboard/pasien/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label">Kode Pasien</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode"
                        placeholder="Masukkan Kode Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pasien</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                        placeholder="Masukkan Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        placeholder="Masukkan Tanggal Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="L">
                        <label class="form-check-label" for="gender_male">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender_female" value="P">
                        <label class="form-check-label" for="gender_female">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="Masukkan Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelurahan_nama" class="col-sm-4 col-form-label">Nama Kelurahan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kelurahan_nama" name="kelurahan_nama"
                        placeholder="Masukkan Nama Kelurahan">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>