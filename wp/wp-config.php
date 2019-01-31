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
define('DB_NAME', 'faep-wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Hb[CzqAr#rjAF#C^bQYc3Qds&1;LL<C7X._g+~`{HUXHx+%$o|MuGG$Q@[ZAiVah');
define('SECURE_AUTH_KEY',  ';lwJpCi@ q!e$%<bne81Mg`as`u@nS[9^wMFmVS!{L8s/$K[s5(>JruLGkj=;jUB');
define('LOGGED_IN_KEY',    'g-r,Ea8D@@EwWt9GswZ$LcJIx~#5I>0Vd3t!#;ndMPDJTw,g/v!.7._mtUQ9}Y99');
define('NONCE_KEY',        '5+]Ww}BLN*)|7Ln`sS(;T6!.+`>PXH<RNPG&?E6MjD2[J>R8V>oOOCy`-eZO?Q8%');
define('AUTH_SALT',        'onHxDdvP0 Vw??ni@uF!Yo~u$x^J aC;3BD.^:O*Vr~vx97^Q0@Ec}_;Md*cmFAU');
define('SECURE_AUTH_SALT', '{T BV@fy6.J4S6~b!+(3:!RI<Sn@0Qd~IcOUl!s=k$|rW~DMt{s;ncOr1@&E>W65');
define('LOGGED_IN_SALT',   'O38G[DJBPRJ/uRZ{3!dY:,j@Q+PQc%4YI<J Y^X$qpI0RaDw+$dC=Bx~Y*bPrA9=');
define('NONCE_SALT',       '?WzvPSiDT~FgcK8`0@3^KYeTugd8?moe3OBKHv$ik($%1$GoFNu]rRjD8=|a *>m');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
