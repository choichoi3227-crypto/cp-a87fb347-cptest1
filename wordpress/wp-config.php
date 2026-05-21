<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정
define( 'SQLITE_DB_DIR',  __DIR__ . '/../_db/' );
define( 'SQLITE_DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         '2m647hwnrkdafrlp1enrv0b3qrkfm6wwj7ng1m2u22t58rm29u211ybpnb61iprz' );
define( 'SECURE_AUTH_KEY',  'xh698tl0y2ht2u4iyfj8jclt92mw83gaxhkrll37van97ycy46ik711a3j99fca6' );
define( 'LOGGED_IN_KEY',    'amgtf1arx2vqa10aypjdd23h5fjy5cn3ukulh26aie3l9dpl5c1ujyqslporq251' );
define( 'NONCE_KEY',        'ggquw702okg2b3o9oiqfg477w8que5soqac3c2urji61h5sk4bkxkb9aca6vj55v' );
define( 'AUTH_SALT',        '6k1jtwkwulhjg9bkflcqwkiw4ca7kookxkuir7kabdkmza5836n0otmcwhy3y0ld' );
define( 'SECURE_AUTH_SALT', '5cwxqj6bjdhf87zwo1yva254w6cpiy7agai8ks5u0w5l2bum4fdql67ujaq1yxf6' );
define( 'LOGGED_IN_SALT',   'wfnq0f68b1kl56lps1b29nl323qzy689va0dat7z7wd88ekvac1sagavguy6h0sm' );
define( 'NONCE_SALT',       '2vd574b37y875v50luta3mi6j5tmbekn1bftycy8q18ehvroflubfz4dypvklm8k' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-a87fb347-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-a87fb347-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
