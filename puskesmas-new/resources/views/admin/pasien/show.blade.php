<x-layout>
    <x-slot name="page_name">Halaman Pasien / Detail</x-slot>
    <x-slot name="page_content">
        <a href="{{ url('/dashboard/pasien/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>  Tambah Pasien</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Kode Pasien</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nama Kelurahan</th>
            </tr>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tmp_lahir }}</td>
                <td>{{ $pasien->tgl_lahir }}</td>
                <td>{{ $pasien->gender }}</td>
                <td>{{ $pasien->email }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->kelurahan_nama }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>