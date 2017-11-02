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
define('DB_NAME', 'liliyage');

/** Имя пользователя MySQL */
define('DB_USER', 'u_liliyage');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'DPoNeu4A');

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
define('AUTH_KEY',         'pfW6Wd{Gt9^?Ih<l9quwaN!Or?d!_-,pk.)>[8b6-!@lL7EC^Z`a8sjE,Y2wr0(1');
define('SECURE_AUTH_KEY',  '4SQ gaV?90GQCzOl6s>}qM^fgRzN|**O-t,;X=oLU/T,-VwO$)$$DCI2`;NJ3-9|');
define('LOGGED_IN_KEY',    'GSWT$Yl8<5ZEdV]R&A@oGf%w2eX,kG$`V &=-Ip>Pq9NgHEcvt(tSFVfs1ZN(ab9');
define('NONCE_KEY',        'vrIpcI/Z0 2]]SiNb]!nO<]2f&~}Kv7Y4JVN|*UxEr0::(:2~J?VpB/&C1:tz%qx');
define('AUTH_SALT',        '+aF4cc]<8(]xy+WLZpH/8f~8zU>MhvWQZ{gI<mn)_WoG5&ewK~r:PM&h&P(}%fzt');
define('SECURE_AUTH_SALT', 'k~i%4v=`,ZlvlV~{b)5|/0Y{h(%XOlX]Dj8fWCk}sn ).G1{nY(@{nBO, D<^(l^');
define('LOGGED_IN_SALT',   'T(aXPuxGcIa?v0JB0#g#,qp4Wu P?;wN/=Rx1V.8d0]$xcch8uY$%t`pIV1O6|eF');
define('NONCE_SALT',       'j?9(6i;h)GDQ5&[% gum&d=P&_B2Jfa9KOw],n#01R;SOJZD6/|+Q^s@MU)}v2E;');

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
