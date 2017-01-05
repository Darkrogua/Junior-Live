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
define('DB_NAME', 'my');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u[+BKd1_R@4V;Im#bw+i:%sEb@U340wylsJr|SXjW3;xQD>C@TN!mQ/,-e6?5xaR');
define('SECURE_AUTH_KEY',  'HN0Vu0>{+<7e-MI+9S4]Ubo(!u5q{- svLdkV9bx#/EH;V@c|^>h1h~SW}8k+9|v');
define('LOGGED_IN_KEY',    'D]r-f*sGMI^W#k!a+T1M.|Cy.|)nE0`W(Z[Wmqs&T-?V32|;7el|Z,cd6(Hfr]b]');
define('NONCE_KEY',        'kL*<v|>`9 ~45tl-LvbHSzsg]Mu3=hjG4=byN]~^51$`*Nt+,q1`UA,Hu-Fiwdk}');
define('AUTH_SALT',        '`[#(jT)6o[%8&Lv/ gS^AdKhy6`rq^lXkoq|?z46sbPd-aSSHI0 +G=K^xcO_uVl');
define('SECURE_AUTH_SALT', '`d4:I)5w6:oZO>bxNmZwc~KYnE|ED}Uenga5JsC$_cUUacMw?i0)}:b,o?2g+O~+');
define('LOGGED_IN_SALT',   'a}JF$;9,NBx*39//&-;omiwgBOR;Tj%A{rI@v@koJ|1@C. lR;X_H{T]GYY>#o%,');
define('NONCE_SALT',       'N!;I@uxo>-7 g>%sE0Vo!c6`rS5?9mhDA6rG8&ZA=;x)Fa!SI1|nb/ESc7h8t4/g');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
