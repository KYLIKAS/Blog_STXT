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
define('DB_NAME', 'Project_1');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'yGm`R#kis o|3~|I5 }r>Vc]!X35,S0[q$CO-RjT{SHqC>cc-$*0=Nk(xwDV(>:1');
define('SECURE_AUTH_KEY',  'TUxVjqsS^e+Zm:hK>~`Gk&E$V?H`=H}Iv5m!`IBOxM[8{=~1D,by@~tR:-5pqCSZ');
define('LOGGED_IN_KEY',    'Gt_VCQiqsSeQ`z!st3@/IwD]ow[TybIfW%~!5Gz >mBIA3mqY@BUJTf/xV@+{FQ@');
define('NONCE_KEY',        '?(hdgc_!;%_9A{LztPu~dq`!og@do3Y8eOsYzn|`i.3nT=~7f,GMcS_gt5tu*s&m');
define('AUTH_SALT',        '3O3#C7Q6B;1.Z(}v;?o{~?*5t:N (sh^2tW5XxYA^;*L(t/x< H((~?6aWiWHu&&');
define('SECURE_AUTH_SALT', '=#U5;w7S/Yrsw>gtJj, ?HIn$a6?bK~QGx!K~d<z}M%;-2y|9OX*i-#%`RR%F<s_');
define('LOGGED_IN_SALT',   '(``a1ZEt;7K$/^n9$jVbcrP>amOvw~{c~~!1(E162~otZgxG>KdIJB$+~4Fx.RX-');
define('NONCE_SALT',       '=mYv51>+6:q=Ue<Wa5uO_|i|9?JG1;]S>aSxY6kDb.K[j.m%>F]oe~+ZW92BT+`v');

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
