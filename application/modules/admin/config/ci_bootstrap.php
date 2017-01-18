<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'Airminum Ozone',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> '',
		'description'	=> '',
		'keywords'		=> ''
	),
	
	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
			'assets/dist/admin/adminlte.min.js',
			'assets/dist/admin/lib.min.js',
			'assets/dist/admin/app.min.js'
		),
		'foot'	=> array(
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/admin/adminlte.min.css',
			'assets/dist/admin/lib.min.css',
			'assets/dist/admin/app.min.css'
		)
	),

	// Default CSS class for <body> tag
	'body_class' => '',
	
	// Multilingual settings
	'languages' => array(
	),

	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'Home',
			'url'		=> '',
			'icon'		=> 'fa fa-home',
		),
		'master' => array(
			'name'		=> 'Master Data',
			'url'		=> 'master',
			'icon'		=> 'fa fa-database',
			'children'  => array(
				'Pelanggan'			=> 'master/pelanggan',
				'Barang'		=> 'master/barang',
				'Marketing'		=> 'master/marketing',
				'Kupon / Diskon'		=> 'master/diskon',
				'Pemasok'		=> 'master/pemasok',
				'Karyawan'		=> 'master/karyawan',
			)
		),		
		'gudang' => array(
			'name'		=> 'Gudang',
			'url'		=> 'gudang',
			'icon'		=> 'fa fa-list-alt',
			'children'  => array(
				'Stok Awal'	=> 'gudang/stokawal',
				'Penerimaan Barang'			=> 'gudang/penerimaan',
				'Stok Gudang'			=> 'gudang/stok',
				'Pengeluaran Barang'			=> 'gudang/pengeluaran',
				'Retur ke Vendor'		=> 'gudang/retur',
				'Stok Opname'	=> 'gudang/stokopname',
				'Adjustment'	=> 'gudang/penyesuaian',				
			)
		),				
		'produksi' => array(
			'name'		=> 'Produksi',
			'url'		=> 'produksi',
			'icon'		=> 'fa fa-th',
			'children'  => array(
				'Order ke Gudang' => 'produksi/order',
				'Stok Barang' => 'produksi/stok',
				'Barang Produksi' => 'produksi/barang',
			)
		),				
		'transaksi' => array(
			'name'		=> 'Transaksi',
			'url'		=> 'transaksi',
			'icon'		=> 'fa fa-book',
			'children'  => array(
				'Penjualan'			=> 'transaksi/penjualan',
				'Pembelian'			=> 'transaksi/pembelian',
				'Penerimaan Retur'		=> 'transaksi/retur',
				'Penerimaan Lain'			=> 'transaksi/penerimaanlain',
				'Pengeluaran Biaya Lain2'			=> 'transaksi/biayalain',
			)
		),		
		'laporan' => array(
			'name'		=> 'Laporan',
			'url'		=> 'laporan',
			'icon'		=> 'fa fa-file-text-o',
			'children'  => array(
				'Penjualan'			=> 'laporan/penjualan',
				'Retur'		=> 'laporan/retur',
				'Galon'		=> 'laporan/galon',
			)
		),		
		'lapkeuangan' => array(
			'name'		=> 'Laporan Keuangan',
			'url'		=> 'lapkeuangan',
			'icon'		=> 'fa fa-usd',
			'children'  => array(
				'Penjualan'			=> 'lapkeuangan/penjualan',
				'Hutang'			=> 'lapkeuangan/hutang',
				'Piutang'			=> 'lapkeuangan/piutang',
				'Laba Rugi'		=> 'lapkeuangan/labarugi',
				'Neraca'		=> 'lapkeuangan/neraca'
			)
		),		
		'user' => array(
			'name'		=> 'Users',
			'url'		=> 'user',
			'icon'		=> 'fa fa-users',
			'children'  => array(
				'List'			=> 'user',
				'Create'		=> 'user/create',
				'User Groups'	=> 'user/group',
			)
		),
		'blog' => array(
			'name'		=> 'Blog',
			'url'		=> 'blog',
			'icon'		=> 'ion ion-edit',	// can use Ionicons instead of FontAwesome
			'children'  => array(
				'Blog Posts'		=> 'blog/post',
				'Blog Categories'	=> 'blog/category',
				'Blog Tags'			=> 'blog/tag',
			)
		),
		'cover_photo' => array(
			'name'		=> 'Cover Photos',
			'url'		=> 'cover_photo',
			'icon'		=> 'ion ion-image',	// can use Ionicons instead of FontAwesome
		),
		'panel' => array(
			'name'		=> 'Admin Panel',
			'url'		=> 'panel',
			'icon'		=> 'fa fa-cog',
			'children'  => array(
				'Admin Users'			=> 'panel/admin_user',
				'Create Admin User'		=> 'panel/admin_user_create',
				'Admin User Groups'		=> 'panel/admin_user_group',
			)
		),
		'util' => array(
			'name'		=> 'Utilities',
			'url'		=> 'util',
			'icon'		=> 'fa fa-cogs',
			'children'  => array(
				'Database Versions'		=> 'util/list_db',
			)
		),
		'logout' => array(
			'name'		=> 'Sign Out',
			'url'		=> 'panel/logout',
			'icon'		=> 'fa fa-sign-out',
		)
	),

	// Login page
	'login_url' => 'admin/login',

	// Restricted pages
	'page_auth' => array(
		'user/create'				=> array('webmaster', 'admin', 'manager'),
		'user/group'				=> array('webmaster', 'admin', 'manager'),
		'panel'						=> array('webmaster'),
		'panel/admin_user'			=> array('webmaster'),
		'panel/admin_user_create'	=> array('webmaster'),
		'panel/admin_user_group'	=> array('webmaster'),
		'util'						=> array('webmaster'),
		'util/list_db'				=> array('webmaster'),
		'util/backup_db'			=> array('webmaster'),
		'util/restore_db'			=> array('webmaster'),
		'util/remove_db'			=> array('webmaster'),
	),

	// AdminLTE settings
	'adminlte' => array(
		'body_class' => array(
			'webmaster'	=> 'hold-transition skin-blue',
			'admin'		=> 'skin-purple',
			'manager'	=> 'skin-black',
			'staff'		=> 'skin-blue',
		)
	),

	// Useful links to display at bottom of sidemenu
	'useful_links' => array(
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Frontend Website',
			'url'		=> '',
			'target'	=> '_blank',
			'color'		=> 'text-aqua'
		),
		/*
		array(
			'auth'		=> array('webmaster', 'admin'),
			'name'		=> 'API Site',
			'url'		=> 'api',
			'target'	=> '_blank',
			'color'		=> 'text-orange'
		),
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Github Repo',
			'url'		=> CI_BOOTSTRAP_REPO,
			'target'	=> '_blank',
			'color'		=> 'text-green'
		),
		*/
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_admin';