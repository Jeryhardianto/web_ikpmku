<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">IKPMKU-DIY </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        BERANDA
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url(); ?>profil/profill">
            <i class="fas fa-fw fa-folder"></i>
            <span>Profil</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url(); ?>visi_misi">
            <i class="fas fa-fw fa-folder"></i>
            <span>Visi & Misi</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0 " href="<?= base_url(); ?>struktur">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Pengurus</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url(); ?>mahasiswa">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Stastistik Mahasiswa</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url(); ?>programKerja">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Program Kerja</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url(); ?>berita/beritaa">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url(); ?>galeri/galerii">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url(); ?>asrama/asramaa">
            <i class="fas fa-fw fa-home"></i>
            <span>Asrama</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link pb-0" href="<?= base_url(); ?>kontak/saran">
            <i class="fas fa-fw fa-comment"></i>
            <span>Saran & Kritik</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link " href="http://localhost/ikpmku/">
            <i class="fas fa-fw fa-eye"></i>
            <span>Preview Web</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider pb-0">

    <!-- Heading -->
    <li class="nav-item ">
        <a class="nav-link pb" href="<?= base_url(); ?>auth/logout">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->