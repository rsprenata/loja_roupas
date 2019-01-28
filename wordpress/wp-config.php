<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']H3A<0YzPJHAI|zI$XkjzGcugHoI1:a*f=s+`kgdJplET@P/h{rxsk~]Fs?>fIo_');
define('SECURE_AUTH_KEY',  ')Q `(Dpqz0fq^ ]3vQ]0vA,lEq^(RguA?B#l;bu?MK=&_?fCkpewhj2gE_pS2(F~');
define('LOGGED_IN_KEY',    'Cx}%C6eoZ`&CR!^`XJTOQ_9Vzs/7vObYlJAfNcn(0tj3FhXA#?d]fFXnvn#L@^3x');
define('NONCE_KEY',        'X~GG,3C3IE#4@p}XGqRC$@Nj[$_n*OOY<^r8H@~6in,;o`/n@T[T?l&l( r&b/OG');
define('AUTH_SALT',        'JA&LI(0hqir.z<0;Jyt-)bj0eGu{wU)~$tZ)7*)k;A|XoPwR*JP*4/I*X`s1d$-E');
define('SECURE_AUTH_SALT', 'j5PiM.1Y!dr:LOPd.L51+%GGJ~-q<%<v]dlLzQq[8BZF0`*>0`$)8W!j.4*[%XE)');
define('LOGGED_IN_SALT',   'zbTGp^`~~@N7qBWazsLZ>/gHl-ezO%$LaUc5 `KN&D*})jU0[>L6!,_I@&- 3S;+');
define('NONCE_SALT',       '6b`]{s}2{8&#Q87=V?2>K<w[BR#cd%<(<<yEXr`/.uuPm3 n_2S_D}TsBzR$CoUA');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
