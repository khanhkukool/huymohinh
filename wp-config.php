<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'huymohinh' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_k|r|X&gt[ZJm|8bxfa](1B_176iy_1)]A#5v%rpe}+@LHe9!]uRf_yp1c-!FIoo' );
define( 'SECURE_AUTH_KEY',  '.Ui$8qL$KA4(8&2Bq3L4.NzmkS0b~4Eas:WJE-j7d,}E^e]BAYrc#g%k%{1K@jTn' );
define( 'LOGGED_IN_KEY',    'BGvNMsi91wk3Lt>KsCLP7`zT^dn9|_:r8CfS7w~{,u:4mB9A3h%:-VlvHe-r>*E[' );
define( 'NONCE_KEY',        '#*BX PdMQ@11#FKd6 Y^!Ib%eiJ!J^196Qkd`#mxP7N[sQ9U_Acmx[s<Xvg4)a^$' );
define( 'AUTH_SALT',        'c-8P B0ox#hf#_Z-z!/gTVZF)ZSjM_ek_Y~Y_;`I1B|sQX^E<39^p-vI>5/lJa+&' );
define( 'SECURE_AUTH_SALT', 'zmHc>jMq}duiI@3m8wUmDZ?CdJN t*mN[YdX3dWE%?^fS6BJ6Rm!g_%4;{zS!?,4' );
define( 'LOGGED_IN_SALT',   'Kn$#tIVJ`Ig{PXqyE1G2.eGZrKwY@Qon$Y~!:X3UnKtBJhC/<L3JuQlKN8cSbDrk' );
define( 'NONCE_SALT',       'xWVZ3tBY)=<:0-kQ6:kCPC|k-?P)5:IoRQEV?|Hz X}E>`t2~O3p5,D<0|,ddd+q' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
