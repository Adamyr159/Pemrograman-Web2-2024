<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
        <h3>Tambah Pasien</h3>
        <!-- form validasi -->
        <form class="forms-sample" action="{{ url('/dashboard/pasien/update', $pasien->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label">Kode Pasien</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode"
                        placeholder="Masukkan Kode Pasien" value="{{ $pasien->kode }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pasien</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Pasien" value="{{ $pasien->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                        placeholder="Masukkan Tempat Lahir" value="{{ $pasien->tmp_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        placeholder="Masukkan Tanggal Lahir" value="{{ $pasien->tgl_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender_male" value="L" {{ $pasien->gender == 'L' ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_male">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender_female" value="P" {{ $pasien->gender == 'P' ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_female">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="Masukkan Email" value="{{ $pasien->email }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat">{{ $pasien->alamat }}"</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelurahan_nama" class="col-sm-4 col-form-label">Nama Kelurahan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kelurahan_nama" name="kelurahan_nama"
                        placeholder="Masukkan Nama Kelurahan" value="{{ $pasien->kelurahan_nama }}">
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