<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
        <a href="{{ url('/dashboard/pasien/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>  Tambah Pasien</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Kode Pasien</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Nama Kelurahan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_pasien as $pasien)
                <tr>
                    <td>{{ $pasien->id }}</td>
                    <td>{{ $pasien->kode }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->gender }}</td>
                    <td>{{ $pasien->kelurahan_nama }}</td>
                    <td>
                        <a href="{{ url('/dashboard/pasien/show', $pasien->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="#" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        <a href="#" class="text-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>