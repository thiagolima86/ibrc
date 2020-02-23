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
define( 'DB_NAME', 'ibrc' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql_ibrc' );

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
define( 'AUTH_KEY',         '1u-mP5seFW@Z/AhGTlxzs]:>Jd3]0h=Cq]fqAV]/Q?(:I%L;~hT3ub~ace/ljcec' );
define( 'SECURE_AUTH_KEY',  'j~0A_P<sK]et]w<{o_N9q7Sv*X<Mf&a2i/3-05M P(Sv1*`}tangz*<4,oUd=Q]1' );
define( 'LOGGED_IN_KEY',    'hS)yWp%bPY>?WYHLd)R_)LHpbF|=g.{DR.cw@9;VK9Fl>/m%:Xo1uq.&=OAJJ%lx' );
define( 'NONCE_KEY',        '89S d[umGcXY/5KmbI3^/]j6-xOAcc8,2[^d[/dW-)hj_.0C3,=?_)3)h_)a-lb_' );
define( 'AUTH_SALT',        'eS;G2v]}X0lB`oT.*Y&G6D~a`6A? j;#Fuk8.8O${g=^`V:jNqD?1EMks*ee[K&8' );
define( 'SECURE_AUTH_SALT', '?!v|DEO/L]nkiy=@|l7NEz!{OUPQMb%m!na56#QDln[Q>+*yywAbeJk_m GMa9u7' );
define( 'LOGGED_IN_SALT',   '?*Bui@ r2TGN)*J75NCSo0y0i=xM-i|{5<;y%l#)?H9%mJ~HdzvkB`cEMrePQKHj' );
define( 'NONCE_SALT',       ';^]BU{_g+r8Fkmmb8_3!d*(9}+Z2X0nK:bF<eKB<_U[?#xoKU<YUh[xt(va>,Y6L' );

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