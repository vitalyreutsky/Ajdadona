<?php

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'adjadona');

/** Имя пользователя базы данных */
define('DB_USER', 'root');

/** Пароль к базе данных */
define('DB_PASSWORD', 'root');

/** Имя сервера базы данных */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SSd7*wIpfx@38uzym3V$[4*/6WJ0br_xu|Ia|DAopa}&&h=ue#!2m&!x/sgVT+Tr');
define('SECURE_AUTH_KEY',  '/u`h0?HQ;xX?7MVgHL:zMG4<4ASqzI1+IlH7z%x5io}X0p{K{ HcE#_d[ulBW1[l');
define('LOGGED_IN_KEY',    'J]K;sMGkSH*u(lkQ^aRC@jw,H2#99=C~/]X=;A0T5-bD4qz;T}q9FKNYqGf3gds>');
define('NONCE_KEY',        'VM&&c2Z(j8Bz>{N~N:^*GITQ5Dy~H*&0`krtNJ,gB:vTAprAN4Gyu*I%*ecLF.1w');
define('AUTH_SALT',        'p+fKMV>aPD[l[t&*n|`Jji_mCganA<HutzVXoA;lPiVJ`3:r,^?H|Aq)jGU-J,]P');
define('SECURE_AUTH_SALT', 's%,q$1Q-qtW0u^S^} kl*<d*eno>@%@;ip}$|A[]E)s?]@7Pp*x<IC5g]h<u;e)a');
define('LOGGED_IN_SALT',   '/{Zg#2dGB.#7qndUj*QnPJ8T^d}2Qy$$;;QNi#:/6FdWPSJz;<XpWvf`-HQe>#^y');
define('NONCE_SALT',       ' |@VD6FGEZMS:j0p2mF{xZvGF~i]=4Ixd&lJJK8AF*z{s`V3/V8ZYC^=NiRf?yzU');

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
   define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
