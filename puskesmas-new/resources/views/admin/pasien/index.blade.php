<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">

        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <a href="{{ url('/dashboard/pasien/create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>  Tambah Pasien</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Kode Pasien</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Nama Kelurahan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_pasien as $pasien)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pasien->kode }}</td>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->gender }}</td>
                    <td>{{ $pasien->kelurahan_nama }}</td>
                    <td>
                        <a href="{{ url('/dashboard/pasien/show', $pasien->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ url('/dashboard/pasien/edit', $pasien->id) }}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        <form action="{{ url('/dashboard/pasien/destroy', $pasien->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn text-danger" onclick="return confirm('Yakin ingin hapus data {{ $pasien->nama }}?')"><i class="far fa-trash-alt"></i>Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>