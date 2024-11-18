<div wire:ignore.self class="modal fade" id="formAnggotaManual" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Daftar Anggota Manual</h5>
                <button type="button" wire:click="closeModalAnggotaManual()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row" wire:ignore>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="form-label"> Nidn <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="Nidn">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="form-label"> Nama Dosen (Tanpa Gelar) <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="Nama Dosen (Tanpa Gelar)">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="form-label"> Nama Dosen (Gelar) <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="Nama Dosen (Gelar)">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="form-label"> Prodi <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="Prodi">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="form-label"> No Hp <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="01234567">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <label for="" class="form-label"> Email <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="email@pindai.com">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <label for="" class="form-label"> Scholar ID <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="Scholar ID">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <label for="" class="form-label"> Scopus ID <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="Scopus ID">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <label for="" class="form-label"> Jabatan Fungsional <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="Jabatan Fungsional">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <label for="" class="form-label"> Afiliasi Kampus <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control mb-3" placeholder="Afiliasi Kampus">
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click="closeModalAnggotaManual()">
                    Batalkan
                </button>
                <button type="button" class="btn btn-primary">Simpan Dan Tambahkan</button>
            </div>
        </div>
    </div>
</div>

@push('js')
     <script>
            function initSelect2() {
                $('.anggota').select2();
            }

            $(document).ready(function () {
                initSelect2();

                // Reinitialize Select2 after Livewire updates
                Livewire.on('render', function () {
                    initSelect2();
                });
            });
        </script>
@endpush
