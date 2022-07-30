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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'epiz_32279825_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'epiz_32279825' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Caiocaio1!#' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'sql300.epizy.com' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '.Mkd+D/UmF+@$RXNW~o~E8^NN3:dtpzV4x~`F0:06 S#uR_9pwMZ,ASiC@.km&@.' );
define( 'SECURE_AUTH_KEY',  'W&bB3%yg_.f|Ao6<sNVl< aJ*l<gf^8i|:]2lcb,hD@_*>|m#LC|U!^XUMs^68Nj' );
define( 'LOGGED_IN_KEY',    'uQSgFSW60ZC(:VRb3Ie^P<Hr)9-&jUe9nnqxY|aDG1|j;h5qgn[fye>$=J+Y*GLp' );
define( 'NONCE_KEY',        '$OVVOiOx#w&sL,&3*|?BIPOi!Mq_<e()c2|Ok$IY;tFMKr;)eG]IuM$J]fZlaF}?' );
define( 'AUTH_SALT',        '?qh68*s_PX:<{nOOL);wp/9&g46OH.Jg{39tYn:tNl]-B1W*{^r6h^5xl~kam-W}' );
define( 'SECURE_AUTH_SALT', 'uo`T*eS^u-|e74AEk`pbBH8:(m7.!])kC2Y-;s+I#5YW^co|oC;>boJ5ym>%?K`j' );
define( 'LOGGED_IN_SALT',   '^a9_;[3z6.0V]B;e gge=zI;T;yT?<bs0@A(P`@V=+<U5dEyO`uzvUL`ar6,3#89' );
define( 'NONCE_SALT',       'E-puL8u6I*ySRG6]BX#w-4EKklT~i)E^7Qio`XL5(2KoK^FA0) z.hZg{FiXyTCg' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
