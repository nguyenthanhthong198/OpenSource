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
define( 'DB_NAME', 'blogchiase' );

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
define( 'AUTH_KEY',         'L$#yh*d`@j@/&.v!Z$WAZ3h4uuVdd-LJLfW|BfvlI c=`0s=XCAnrV;7jE ~kW..' );
define( 'SECURE_AUTH_KEY',  'k(hT(u_fd9sf 3~*DkhYXuN9Bjib)u_`P-F*/ivn(G!JXqWT9*.9|#6>.gbCzu$T' );
define( 'LOGGED_IN_KEY',    'N`n)b`@&H$4TXuvqd&[v+.uE 1W;ZK:,Oiwp+<^OFj&o!sv(B4=CE-K 4&n@0XC}' );
define( 'NONCE_KEY',        'Jduhrr_-?RqgAqhpuK*j;:#s%BkR&jVPy%p}[E2wF9xc/lo9R[3uS%y/[K|6g[Vg' );
define( 'AUTH_SALT',        '9Dqrp[$V :XT4S-.gahed*O#]:fBIBBhMz_Y)DBX>`KNF+E>xhotdgrgZn7%/y c' );
define( 'SECURE_AUTH_SALT', '9>`cQNcxNvY$3x7D?6lyT~G0WcQvhXl:{m2vGBHbSt*p@uY Hk.5ymW77/?j9kVd' );
define( 'LOGGED_IN_SALT',   'G{[v%).V$&DP4}{`xkDv/o<%4ia?CZ&X7%9R L]QulD]E5Y4f*5Y~FKyND@)S8*Y' );
define( 'NONCE_SALT',       ']D^,0)p1@5CBEchq3_{D) y~/TMqsK{q~s@xc6)k!(DWEg:LQ9sk`i@X/;!3VZYg' );

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
