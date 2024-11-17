<div>
    <div class="card">
        <h5 class="card-header">
            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#modalCenter"
                  >
                    Tambah Data
                  </button>

                  {{-- @include('livewire.back.faculties.modal.form') --}}
                </div>
              </div>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Fakultas</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td>1</td>
                        <td>Fakultas Teknologi Informasi</td>
                        <td>
                            <button type="button" class="btn btn-icon btn-info" data-bs-toggle="tooltip"
                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="Mengubah Data">
                                <span class="tf-icons bx bxs-edit"></span>
                            </button>
                            <button type="button" class="btn btn-icon btn-danger" data-bs-toggle="tooltip"
                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="Menghapus Data">
                                <span class="tf-icons bx bx-trash"></span>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
