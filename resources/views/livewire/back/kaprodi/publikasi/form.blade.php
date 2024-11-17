@section('title', 'Publikasi')

<div>
    <div class="row">
        <x-custom.breadcrumb :items="[
            ['title' => 'Dasbor'],
            ['title' => 'Publikasi'],
            ['title' => 'Buat Publikasi'],
        ]" />   
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="store" enctype="multipart/form-data" autocomplete="off">
                        <div class="row g-3">
                            {{-- <div class="col-12">
                                <input type="hidden" wire:model="{{  }}" class="form-control" placeholder="Tahun Akademik">
                            </div> --}}
                            <div class="col-12">
                                <label class="form-label">Tahun Akademik <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Tahun Akademik">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Judul <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Judul">
                                <x-custom.hint hint="Pisahkan dengan koma (,) jika ada lebih dari satu" />
                            </div>
                        
                            <div class="col-12">
                                <label class="form-label">Penulis Karya <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Penulis Karya">
                                <x-custom.hint hint="Pisahkan dengan koma (,) jika ada lebih dari satu" />
                            </div>
                           
                            <div class="col-12">
                                <label class="form-label">Jenis Publikasi <span class="text-danger">*</span> </label>
                                <select class="select2 form-select">
                                    <option value="">-- Pilih Jenis Publikasi --</option>
                                    <option value="1">Jurnal</option>
                                    <option value="2">Laporan</option>
                                    <option value="3">Pengabdian Masyarakat</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Indeksasi <span class="text-danger">*</span> </label>
                                <select class="select2 form-select">
                                    <option value="">-- Pilih Indeksasi --</option>
                                    <option value="1">Indeksasi</option>
                                    <option value="2">Non Indeksasi</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Tanggal Publikasi <span class="text-danger">*</span> </label>
                                <input type="date" class="form-control" placeholder="Tanggal Publikasi">
                            </div>

                             <div class="col-12">
                                <label class="form-label">Link Karya <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Link Karya">
                                <x-custom.hint hint="Pisahkan dengan koma (,) jika ada lebih dari satu" />
                            </div>
                             <div class="col-12">
                                <label class="form-label">Referensi Publikasi <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Referensi Publikasi">
                                <x-custom.hint hint="Pisahkan dengan koma (,) jika ada lebih dari satu" />
                            </div>
                            
                            <button type="submit" wire:loading.attr="disabled"  class="btn btn-primary me-2">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
