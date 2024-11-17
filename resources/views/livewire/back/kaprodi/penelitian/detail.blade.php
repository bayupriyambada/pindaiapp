@section('title', 'Detail Penelitian')

<div>
    <div class="row">
        <x-custom.breadcrumb :items="[
            ['title' => 'Dasbor'],
            ['title' => 'Penelitian'],
            ['title' => 'Detail' ],
            ['title' => 'Penelitian A' ]
        ]" />
        
    </div>

    <div class="row g-3">
        <div class="col-md-7 col-12 col-lg-8 order-1 g-3">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <span class="fw-bold">Informasi Penelitian: Penelitian A</span>
                    <span class="text-muted">
                        Kaprodi dapat menyetujui / menolak penelitian yang diajukan oleh dosen.
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-12 col-lg-4 order-1">
            <div class="card">
                <div class="card-body d-flex gap-2">
                    <button class="btn btn-outline-success w-100"> <i class="bx bx-check"></i> Setujui</button>
                    <button class="btn btn-outline-danger w-100"> <i class="bx bx-x"></i> Tolak</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="demo-inline-spacing mt-3">
                        <div class="list-group list-group-flush">
                            <span class="list-group-item list-group-item-action">Ketua Kelompok: Dosen A (Fakultas
                                A)</span>
                            <span class="list-group-item list-group-item-action">Judul: Penelitian A</span>
                            <span class="list-group-item list-group-item-action">Bidang Fokus: Bidang 1, Bidang 2</span>
                            <span class="list-group-item list-group-item-action">Jenis Penelitian: Penelitian</span>
                            <span class="list-group-item list-group-item-action">Target Indeksasi: Nasional
                                Indeks</span>
                            <span class="list-group-item list-group-item-action">Semester: Ganjil</span>
                            <span class="list-group-item list-group-item-action">Tahun: 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 mb-2">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <span class="fw-bold">Dokumen Penelitian</span>
                    <span class="text-muted">
                        Tabel berisi dokumen penelitian yang harus dilengkapi.
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Cover</th>
                                    <th>Surat Pengajuan</th>
                                    <th>Surat Rekomendasi</th>
                                    <th>Proposal</th>
                                    <th>Kontrak Penelitian</th>
                                    <th>Kelompok Penelitian</th>
                                    <th>Surat Keterangan Selesai</th>
                                    <th>Laporan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">

                                    <td>
                                        <a href="javascript:void(0);" class="btn  btn-outline-secondary btn-sm"> <i
                                                class="bx bx-download"></i> Cover </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn  btn-outline-secondary btn-sm"> <i
                                                class="bx bxs-file-pdf"></i> Surat </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn  btn-outline-secondary btn-sm"> <i
                                                class="bx bxs-file-pdf"></i> Generate </a>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-danger btn-sm disabled"> <i class="bx bx-x"></i>
                                            Belum Ada </span>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-danger btn-sm disabled"> <i class="bx bx-x"></i>
                                            Belum Ada </span>
                                    </td>
                                    <td>
                                        <a href="#kelompok" class="btn btn-outline-info btn-sm"> <i
                                                class="bx bx-group"></i> Lihat Kelompok </a>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-danger btn-sm disabled"> <i class="bx bx-x"></i>
                                            Belum Ada </span>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-danger btn-sm disabled"> <i class="bx bx-x"></i>
                                            Belum Ada </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4" id="kelompok">
        <div class="col-12 mb-2">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <span class="fw-bold">Identitas Kelompok</span>
                    <span class="text-muted">
                        Tabel berisi identitas kelompok penelitian.
                    </span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>NIDN</th>
                                    <th>Nama Dosen</th>
                                    <th>Prodi</th>
                                    <th>Afilasi Univ</th>
                                    <th>Jab Fungsional</th>
                                    <th>Scholar ID</th>
                                    <th>Scopus ID</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td colspan="8" >
                                        Ketua Kelompok
                                    </td>
                                </tr>
                                <tr class="text-center">

                                    <td>
                                        1231232131
                                    </td>
                                    <td>
                                        Bayu Priyambada
                                    </td>
                                    <td>
                                        Teknik Informatika
                                    </td>
                                    <td>
                                        Universitas Indonesia
                                    </td>
                                    <td>
                                        Fungsional
                                    </td>
                                    <td>
                                        1231232131
                                    </td>
                                    <td>
                                        1231232131
                                    </td>
                                    <td>
                                        <span class="badge bg-label-info me-1" data-bs-html="true" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" title="Disetujui Kaprodi">
                                            <i class="bx bx-check"></i>
                                        </span>
                                        <span class="badge bg-label-warning me-1" data-bs-html="true" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" title="Menunggu Persetujuan DPPM">
                                            <i class="bx bx-time"></i>
                                        </span>
                                        {{-- <span class="badge bg-label-success me-1" data-bs-html="true" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" title="Disetujui DPPM">
                                            <i class="bx bx-check"></i>
                                        </span> --}}
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td colspan="8" >
                                        Anggota Kelompok
                                    </td>
                                </tr>
                                <tr class="text-center">

                                    <td>
                                        1231232131
                                    </td>
                                    <td>
                                        Bayu Priyambada
                                    </td>
                                    <td>
                                        Teknik Informatika
                                    </td>
                                    <td>
                                        Universitas Indonesia
                                    </td>
                                    <td>
                                        Fungsional
                                    </td>
                                    <td>
                                        1231232131
                                    </td>
                                    <td>
                                        1231232131
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-info btn-sm readonly" data-bs-html="true" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" title="Otomatis Mengikuti Ketua Kelompok">
                                            <i class="bx bx-sync"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12 mb-2">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <span class="fw-bold">Hasil Publikasi</span>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Judul Publikasi</th>
                                    <th>Link Publikasi</th>
                                    <th>Jenis Publikasi</th>
                                    <th>Tanggal Publikasi</th>
                                    <th>Indeksasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr class="text-center">

                                    <td>
                                        Mengabdikan diri
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn  btn-outline-secondary btn-sm"> <i class="bx bx-link"></i> Link Publikasi </a>
                                    </td>
                                    <td>
                                        Penelitian
                                    </td>
                                    <td>
                                        22 Nov 2024
                                    </td>
                                   
                                    <td>
                                        <span class="btn btn-outline-secondary btn-sm disabled"> <i class="bx bx-x"></i> Belum Set </span>
                                    </td>
                                    <td>
                                        <span class="btn btn-outline-info btn-sm" data-bs-html="true" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" title="Lihat Dokumen Publikasi">
                                           <i class="bx bxs-file-doc"></i>
                                        </span>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
