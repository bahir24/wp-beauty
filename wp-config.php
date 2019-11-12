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
define( 'DB_NAME', "wordpress-beauty" );


/** Имя пользователя MySQL */
define( 'DB_USER', "wordpress-beauty-admin" );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "Wordpress-Beauty001" );


/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );


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
define( 'AUTH_KEY',         'Adr2EyiHB[k!//7f0#;.?dXhLVUGIp/do1uKJlI<s84#cW85zxVhnoaKHa5#WZu3' );

define( 'SECURE_AUTH_KEY',  'Bm!)7)!`j#{`#!0J`#90wAyx;OjyhQ9|zK`2IfPxUTsF;u4Z)c=RPUi3.|/cmB i' );

define( 'LOGGED_IN_KEY',    ':%b.c@JK|aNFmQF,NZKGPJ//KV /=g O{)]1Z3U~ibYv0y~iF+~CM/>PtJE&^@ W' );

define( 'NONCE_KEY',        'ke4OWbGsg%wr6-)HXA&Y==M7#kG&+Cs7`Lu!3e]gV_t$ =]OjvXQ3qCtOI^_`MGr' );

define( 'AUTH_SALT',        'dQH|~9>UqKh~[oUl>jx#FT$O`^~`pVJ+pcf6z,nK:v8KS_l%opX`l8BAU~V4<*yP' );

define( 'SECURE_AUTH_SALT', 'JHXWL5]f)[+;uiKuMjd&0E<*|:p,w*Rr9NR^?$];~Gp?y2<9z1%;y)bw{$=A?x>n' );

define( 'LOGGED_IN_SALT',   '?P#mN80{gNgpbIhPFL:v|x4e.?uXPJ2*FhZcNQn5e3^x,wPRjs]5~:Gt|j4)V/xE' );

define( 'NONCE_SALT',       'k[<!D=#;gGi]]Inw;4Mx7ut2zU@v+ld]bRgp_ (X4x#u)F<+|b^8z#v;]^?GHQ_e' );


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
