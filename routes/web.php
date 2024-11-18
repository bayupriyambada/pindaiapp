<?php

use App\Livewire\Auth\Login;
use App\Livewire\Back\Dashboard;
use App\Livewire\Back\Dosen;
use App\Livewire\Back\Dosen\Dashboard as DosenDashboard;
use App\Livewire\Back\Dppm\Penelitian;
use App\Livewire\Back\Dppm\Penelitian\Approval;
use App\Livewire\Back\Dppm\Penelitian\Rejected;
use App\Livewire\Back\Dppm\Pengabdian;
use App\Livewire\Back\Dppm\Pengabdian\Approval as PengabdianApproval;
use App\Livewire\Back\Dppm\Pengabdian\Rejected as PengabdianRejected;
use App\Livewire\Back\Faculties\Index as FacultiesIndex;
use App\Livewire\Back\Kaprodi;
use App\Livewire\Back\Kaprodi\Penelitian as KaprodiPenelitian;
use App\Livewire\Back\Kaprodi\Pengabdian as KaprodiPengabdian;
use App\Livewire\Back\Kaprodi\Dashboard as KaprodiDashboard;
use App\Livewire\Back\Kaprodi\Dosen as KaprodiDosen;
use App\Livewire\Back\Kaprodi\Penelitian\Detail as PenelitianDetail;
use App\Livewire\Back\Kaprodi\Pengabdian\Detail as PengabdianDetail;
use App\Livewire\Back\Kaprodi\Publikasi;
use App\Livewire\Back\Kaprodi\Publikasi\Form;
use App\Livewire\Back\MyAccount;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', Login::class)->name('login');

Route::prefix('/dppm')->group(function () {
    Route::get('dasbor', Dashboard::class)->name('dashboard');
    Route::get('/akun-saya', MyAccount::class)->name('my-account');
    Route::get('fakultas', FacultiesIndex::class)->name('faculties.index');
    Route::get('kaprodi', Kaprodi::class)->name('kaprodi');
    Route::get('dosen', Dosen::class)->name('lecturer');
    Route::get('penelitian', action: Penelitian::class)->name('penelitian');
    Route::get('penelitian/list/disetujui', action: Approval::class)->name('penelitian.approval');
    Route::get('penelitian/list/ditolak', action: Rejected::class)->name('penelitian.rejected');
    Route::get('pengabdian', Pengabdian::class)->name('pengabdian');
    Route::get('pengabdian/list/disetujui', action: PengabdianApproval::class)->name('pengabdian.approval');
    Route::get('pengabdian/list/ditolak', action: PengabdianRejected::class)->name('pengabdian.rejected');
});

Route::prefix('kaprodi')->name('kaprodi.')->group(function () {
    Route::get('dasbor', KaprodiDashboard::class)->name('dashboard');
    Route::get('penelitian', KaprodiPenelitian::class)->name('penelitian');
    Route::get('penelitian/{penelitianId}/detail', PenelitianDetail::class)->name('penelitian.detail');
    
    Route::get('pengabdian', KaprodiPengabdian::class)->name('pengabdian');
    Route::get('pengabdian/{pengabdianId}/detail', PengabdianDetail::class)->name('pengabdian.detail');
    Route::get('dosen', KaprodiDosen::class)->name('dosen');
    
    Route::get('publikasi', Publikasi::class)->name('publikasi');
    Route::get('publikasi/create', Form::class)->name('publikasi.create');
    Route::get('publikasi/{publikasiId}/edit', Form::class)->name('publikasi.edit');
    Route::get('my-account', \App\Livewire\Back\Kaprodi\MyAccount::class)->name('my-account');
    
});
Route::prefix('dosen')->name('dosen.')->group(function () {
    Route::get('dasbor', DosenDashboard::class)->name('dashboard');
    Route::get('penelitian', \App\Livewire\Back\Dosen\Penelitian::class)->name('penelitian');
    Route::get('penelitian/create', \App\Livewire\Back\Dosen\Penelitian\Create::class)->name('penelitian.create');
    Route::get('penelitian/{penelitianId}/edit', \App\Livewire\Back\Dosen\Penelitian\Edit::class)->name('penelitian.edit');
    Route::get('pengabdian', \App\Livewire\Back\Dosen\Pengabdian::class)->name('pengabdian');
    Route::get('my-account', \App\Livewire\Back\Dosen\MyAccount::class)->name('my-account');
});