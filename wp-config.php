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
define( 'DB_NAME', 'ctmac' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '<(tm4(@4P-2019/>' );

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
define( 'AUTH_KEY',         '|s=+[g_jr&F<cXAiDY|h7$sNapkT*4MP|H X5Mv!@zeK+zp,79>:.Kn~vGat<c.H' );
define( 'SECURE_AUTH_KEY',  '.ignXPH!sB;5O|D!<zjr[OJ$LE_%e!^M}Yp`1 AqgOt;sh9%|XHA~h{dR0EMWu]m' );
define( 'LOGGED_IN_KEY',    '/|w&ac60;g<>#RmMSo*,{?*K^Rm!EO}bfEDl=Cbg{GQu/cu>wgj&>&=?xB -Y}J~' );
define( 'NONCE_KEY',        '73%^Y&;Qrt.PzQPrL]]=OZF+9&ii&cOjX7JPS:9BWNqNCz[/7*FwZy#v1q?-@M?]' );
define( 'AUTH_SALT',        '5#:+Q&@6FD.?lq`AP;+z@tSk0pvy)_*`Kjv (kE6xc!<Y644ppTK!fY}[DG[wqCc' );
define( 'SECURE_AUTH_SALT', 'n6xi$U_&imq)I|^b|v[:}S.LdSr!~n@r{,h+taD-/Qx0 Aw|1tS|]iHW]-yJm;cq' );
define( 'LOGGED_IN_SALT',   'M9jyti_}WOjN@l6#%y&?EfER4A<9H[Mg/w@ZJzSJ?BU5!q)GMgdS|?;(ln`Y<B#5' );
define( 'NONCE_SALT',       '$N?bW7J=@dx.z>tYXNo!s~4usmJR[n/O>/Lqy*-H~+j7wK j6`*Z`WV!2))v{(d]' );

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
