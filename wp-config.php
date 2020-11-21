<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'humi35_wp1' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'humi35_wp1' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'f23nul4jdf' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql1.php.starfree.ne.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`go<@7n9/?9/8.nZ 1PvT?d@quos=rL*Uy0tG#{I7z+CDhBfsx^W!3S;Q3m`?|7T' );
define( 'SECURE_AUTH_KEY',  '}yf<kmna]J _F9*Ufpq$/z2v$`f5#eH:)>Wl:fWj$D=|67J(FS_Z@4W~Z>Lz|PF/' );
define( 'LOGGED_IN_KEY',    '@M5b0{A?Z TV#$3n_XnVuTC_<]n(2)2*._BTcR=q2~RHXn$$d~/nLSr~lJt7>R,6' );
define( 'NONCE_KEY',        'hN 9c6grjhR2n^*hI30DilqdE+j6=>#.Qxh2r;:ZU@b.w`YS_qyU!8e[x1mLtYoo' );
define( 'AUTH_SALT',        '4UqZCKcyNs#-5qs#`J$$5^M<uO|1;hOJAjZ3VT5<:(EFm)=GFi%&DdTTO!WVI<9+' );
define( 'SECURE_AUTH_SALT', '@9ZeKMYK,nyKdgRdf}/7Xd.8,0I.Ykrx3BF$j61z*@vx|HNz3Lqxqw#-t6:{.BpM' );
define( 'LOGGED_IN_SALT',   'ID06a_y1k5{jBCW$ MlZ>7Ph_nJVu{GfxnPAVd$cGNgs>XGVrr/CT|Wj]1uNB~#p' );
define( 'NONCE_SALT',       'Hq[.S6xlcvJ&IA3UK,qTk`)9@i>E)MM<!p2r2 lkFmzH,^,u>`R/m%Z`>N6E`NY#' );
define( 'WP_CACHE_KEY_SALT','QYY.BCM#C[_/8;~c*4>CxFrFLjR*}X^{?0!g~o8G{=:othr!L}!n5kbIJ);E3{Gn' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
