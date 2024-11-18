@section('title', 'Dasbor')

<div>
    <div class="row">
        <x-custom.breadcrumb :items="[['title' => 'Dasbor']]" />
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="badge bg-label-success  rounded">
                                        Penelitian Di Setujui
                                    </span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <h3 class="card-title text-nowrap mb-0 me-1">10</h3> <span>Data</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="badge bg-label-danger rounded">
                                        Penelitian Ditolak
                                    </span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <h3 class="card-title text-nowrap mb-0 me-1">10</h3> <span>Data</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="badge bg-label-success  rounded">
                                        Pengabdian Di Setujui
                                    </span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <h3 class="card-title text-nowrap mb-0 me-1">10</h3> <span>Data</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="badge bg-label-danger  rounded">
                                        Pengabdian Ditolak
                                    </span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <h3 class="card-title text-nowrap mb-0 me-1">10</h3> <span>Data</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-12 col-md-4 order-1">
            <div class="card mb-4">
                <div class="card-body d-flex flex-column">
                    <span class="fw-bold">Dasbor Dosen</span>
                    <span class="text-muted">
                        Anda dapat melakukan penelitian dan pengabdian kepada masyarakat.
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="badge bg-label-success rounded">Penelitian</span>
                                </div>

                            </div>
                            <x-custom.link route="kaprodi.penelitian" tooltip="Ajukan Penelitian"
                                icon="bx-right-arrow-alt" btn="btn-outline-primary w-100 btn-md"> Ajukan Penelitian
                            </x-custom.link>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="badge bg-label-info rounded">Pengabdian</span>
                                </div>

                            </div>

                            <x-custom.link route="kaprodi.pengabdian" tooltip="Ajukan Pengabdian"
                                icon="bx-right-arrow-alt" btn="btn-outline-primary w-100 btn-md"> Ajukan
                                Pengabdian </x-custom.link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 col-md-12 col-12">
            <div class="card mb-4">
                <div class="card-body d-flex flex-column">
                    <span class="fw-bold">Informasi Dosen</span>
                    <span class="text-muted">
                        Berisikan informasi tentang data diri anda.
                    </span>
                    <hr>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">NIDN</span>
                            </div>
                            <span class="lh-1">001</span>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">Email</span>
                            </div>
                            <span class="lh-1">mail.prodi@pindai.com</span>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">No. Hp</span>
                            </div>
                            <span class="lh-1">08123456789</span>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">Jabatan Fungsional</span>
                            </div>
                            <span class="lh-1">null</span>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">SK Jabatan Fungsional</span>
                            </div>
                            <span class="lh-1">null</span>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">Prodi</span>
                            </div>
                            <span class="lh-1">Teknologi Informasi</span>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">Schopus ID</span>
                            </div>
                            <span class="lh-1">10213123213</span>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">Scholar ID</span>
                            </div>
                            <span class="lh-1">10213123213</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12 col-12">
            <div class="card mb-4">
                <div class="card-body d-flex flex-column">
                    <span class="fw-bold">Usulan Terakhir</span>
                    <span class="text-muted">
                        Melihat usulan terakhir penelitian atau pengabdian kepada masyarakat
                    </span>
                    <hr>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">Penelitian</span>
                            </div>
                            <x-custom.link route="kaprodi.penelitian" tooltip="Lihat Usulan Terakhir Penelitian"
                                icon="bx-right-arrow-alt" />
                        </div>
                        <hr>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <span class="fw-semibold lh-1">Pengabdian</span>
                            </div>
                            <x-custom.link route="kaprodi.pengabdian" tooltip="Lihat Usulan Terakhir Pengabdian"
                                icon="bx-right-arrow-alt" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
