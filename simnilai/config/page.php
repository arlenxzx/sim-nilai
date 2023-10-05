<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        //guru
        case 'data_guru':
            include "../simnilai/guru/index.php";
            break;
        
        case 'tambah_guru':
            include "../simnilai/guru/tambah.php";
            break;
        
        case 'edit_guru':
            include "../simnilai/guru/edit.php";
            break;
       
        //siswa
        case 'data_siswa':
            include "../simnilai/siswa/index.php";
            break;
        
        case 'tambah_siswa':
            include "../simnilai/siswa/tambah.php";
            break;
        
        case 'edit_siswa':
            include "../simnilai/siswa/edit.php";
            break;
        
        case 'ds':
            include "../simnilai/siswa/siswa.php";
            break;
       
        //jurusan
        case 'data_jurusan':
            include "../simnilai/jurusan/index.php";
            break;
        
        case 'tambah_jurusan':
            include "../simnilai/jurusan/tambah.php";
            break;
        
        case 'edit_jurusan':
            include "../simnilai/jurusan/edit.php";
            break;
       
        //kelas
        case 'data_kelas':
            include "../simnilai/kelas/index.php";
            break;
        
        case 'tambah_kelas':
            include "../simnilai/kelas/tambah.php";
            break;
        
        case 'edit_kelas':
            include "../simnilai/kelas/edit.php";
            break;
        
        //mapel
        case 'data_mapel':
            include "../simnilai/mapel/index.php";
            break;
        
        case 'tambah_mapel':
            include "../simnilai/mapel/tambah.php";
            break;
        
        case 'edit_mapel':
            include "../simnilai/mapel/edit.php";
            break;
        
        //setting guru mapel
        case 'dsgm':
            include "../simnilai/sgm/index.php";
            break;
        
        case 'tsgm':
            include "../simnilai/sgm/tambah.php";
            break;
        
        case 'desgm':
            include "../simnilai/sgm/detail.php";
            break;
        
        case 'esgm':
            include "../simnilai/sgm/edit.php";
            break;
        
        //nilai
        case 'dn';
            include "../simnilai/nilai/index.php";
            break;

        case 'den';
            include "../simnilai/nilai/detail.php";
            break;

        case 'ns';
            include "../simnilai/nilai/siswa.php";
            break;

        case 'tn';
            include "../simnilai/nilai/tambah.php";
            break;

        case 'en';
            include "../simnilai/nilai/edit.php";
            break;


        //login siswa
        case 'profile':
            include "../simnilai/usersiswa/profil.php";
            break;

        case 'nilai':
            include "../simnilai/usersiswa/nilai.php";
            break;

        //login guru
        case 'dguru':
            include "../simnilai/userguru/index.php";
            break;
        
        case 'detguru':
            include "../simnilai/userguru/detail.php";
            break;
        
        case 'bioguru':
            include "../simnilai/userguru/biodata.php";
            break;
        
        case 'tns':
            include "../simnilai/userguru/nilai.php";
            break;

        default:
            include "beranda.php";
            break;
    }
}else{
    include "beranda.php";
}
?>