<div wire:ignore.self class="modal fade" id="formAnggotaTerdaftar" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Pilih Anggota Terdaftar</h5>
                <button type="button" wire:click="closeModalAnggotaTerdaftar()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row" wire:ignore>
                    <div class="col-12">
                        <input type="search" class="form-control mb-3" placeholder="Cari Anggota">
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered text-nowrap">
                                <thead>
                                    <tr class="text-center">
                                        <th></th>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $item)
                                        <tr class="text-center">
                                            <td>
                                                <input type="checkbox" class="form-check-input" value="{{ $loop->iteration }}" >
                                            </td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item['nidn'] }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['no_hp'] }}</td>
                                            <td>{{ $item['prodi'] }}</td>
                                            <td>{{ $item['email'] }}</td>
                                            <td>{{ $item['schopus_id'] ?? '-' }} </td>
                                            <td>{{ $item['scholar_id'] ?? '-' }} </td>
                                            <td>{{ $item['jab_fungsional'] ?? '-' }} </td>
                                            <td>{{ $item['affiliasi_kampus'] ?? '-' }} </td>

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

            $(document).ready(function () {
                initSelect2();

                // Reinitialize Select2 after Livewire updates
                Livewire.on('render', function () {
                    initSelect2();
                });
            });
        </script>
@endpush
