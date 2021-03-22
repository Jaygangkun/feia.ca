<?php
# Database Configuration
define( 'DB_NAME', 'wp_feia' );
define( 'DB_USER', 'feia' );
define( 'DB_PASSWORD', 'lxoWKC1q-zpQQqG337wp' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'WDWs(s3K^k![u(vs@#XxwKBtEdu+Pp(.)0l/1fvbFad8Wi#Cmi~`fgaHZwc]Iaap');
define('SECURE_AUTH_KEY',  '|+vMS[o9dZDY6HI=9yh)k pN)Ug~qR2|.;;j>-.=iMfW)<-4xmi5k,J)+LsDR]0Z');
define('LOGGED_IN_KEY',    'b!6yYOqRyrASWRX+S:2aBt4Gro5hNm%feO! |_]78S9&^(+_sM:(;40X@+VB[_d:');
define('NONCE_KEY',        'Gdf$|DO1t3pc|aIOG!u0-JxtS!4mU&S0C{2T493SncH7M,`J$></-zrux2N#vnSh');
define('AUTH_SALT',        '.w>=Rm|g.8XT~]]!CK/]FNI7y#}Ci6LSf)-!3]a3O-:Ed-U5c{Z#Hy6Kzb0 M!Vq');
define('SECURE_AUTH_SALT', '1q[`}I-[v9*I-` PH8ZzU?KL<|g5n?)inQP &VkNk9|Q7rv$|@1u]}iD<IYyo_bM');
define('LOGGED_IN_SALT',   'vtx]cDK9~n(nenvEhR#O`B+F}:U!bG`nC Kv E<WoHck#/K|GwPI{-D+)-Y5fs::');
define('NONCE_SALT',       'xhbgaU[Yy-1K<FO:huWG%d~TWHx:eh-gs{:3n)u @|q2#l@NSLb/WoV.a|f+l|x5');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'feia' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '086bf5dd87c144db41f1aa904bba50bcee88babd' );

define( 'WPE_CLUSTER_ID', '111176' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'feia.wpengine.com', 1 => 'feia.ca', 2 => 'www.feia.ca', );

$wpe_varnish_servers=array ( 0 => 'pod-111176', );

$wpe_special_ips=array ( 0 => '104.196.103.18', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );


# WP Engine ID


# WP Engine Settings







# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');




