<x-app-layout>
    <x-slot name="title">
        Diagnosa penyakit
    </x-slot>



    <x-slot name="head">
        <style>
            .red-border {
                border: 1px solid rgba(227, 39, 79, .8);
            }

            .green-border {
                border: 1px solid rgba(50, 179, 104, .8);
            }
        </style>
    </x-slot>

    <section class="row">

        {{-- chart section --}}
        <div class="col-md-12">
            <x-alert-error></x-alert-error>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.diagnosa') }}" method="post">
                        @csrf

                        @role('Admin')
                            <label for=""><b><i class="fas fa-user mr-1"></i> Nama</b></label>
                            <input type="text" class="form-control mb-3 w-50" name="nama">
                        @endrole

                        <p>Pilih gejala yang sedang dirasakan.</p>

                        <label for=""><b><i class="fas fa-th mr-1"></i> Gejala-gejala</b></label>

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-daun-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Daun</a>
                                <a class="nav-item nav-link" id="nav-batang-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Batang</a>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-daun-tab">
                                <div class="row">
                                    @foreach ($gejala->where('kategori', 'daun') as $key => $value)
                                        <div class="col-md-6">
                                            <div
                                                class="d-flex align-items-center justify-content-between border mb-2 p-2">
                                                <div>
                                                    <span class="ml-2">{{ $value->nama }}</span>
                                                </div>
                                                <div>
                                                    <select name="diagnosa[]" id="{{ $value->kode }}"
                                                        class="form-control form-control-sm red-border">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="{{ $value->id }}+0"
                                                            data-source="{{ asset('storage/gejala/' . $value->ty_pic) }}">
                                                            Tidak Yakin</option>
                                                        <option value="{{ $value->id }}+1"
                                                            data-source="{{ asset('storage/gejala/' . $value->sy_pic) }}">
                                                            Sangat
                                                            Yakin</option>
                                                        <option value="{{ $value->id }}+0.8"
                                                            data-source="{{ asset('storage/gejala/' . $value->y_pic) }}">
                                                            Yakin</option>
                                                        <option value="{{ $value->id }}+0.6"
                                                            data-source="{{ asset('storage/gejala/' . $value->cy_pic) }}">
                                                            Cukup Yakin</option>
                                                        <option value="{{ $value->id }}+0.4"
                                                            data-source="{{ asset('storage/gejala/' . $value->ky_pic) }}">
                                                            Kurang Yakin</option>
                                                        <option value="{{ $value->id }}+0.2"
                                                            data-source="{{ asset('storage/gejala/' . $value->tt_pic) }}">
                                                            Tidak Tahu</option>
                                                    </select>
                                                    <img id="img-container-{{ $value->kode }}" class="img-thumbnail"
                                                        style="width: 100px; height: 100px; display: none">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-batang-tab">
                                <div class="row">
                                    @foreach ($gejala->where('kategori', 'batang') as $key => $value)
                                        <div class="col-md-6">
                                            <div
                                                class="d-flex align-items-center justify-content-between border mb-2 p-2">
                                                <div>
                                                    <span class="ml-2">{{ $value->nama }}</span>
                                                </div>
                                                <div>
                                                    <select name="diagnosa[]" id="{{ $value->kode }}"
                                                        class="form-control form-control-sm red-border">
                                                        <option value="" disabled selected>Pilih</option>
                                                        <option value="{{ $value->id }}+0"
                                                            data-source="{{ asset('storage/gejala/' . $value->ty_pic) }}">
                                                            Tidak Yakin</option>
                                                        <option value="{{ $value->id }}+1"
                                                            data-source="{{ asset('storage/gejala/' . $value->sy_pic) }}">
                                                            Sangat
                                                            Yakin</option>
                                                        <option value="{{ $value->id }}+0.8"
                                                            data-source="{{ asset('storage/gejala/' . $value->y_pic) }}">
                                                            Yakin</option>
                                                        <option value="{{ $value->id }}+0.6"
                                                            data-source="{{ asset('storage/gejala/' . $value->cy_pic) }}">
                                                            Cukup Yakin</option>
                                                        <option value="{{ $value->id }}+0.4"
                                                            data-source="{{ asset('storage/gejala/' . $value->ky_pic) }}">
                                                            Kurang Yakin</option>
                                                        <option value="{{ $value->id }}+0.2"
                                                            data-source="{{ asset('storage/gejala/' . $value->tt_pic) }}">
                                                            Tidak Tahu</option>
                                                    </select>
                                                    <img id="img-container-{{ $value->kode }}" class="img-thumbnail"
                                                        style="width: 100px; height: 100px; display: none">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary" id="tooltip">Diagnosa sekarang</button>
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </section>

    <x-slot name="script">
        <script>
            $('button[type="submit"]').click(function() {
                $(this).attr('disabled')
            })

            $('select[name="diagnosa[]"]').on('change', function() {
                if (this.value == "") {
                    $(this).attr('class', 'form-control form-control-sm red-border')
                } else {
                    $(this).attr('class', 'form-control form-control-sm green-border')
                }
            })

            // change image when select option
            $('select[name="diagnosa[]"]').on('change', function() {
                let source = $(this).find(':selected').data('source');
                let id = $(this).attr('id')
                let filename = source.split('/').pop()
                console.log(filename);
                if (filename == 'gejala') {
                    $(`#img-container-${id}`).css('display', 'none')
                    return
                }
                $(`#img-container-${id}`).attr('src', source)
                $(`#img-container-${id}`).css('display', 'block')
            })
        </script>
    </x-slot>
</x-app-layout>
