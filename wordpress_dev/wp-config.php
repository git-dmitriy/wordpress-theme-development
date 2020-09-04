<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_dev' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wp_dev_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'FRmIx7b34_' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%[1&KbQ@3^G]J0{H5%WyX9Wh)M^5(yndiv+H^!/2=h p(!g1x^Hs]HW|><>2nb:u' );
define( 'SECURE_AUTH_KEY',  '~q0N{J[W hl)hb)[jI Aqq:D)uw.*O88kCxp%q6O%#u!w<4YgD94W mk~,MI(J0^' );
define( 'LOGGED_IN_KEY',    'zXCpc5snZ3x<o^@^!KndGGZl)u3x*iF@=PZ-N;`$B;Z9f(FEy!}e?^kE+EL/N>=|' );
define( 'NONCE_KEY',        '?3c/ m|ioBP-k{pL9PoJB2k,:k*uL|Ks&y;8/xvX(!-bshE+{fZHkANo6l$2bN=q' );
define( 'AUTH_SALT',        'nl=+0u`:Ig.&G`2FzSuY/Z5U}%f|ugzA:=&h%]X>`|%7;fqdx!YLjG?*#b1v)+X4' );
define( 'SECURE_AUTH_SALT', 'xo>gwoaCxsIe)AIDkA$F=QP8W1bGw!@hKp|2oyQ)yjLT?xk+!ds3G,gt0-jh4Ig;' );
define( 'LOGGED_IN_SALT',   'G-[7O]J!gtd^4|Bf/)@@hK2l6:zb$[{Vr%>:GPB;Kw~i]2/xko$tq8v~h8xk4?7a' );
define( 'NONCE_SALT',       'Z9 N)7tC4}Dj N~KJ2kIuB KRS=0[s1Y2>U[GKUD-4VH.x[VzP=.B1<xnoc[WS=_' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
