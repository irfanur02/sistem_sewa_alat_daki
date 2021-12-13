<aside class="aside">
  <div class="menu">
    <a href="<?php echo base_url('dashboard'); ?>" class="menu-item <?php if ($menu_active == "dashboard") echo "active"; ?>">
      <div class="icon"></div>
      <span>Dashboard</span>
    </a>
    <div class="dropdown">
      <button class="menu-item <?php if ($menu_active == "kelola data") echo "active"; ?>">Kelola Data</button>
      <div class="dropdown-items">
        <a href="<?php echo base_url('barang'); ?>" class="dropdown-item">Barang</a>
        <a href="<?php echo base_url('kategoribarang'); ?>" class="dropdown-item">Kategori Barang</a>
        <a href="<?php echo base_url('kerusakan'); ?>" class="dropdown-item">Kerusakan</a>
        <a href="<?php echo base_url('bank'); ?>" class="dropdown-item">Bank</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="menu-item <?php if ($menu_active == "penyewaan") echo "active"; ?>">Penyewaan</button>
      <div class="dropdown-items">
        <a href="<?php echo base_url('peminjaman'); ?>" class="dropdown-item">Peminjaman</a>
        <a href="<?php echo base_url('pengembalian'); ?>" class="dropdown-item">Pengembalian</a>
      </div>
    </div>
  </div>
</aside>