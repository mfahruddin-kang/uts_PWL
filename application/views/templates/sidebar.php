 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Cari Menu...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo site_url()?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url()?>/welcome/dt_barang">
            <i class="glyphicon glyphicon-briefcase"></i> <span>Data Barang</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url()?>/welcome/entry_penjualan">
            <i class="glyphicon glyphicon-transfer"></i> <span>Entry Penjualan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url()?>/welcome/foto">
            <i class="glyphicon glyphicon-picture"></i> <span>Ganti Foto</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url()?>/welcome/pass">
            <i class="glyphicon glyphicon-lock"></i> <span>Ganti Password</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url()?>">
            <i class="glyphicon glyphicon-log-out"></i> <span>Logout</span>
          </a>
        </li>       
    </section>
    <!-- /.sidebar -->
  </aside>