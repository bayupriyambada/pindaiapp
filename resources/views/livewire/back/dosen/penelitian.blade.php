@section('title', 'Penelitian')


<div>
    <div class="row">
        <x-custom.breadcrumb :items="[
            ['title' => 'Dasbor'],
            ['title' => 'Penelitian'],
        ]" />
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body row g-3">
                    <div class="col-md-4 col-lg-2 order-1 col-12">
                        <x-custom.link route="dosen.penelitian.create" icon="bx-plus" tooltip="Tambahkan Penelitian Baru Anda" btn="btn-outline-primary w-100 btn-md"> Tambah Penelitian </x-custom.link>
                    </div>
                    <div class="col-md-4 col-lg-4 order-1 col-12">
                        <input type="text" class="form-control" placeholder="Cari Penelitian">
                    </div>
                    <div class="col-md-4 col-lg-2 order-1 col-12">
                        <select class="select2 form-select">
                            <option value="">-- Tahun --</option>
                            @for ($year = date('Y'); $year <= date('Y') + 5; $year++)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-4 col-lg-2 order-1 col-12">
                        <select class="select2 form-select">
                            <option value="">-- Status --</option>
                            <option value="disetujui"> Disetujui</option>
                            <option value="menunggu"> Menunggu</option>
                            <option value="ditolak"> Ditolak</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-lg-1 order-1 col-12">
                        <button class="btn btn-outline-primary w-100" data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh Halaman / Data"> <i class="bx bx-refresh"></i></button>
                    </div>
                    <div class="col-md-4 col-lg-1 order-1 col-12">
                        <button class="btn btn-outline-success w-100" data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Export Excel"> <i class="bx bx-export"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Judul Penelitian</th>
                                <th>Ketua Penelitian</th>
                                <th>Bidang</th>
                                <th>Tahun</th>
                                <th>Dibuat Pada</th>
                                <th>Status Penelitian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Penelitian A</td>
                                <td>Bayu Priyambada</td>
                                <td>Bidang 1</td>
                                <td>2024</td>
                                <td>10 Nov 2024</td>
                                <td>
                                    <span class="badge bg-label-info me-1" data-bs-html="true" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" title="Disetujui Kaprodi">
                                        <i class="bx bx-check"></i>
                                    </span>
                                    <span class="badge bg-label-success me-1" data-bs-html="true" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" title="Disetujui DPPM">
                                        <i class="bx bx-check"></i>
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('kaprodi.penelitian.detail', ['penelitianId' => 1]) }}" class="btn btn-icon btn-outline-info" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="Lihat Data Penelitian">
                                        <span class="tf-icons bx bx-info-circle"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
