<div wire:ignore.self class="modal fade" id="formJenisPenelitian" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Daftar Jenis Penelitian</h5>
                <button type="button" wire:click="closeModalAnggotaTerdaftar()" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Jenis Kegiatan</th>
                                        <th>Kriteria</th>
                                        <th>Keterangan</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listJenisPenelitian as $item)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item['jenis_kegiatan'] }}</td>
                                            <td>
                                                @foreach ($item['kriteria'] as $kriteria)
                                                    <span class="btn btn-sm btn-outline-primary btn-sm">{{ $kriteria }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <span class="text-muted">
                                                    {{ $item['keterangan'] }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" wire:click="closeModalAnggotaTerdaftar()">
                    Batalkan
                </button>
                <button type="button" class="btn btn-primary">Pilih Anggota Terdaftar</button>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        function initSelect2() {
            $('.anggota').select2();
        }

        $(document).ready(function() {
            initSelect2();

            // Reinitialize Select2 after Livewire updates
            Livewire.on('render', function() {
                initSelect2();
            });
        });
    </script>
@endpush
