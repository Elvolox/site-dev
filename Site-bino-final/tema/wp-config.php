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
define( 'DB_NAME', 'sitebinoteste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'l_q7S}3L~Kud8sK;KmWWkuN5 f1(SEi}uJ3-f**,Vpf.*F,efusdQ*;3Y!;KQF!`' );
define( 'SECURE_AUTH_KEY',  '/d$cJ/1C0!Ggxzeh? o<f>.H>VL4C{t&P%9C}?(IzgFQ xWJe@C86/vw75tI3+-m' );
define( 'LOGGED_IN_KEY',    '1.wf7@VncD,MVH4]4*.fG/s>8VEYS~B<Xe,4!9Z]iaYS/J2X|!u<PZC|s0:}tb/5' );
define( 'NONCE_KEY',        'mG5fa`@$uq9A:aUOj0NSen) >a#5@]Jz+_GDAN2RE:RT7)F%BH=fGGH&+S#hw*yw' );
define( 'AUTH_SALT',        'f~*e~w?<z6%$wzf[ISa|/Hg!q[ T``H6!ptUl]%9-9Y%_;bszH9.pJn,qeezLbF/' );
define( 'SECURE_AUTH_SALT', '|c)(ZsK)nlo@uUCsr=X#dXzL9DnRZr[%1WKCWCU9{d~Ze`U&vfKXnyPr`[A9[>-%' );
define( 'LOGGED_IN_SALT',   '{{lXFwl3; ZaDRQ<I]?f:Lz9@=b2dWD N,SsV)Rh9?14I_M5@hbFiiXC?GviI!18' );
define( 'NONCE_SALT',       'aajaYW$o<Hl9BW#KCj?@V75$>^@|>7@aJRLk+pv?{DwoXixLv{SfgHLu|CZn0JWL' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
