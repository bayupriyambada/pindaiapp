<div>
    <div class="row">
        <x-custom.breadcrumb :items="[
            ['title' => 'Dasbor'],
            ['title' => 'Dosen' ]
        ]" />
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="javascript:void(0);" class="btn btn-primary btn-md"> <i class="bx bx-plus"></i> Tambah Dosen </a>
                    </div>
                </div>
                <div class="card-body row g-3">
                    <div class="col-md-4 col-lg-4 order-1 col-12">
                        <input type="text" class="form-control" placeholder="Cari Dosen">
                    </div>
                
                    
                    <div class="col-md-4 col-lg-2 order-1 col-12">
                        <button class="btn btn-outline-primary w-100"> <i class="bx bx-refresh"></i> Refresh Data</button>
                    </div>
                    <div class="col-md-4 col-lg-2 order-1 col-12">
                        <button class="btn btn-outline-success w-100"> <i class="bx bx-import"></i> Import Excel </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-datatable table-responsive">
                    <table class="datatables-basic table">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>NIDN</th>
                                <th>Prodi</th>
                                <th>Afiliasi</th>
                                <th>Jab Fungsional</th>
                                <th>Scholar ID</th>
                                <th>Scopus ID</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Bayu Priyambada</td>
                                <td>213123123123</td>
                                <td>Teknik Informatika</td>
                                <td>-</td>
                                <td>Asisten Ahli</td>
                                <td>122132131</td>
                                <td>122132131</td>
                              
                                <td>
                                    <button type="button" class="btn btn-icon btn-outline-info" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="Lihat Data Dosen">
                                        <span class="tf-icons bx bx-info-circle"></span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
