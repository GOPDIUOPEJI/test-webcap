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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         '9:[s.r&Ws|@cvV6r-2+dl,488q9Xw7@m`:PIDLP:qrF[7k-=1A}${)Fp66[ku)H&' );
define( 'SECURE_AUTH_KEY',  '/42t(2A5hEjyb4pzjROTKAZ6 ~a!;%p*g:pv*k[%1l_(`%OY2fyh{zBF%/pc(;@?' );
define( 'LOGGED_IN_KEY',    '}0C:Ll%.f:/iShclSRQ&2{,M?^:SmbGDBPHJllqwdy;i pc>Pf|KilVN Q<eL,ty' );
define( 'NONCE_KEY',        'j5]O&C_^bzY5O3@tn:_(:6:hB|5(hO0yCZ=!jAA-~(!m1eg=.|dSKnC&]Z{.%jDp' );
define( 'AUTH_SALT',        'H>>l!`jEtO`#(3L9eRY2t7/c`9f@G,%M>=,]`OLFL2`0H{[DHN(-=3TgF|%% C{[' );
define( 'SECURE_AUTH_SALT', 'IR<bIVR%Xrepba=5e`Ai_xVs<4j]G`_;pTy!0,U9pERPc0Bp,44FHjw%W*TcNTy+' );
define( 'LOGGED_IN_SALT',   '_E2Y<dXC@LlJ>9_Lm,?9#U]Z=%b%(nzA~:HsyfI/IJWrQ6JW^kmmL,Ihf}URsIRW' );
define( 'NONCE_SALT',       'Zm>gB,A3S0X^FvWtlu8{6q-9;[>Sk9COo?z[&1l.4UGqPERNus}m&8r7 0e#GX@E' );

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

define('FS_METHOD','direct');
