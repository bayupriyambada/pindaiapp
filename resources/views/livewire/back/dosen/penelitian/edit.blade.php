@section('title', 'Ubah Penelitian')

<div>
    <div class="row">
        <x-custom.breadcrumb :items="[['title' => 'Dasbor'], ['title' => 'Ubah Penelitian']]" />
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store" enctype="multipart/form-data" autocomplete="off">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="divider">
                                    <div class="divider-text"> <span class="badge bg-label-primary"> Data Penelitian -
                                            Tahap
                                            1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <label class="form-label">Tahun Akademik <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Tahun Akademik">
                            </div>

                            <div class="col-4">
                                <label class="form-label">Semester <span class="text-danger">*</span>
                                </label>
                                <select class="select2 form-select">
                                    <option value="">-- Pilih Semester --</option>
                                    <option value="1">Ganjil</option>
                                    <option value="2">Genap</option>
                                </select>
                            </div>

                            <div class="col-4">
                                <label class="form-label">Kode Penelitian <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" readonly placeholder="Kode Penelitian">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Judul Penelitian <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Judul Penelitian">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Deskripsi Penelitian <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control" placeholder="Deskripsi Penelitian" rows="3" style="resize: none;"></textarea>
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <label class="form-label">Jenis Penelitian <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect02">
                                        <option selected="">-- Pilih Jenis Penelitian --</option>
                                        @foreach ($selectJenisPenelitian as $jenisPenelitian)
                                            <option value="{{ $jenisPenelitian }}">{{ $jenisPenelitian }}</option>
                                        @endforeach
                                    </select>
                                    <label class="input-group-text" for="inputGroupSelect02" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Jenis Penelitian">
                                        <button type="button" wire:click="openModalJenisPenelitian()" class="btn btn-outline-primary btn-sm"> <i class="bx bx-info-circle"></i></button>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <label class="form-label">Jenis Indeksasi <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect02">
                                        <option selected="">-- Pilih Jenis Indeksasi --</option>
                                        @foreach ($selectJenisIndeksasi as $jenisIndeksasi)
                                            <option value="{{ $jenisIndeksasi }}">{{ $jenisIndeksasi }}</option>
                                        @endforeach
                                    </select>
                                    <label class="input-group-text" for="inputGroupSelect02" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Jenis Indeksasi">
                                        <button type="button" wire:click="openModalJenisIndeksasi()" class="btn btn-outline-primary btn-sm"> <i class="bx bx-info-circle"></i></button>
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="divider">
                                    <div class="divider-text"> <span class="badge bg-label-primary"> Data Ketua dan
                                            Anggota -
                                            Tahap
                                            2.1 </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <label class="form-label">NIDN <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="0001131" readonly>
                            </div>
                            <div class="col-4">
                                <label class="form-label">No HP <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="081234567890" readonly>
                            </div>
                            <div class="col-4">
                                <label class="form-label">Prodi <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Prodi" readonly>
                            </div>
                            <div class="col-12 col-md-4 col-lg-6 ">
                                <label class="form-label">Nama Lengkap (Tanpa Gelar) <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Bayu Priyambada" readonly>
                            </div>
                            <div class="col-12 col-md-4 col-lg-6 ">
                                <label class="form-label">Nama Lengkap (Gunakan Gelar) <span
                                        class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Bayu Priyambada S.Kom" readonly>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 ">
                                <label class="form-label"> Email <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Bayu Priyambada S.Kom" readonly>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 ">
                                <label class="form-label"> Scholar ID <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" placeholder="0000000" readonly>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 ">
                                <label class="form-label"> Schopus ID <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="0000000"readonly>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 ">
                                <label class="form-label"> Jabatan Fungsional <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Jabatan Fungsional"readonly>

                            </div>
                            <div class="col-12 col-md-4 col-lg-12 ">
                                <label class="form-label"> Afiliasi Kampus <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Afiliasi Kampus" readonly>
                            </div>

                            <div class="col-12">
                                <div class="divider">
                                    <div class="divider-text"> <span class="badge bg-label-primary"> Data Ketua dan
                                            Anggota (Tahap Pilih Anggota) -
                                            Tahap
                                            2.2 </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-12 col-lg-12 row g-3">
                                <div class="col-12 col-md-4 col-lg-3">
                                    <button type="button" wire:click="openModalAnggotaTerdaftar()"
                                        class="btn btn-outline-primary btn-md w-100"> <i class="bx bx-plus"></i> Pilih
                                        Anggota Terdaftar</i></button>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <button type="button" wire:click="openModalAnggotaManual()" class="btn btn-outline-info btn-md w-100"> Pilih Anggota
                                        Baru
                                        (Manual) </button>
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIDN</th>
                                                <th>Nama Anggota</th>
                                                <th>No Hp</th>
                                                <th>Prodi</th>
                                                <th>Email</th>
                                                <th>Schopus ID</th>
                                                <th>Scholar ID</th>
                                                <th>Jab Fungsional</th>
                                                <th>Affiliasi Kampus</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($members as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item['nidn'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item['no_hp'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-danger btn-sm">
                                                            <i class="bx bx-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" wire:loading.attr="disabled"
                                    class="btn btn-primary me-2 w-100">Simpan Dan Preview</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('livewire.back.dosen.penelitian.modal.terdaftar')
        @include('livewire.back.dosen.penelitian.modal.manual-anggota')
        @include('livewire.back.dosen.penelitian.modal.jenis-penelitian')
        @include('livewire.back.dosen.penelitian.modal.jenis-indeksasi')
    </div>


    @push('js')
        <script>
            Livewire.on('openModalTerdaftar', () => {
                $('#formAnggotaTerdaftar').modal('show');
            });
            Livewire.on('openModalManual', () => {
                $('#formAnggotaManual').modal('show');
            });
            Livewire.on('openModalJenisPenelitian', () => {
                $('#formJenisPenelitian').modal('show');
            });
            Livewire.on('openModalJenisIndeksasi', () => {
                $('#formJenisIndeksasi').modal('show');
            });
            Livewire.on('closeModalTerdaftar', () => {
                $('#formAnggotaTerdaftar').modal('hide');
            });
            Livewire.on('closeModalManual', () => {
                $('#formAnggotaManual').modal('hide');
            });
        </script>
    @endpush
</div>
