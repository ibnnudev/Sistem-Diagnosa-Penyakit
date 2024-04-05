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
                <th>Kategori</th>
                <th></th>
            </thead>
            <tbody>
                @forelse($gejala as $row)
                    <tr>
                        <td><b>{{ $row->kode }}</b></td>
                        <td>{{ $row->nama }}</td>
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
            {{ $gejalaDauns->links() }}
        </div>
    </x-card>

    <x-modal title="Tambahkan Gejala" id="gejala">
        <form action="{{ route('admin.gejala.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Kode Gejala</label>
                        <input type="text" class="form-control" name="kode" value="{{ $lastCode }}" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="" disabled>Pilih Kategori</option>
                            <option value="daun">Daun</option>
                            <option value="batang">Batang</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="sy_pic">Sangat Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="sy_pic" name="sy_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="y_pic">Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="y_pic" name="y_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ty_pic">Tidak Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="ty_pic" name="ty_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="cy_pic">Cukup Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="cy_pic" name="cy_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ky_pic">Kurang Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="ky_pic" name="ky_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="tt_pic">Tidak Tahu</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="tt_pic" name="tt_pic">
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
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Kode Gejala</label>
                        <input type="text" class="form-control" name="kode" value="{{ $lastCode }}"
                            disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" class="form-control" required>
                            <option value="" disabled>Pilih Kategori</option>
                            <option value="daun">Daun</option>
                            <option value="batang">Batang</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="sy_pic">Sangat Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="sy_pic" name="sy_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="y_pic">Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="y_pic" name="y_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ty_pic">Tidak Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="ty_pic" name="ty_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="cy_pic">Cukup Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="cy_pic" name="cy_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="ky_pic">Kurang Yakin</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="ky_pic" name="ky_pic">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="tt_pic">Tidak Tahu</label>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="tt_pic" name="tt_pic">
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
                    $('#edit-gejala select[name="kategori"]').val(res.kategori)
                    let sy_pic = res.sy_pic ?
                        `<img src="{{ asset('storage/gejala') }}/${res.sy_pic}" class="img-thumbnail" width="60" height="60">` :
                        ''
                    let y_pic = res.y_pic ?
                        `<img src="{{ asset('storage/gejala') }}/${res.y_pic}" class="img-thumbnail" width="60" height="60">` :
                        ''
                    let ty_pic = res.ty_pic ?
                        `<img src="{{ asset('storage/gejala') }}/${res.ty_pic}" class="img-thumbnail" width="60" height="60">` :
                        ''
                    let cy_pic = res.cy_pic ?
                        `<img src="{{ asset('storage/gejala') }}/${res.cy_pic}" class="img-thumbnail" width="60" height="60">` :
                        ''
                    let ky_pic = res.ky_pic ?
                        `<img src="{{ asset('storage/gejala') }}/${res.ky_pic}" class="img-thumbnail" width="60" height="60">` :
                        ''
                    let tt_pic = res.tt_pic ?
                        `<img src="{{ asset('storage/gejala') }}/${res.tt_pic}" class="img-thumbnail" width="60" height="60">` :
                        ''

                    $('#edit-gejala #sy_pic').after(sy_pic)
                    $('#edit-gejala #y_pic').after(y_pic)
                    $('#edit-gejala #ty_pic').after(ty_pic)
                    $('#edit-gejala #cy_pic').after(cy_pic)
                    $('#edit-gejala #ky_pic').after(ky_pic)
                    $('#edit-gejala #tt_pic').after(tt_pic)

                    $('#edit-gejala').modal('show')
                })
            })
        </script>
    </x-slot>
</x-app-layout>
