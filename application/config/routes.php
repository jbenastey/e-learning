<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//route untuk pengguna
$route['PenggunaModel']= 'PenggunaModel';
$route['pengguna']='pengguna';
$route['pengguna/tambah']='pengguna/tambah';
$route['pengguna/ubah/(:any)']='pengguna/ubahPengguna/$1';
$route['pengguna/hapus/(:any)']='pengguna/hapus/$1';

//end route untuk pengguna
$route['login']='auth/login';
$route['logout']='auth/logout';
$route['register']='auth/register';

//route untuk dosen
$route['dosen']='dosen';
$route['dosen/cari']='dosen/cari';
$route['dosen/tambah']='dosen/tambah';
$route['dosen/ubah(:any)']='dosen/ubahDosen/$1';
$route['dosen/hapus(:any)']='dosen/hapus/$1';
//end route untuk dosen

//route untuk mahasiswa
$route['mahasiswa']='mahasiswa';
$route['mahasiswa/tambah']='mahasiswa/tambah';
$route['mahasiswa/ubah(:any)']='mahasiswa/ubahMahasiswa/$1';
$route['mahasiswa/hapus/(:any)']='mahasiswa/hapus/$1';
//end route untuk mahasiwa

// route untuk nilai
$route['nilai']='nilai';
$route['nilai/tambah']='nilai/tambah';
$route['nilai/ubah(:any)']='nilai/ubahSoal/$1';
$route['nilai/hapus/(:any)']='nilai/hapus/$1';
//route end nilai

//route untuk soalModel
$route['soal']= 'soal';
$route['soal/tambah']='soal/tambah';
$route['soal/ubah(:any)']='soal/ubahSoal/$1';
$route['soal/hapus/(:any)']='Soal/hapus/$1';
//end route untuk soalModel

//route untuk jawaban
$route['jawaban']= 'jawaban';
$route['jawaban/tambah']='jawaban/tambah';
$route['jawaban/ubah(:any)']='jawaban/ubahSoal/$1';
$route['jawaban/hapus/(:any)']='jawaban/hapus/$1';
//end route untuk jawaban

//route untuk modul
$route['modul/index/(:any)']= 'modul/index/$1';
$route['modul/lihat/(:any)']= 'modul/lihatModul/$1';
$route['modul/lihatMhs/(:any)']= 'modul/lihatModulMhs/$1';
$route['modul/tambah/(:any)']='modul/tambahModul/$1';
$route['modul/ubah/(:any)/(:any)']='modul/ubahSoal/$1/$2';
$route['modul/hapus/(:any)/(:any)']='modul/hapusModul/$1/$2';
//end route untuk modul

//route untuk sub modul
$route['modul/submodul(:any)']= 'modul/subModul/$1';
$route['modul/submodul/tambah/(:any)']= 'modul/tambah/$1';
$route['modul/submodul/lihat/(:any)/(:any)']= 'modul/lihatMateri/$1/$2';
$route['modul/submodul/ubah/(:any)']= 'modul/ubahSubModul/$1';
$route['modul/submodul/hapus/(:any)/(:any)']='modul/hapusSubModul/$1/$2';


//route untuk ujian
$route['ujian'] = 'ujian';
$route['ujian/tambah/(:any)'] = 'ujian/tambah/$1';
$route['ujian/ubah/(:any)'] = 'ujian/ubah/$1';
$route['ujian/hapus/(:any)'] = 'ujian/hapus/$1';
$route['ujian/detail/(:any)'] = 'ujian/detail/$1';

//route untuk ujian
$route['quiz/(:any)'] = 'quiz/index/$1';
$route['quiz/lihat/(:any)'] = 'quiz/lihat/$1';

$route['quiz/soal/(:any)'] = 'quiz/soal/$1';

//route untuk 
$route['default_controller'] = 'welcome';
$route['about']='about';
$route['profile']='profile';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
