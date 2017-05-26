<div class="navbar navbar-inverse" id="nav">

  <!-- Main Navigation: Inner -->
  <div class="navbar-inner">

    <!-- Main Navigation: Nav -->
    <ul class="nav">

      <!-- Main Navigation: Dashboard -->
      <li class="active"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><i class="icon-align-justify"></i> Dashboard</a></li>
      <!-- / Main Navigation: Dashboard -->

      <!-- Main Navigation: Admin -->
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-th"></i> Admin <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo Yii::app()->createUrl('admin/user'); ?>"><i class="icon-circle-blank"></i> User</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('admin/karyawan'); ?>"><i class="icon-circle-blank"></i> Karyawan</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('admin/supplier'); ?>"><i class="icon-circle-blank"></i> Supplier</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('admin/produk'); ?>"><i class="icon-circle-blank"></i> Produk</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('admin/agen'); ?>"><i class="icon-circle-blank"></i> Agen</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('admin/material'); ?>"><i class="icon-circle-blank"></i> Material</a></li>
          </ul>
      </li>
      <!-- / Main Navigation: Admin -->

      <!-- Main Navigation: Gudang -->
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-th"></i> Gudang <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo Yii::app()->createUrl('gudang/persediaan'); ?>"><i class="icon-circle-blank"></i> Data Persediaan</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('gudang/persediaan/riwayat'); ?>"><i class="icon-circle-blank"></i> Riwayat Persediaan</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('gudang/pengiriman'); ?>"><i class="icon-circle-blank"></i> Data Pengiriman</a></li>
            <li class="dropdown-submenu">
              <a href="#"><i class="icon-circle"></i> Monitoring</a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo Yii::app()->createUrl('gudang/monitoring/pemesanan'); ?>"><i class="icon-circle-blank"></i> Data Pemesanan</a></li>
                <li><a href="#"><i class="icon-circle-blank"></i> Data Pengadaan</a></li>
                <li><a href="#"><i class="icon-circle-blank"></i> Data Kendaraan</a></li>
              </ul>
            </li>
          </ul>
      </li>
      <!-- / Main Navigation: Gudang -->

      <!-- Main Navigation: Operasional Direktur -->
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-th"></i> Operasional Direktur <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
              <a href="#"><i class="icon-circle"></i> Verifikasi Data</a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo Yii::app()->createUrl('operasional/verifikasi/pemesanan'); ?>"><i class="icon-circle-blank"></i> Data Pemesanan</a></li>
                <li><a href="#"><i class="icon-circle-blank"></i> Data Pengadaan</a></li>
              </ul>
            </li>
            <li><a href="<?php echo Yii::app()->createUrl('operasional/monitoring'); ?>"><i class="icon-circle-blank"></i> Monitoring Pengiriman</a></li>
          </ul>
      </li>
      <!-- / Main Navigation: Operasional Direktur -->

      <!-- Main Navigation: Peramalan -->
      <li><a href="<?php echo Yii::app()->createUrl('ppic/peramalan'); ?>"><i class="icon-th"></i> Peramalan</a></li>
      <!-- / Main Navigation: Peramalan -->

      <!-- Main Navigation: Purchasing -->
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-th"></i> Purchasing <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo Yii::app()->createUrl('purchasing/pemesanan'); ?>"><i class="icon-circle-blank"></i> Data Pemesanan</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('purchasing/pengadaan'); ?>"><i class="icon-circle-blank"></i> Data Pengadaan</a></li>
          </ul>
      </li>
      <!-- / Main Navigation: Purchasing -->

      <!-- Main Navigation: Components -->
      <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-th-large"></i> Components <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
            <li><a href="maps.html"><i class="icon-map-marker"></i> Maps</a></li>
            <li><a href="tables.html"><i class="icon-table"></i> Tables</a></li>
            <li><a href="charts.html"><i class="icon-bar-chart"></i> Charts</a></li>
            <li><a href="login.html"><i class="icon-key"></i> Login</a></li>
            <li class="dropdown-submenu">
              <a href="#"><i class="icon-signin"></i> Sub-Menu</a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-signout"></i> This</a></li>
                <li><a href="#"><i class="icon-sitemap"></i> Is</a></li>
                <li><a href="#"><i class="icon-share-alt"></i> An</a></li>
                <li><a href="#"><i class="icon-reorder"></i> Example</a></li>
              </ul>
            </li>
          </ul>
      </li> -->
      <!-- / Main Navigation: Components -->

    </ul>
    <!-- / Main Navigation: Nav -->

    <!-- Main Navigation: Search -->
    <form class="navbar-search pull-right">
      <input type="text" class="search-query typeahead" placeholder="Search">
    </form>
    <!-- / Main Navigation: Search -->

  </div>
  <!-- / Main Navigation: Inner -->

</div>
