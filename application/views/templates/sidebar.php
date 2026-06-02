<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=site_url('dashboard')?>">
        <div class="sidebar-brand-icon rotate-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text rotate-n-15 mx-3"> CI3 <sup>SB</sup></div>
    </a>
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('dashboard')?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('kategori')?>">
        <i class="fas fa-box"></i>
        <span>kategori</span>
    </a>
</li>
</li>
<hr class="sidebar-divider my-0">
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('buku'); ?>">
        <i class="fas fa-users"></i>
        <span>buku</span>
    </a>
</li>
<hr class="sidebar-divider my-0">
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('buku_saya'); ?>">
        <i class="fas fa-users"></i>
        <span>data buku</span>
    </a>
</li>
<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('anggota'); ?>">
        <i class="fas fa-users"></i>
        <span>Anggota</span>
    </a>
</li>

<hr class="sidebar-divider my-0">
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('peminjaman'); ?>">
        <i class="fas fa-users"></i>
        <span>peminjaman</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= base_url('laporan/peminjaman'); ?>">
        <i class="fas fa-users"></i>
        <span>laporan peminjaman</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan/buku'); ?>">
        <i class="fas fa-book"></i>
        <span>Laporan Buku</span>
    </a>
</li>


<hr class="sidebar-divider d-npne d-md-block">
</ul>
<div id="content-wrapper" class="d-flex flex-column">
                <div id="content">