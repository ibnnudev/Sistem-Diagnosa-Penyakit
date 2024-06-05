<x-app-layout>
    <x-slot name="title">Daftar Gejala</x-slot>
    <x-alert-error></x-alert-error>
    @if (session()->has('success'))
        <x-alert type="success" message="{{ session()->get('success') }}" />
    @endif
    <x-card>
        <x-slot name="option">
            <div class="btn btn-success add">
                <i class="fas fa-plus mr-1"></i> Tambahkan Gejala
            </div>
        </x-slot>
        <table class="table table-hover border">
            <thead>
                <th>Kode</th>
                <th>Nama Gejala</th>
                <th>Info</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @forelse($gejala as $row)
                    <tr>
                        <td><b>{{ $row->kode }}</b></td>
                        <td>{{ $row->nama }}</td>
                        <td>{{ $row->info }}</td>
                        <td>{{ $row->kategori }}</td>
                        <td>
                            <div class="d-flex justify-between-space">
                                <div>
                                    <button class="btn btn-primary btn-sm edit" data-id="{{ $row->id }}"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                                <form action="{{ route('admin.gejala.destroy', $row->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm ml-1 delete"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-2">
            {{ $gejala->links() }}
        </div>
    </x-card>

    <x-modal title="Tambahkan Gejala" id="gejala">
        <form action="{{ route('admin.gejala.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Kode Gejala</label>
                        <input type="text" class="form-control" name="kode" value="{{ $lastCode }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="" disabled>Pilih Kategori</option>
                            <option value="daun">Daun</option>
                            <option value="batang">Batang</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info">Info</label>
                        <input type="text" class="form-control" name="info" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="image">Image</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </x-modal>

    <x-modal title="Ubah Gejala" id="edit-gejala">
        <form action="{{ route('admin.gejala.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Kode Gejala</label>
                        <input type="text" class="form-control" name="kode" value="{{ $lastCode }}" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="" disabled>Pilih Kategori</option>
                            <option value="daun">Daun</option>
                            <option value="batang">Batang</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="info">Info</label>
                        <input type="text" class="form-control" name="info">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="image">Image</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </x-modal>

    <x-slot name="script">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $('.add').click(function() {
                $('#gejala').modal('show')
            })

            $('.delete').click(function(e) {
                e.preventDefault()
                Swal.fire({
                    title: 'Hapus data gejala?',
                    text: "Kamu tidak akan bisa mengembalikannya kembali!",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).parent().submit()
                    }
                })
            })

            $('.edit').click(function() {
                const id = $(this).data('id')
                $.get(`{{ route('admin.gejala.json') }}?id=${id}`, function(res) {
                    $('#edit-gejala input[name="id"]').val(res.id)
                    $('#edit-gejala input[name="nama"]').val(res.nama)
                    $('#edit-gejala input[name="kode"]').val(res.kode)
                    $('#edit-gejala input[name="info"]').val(res.info)
                    $('#edit-gejala select[name="kategori"]').val(res.kategori)
                    let image = res.image ?
                        `<img src="{{ asset('storage/gejala') }}/${res.image}" class="img-thumbnail" width="60" height="60">` :
                        ''
                    $('#edit-gejala #image').after(image)

                    $('#edit-gejala').modal('show')
                })
            })
        </script>
    </x-slot>
</x-app-layout>
