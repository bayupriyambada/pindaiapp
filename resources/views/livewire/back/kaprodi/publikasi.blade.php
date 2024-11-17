@section('Publikasi', 'Login')

<div>
    <div class="row">
        <x-custom.breadcrumb :items="[['title' => 'Dasbor'], ['title' => 'Publikasi']]" />
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Publikasi</h4>
                </div>
                <div class="card-body row g-3">
                    <div class="col-md-4 col-lg-2 order-1 col-12">
                        <a href="#" class="btn btn-primary w-100"> <i class="bx bx-plus"></i> Upload Publikasi </a>
                    </div>
                    <div class="col-md-4 col-lg-4 order-1 col-12">
                        <input type="text" class="form-control" placeholder="Cari Publikasi">
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
                        <button class="btn btn-outline-primary w-100"> <i class="bx bx-refresh"></i> Refresh
                            Data</button>
                    </div>
                    <div class="col-md-4 col-lg-2 order-1 col-12">
                        <button class="btn btn-outline-success w-100"> <i class="bx bx-download"></i> Export Excel
                        </button>
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
                                <th>Judul Publikasi</th>
                                <th>Tahun</th>
                                <th>Ketua Kelompok</th>
                                <th>Jurnal</th>
                                <th>Tanggal Pada</th>
                                <th>Indeksasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>Judul Publikasi A</td>
                                <td>2024</td>
                                <td>Bayu Priyambada</td>
                                <td>Jurnal A</td>
                                <td>10 Nov 2024</td>
                                <td>
                                    <span class="btn btn-outline-danger btn-sm disabled">
                                        <i class="bx bx-x"></i> Belum Set
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('kaprodi.penelitian.detail', ['penelitianId' => 1]) }}"
                                        class="btn btn-icon btn-outline-info" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                        title="Lihat Data Penelitian">
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