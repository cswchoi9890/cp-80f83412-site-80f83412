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

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'gc37tbt027xn6w886z2hqywz74asqw2bccv8btkgy6zazhcngcvzt8wvok0pz995' );
define( 'SECURE_AUTH_KEY',  'idf3l8qgx9d0fh26pm4wl5codg4yi5i9v9hzbdy6q5j5kwmbg1h80allqyacbkp7' );
define( 'LOGGED_IN_KEY',    '6nfyone6lkui22aintobtdx7t9c3pe73etre732aib9v3tdy6oqhqbqeco8mrdyo' );
define( 'NONCE_KEY',        'v6p4pzflgpz9mozr1y4a0hii5opqhda1z4p643uxt4j7r4vejh76d8dd4gaamtih' );
define( 'AUTH_SALT',        'v780ftnkzn9lrkj52yr5gbr6nswkwnkc25nmdy2ig4lv33x9fac3e8vdn85wbhsz' );
define( 'SECURE_AUTH_SALT', '4lj3cjjx40d4gjknm21zx6w0ijgjq1ec5ba88qq6yyv5iizktfqq2pbovc6vewqt' );
define( 'LOGGED_IN_SALT',   '3njozxfoj3c8ypclrp7knmrciqfcqnj2c1yba15yl0pam2gztmgjbn2kon52sek5' );
define( 'NONCE_SALT',       '8axkggm92wzb7vdu49vguoshybzlmx30m4cti4bapmpe4nt6d4o9ezp9gu23svla' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-80f83412-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-80f83412-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
