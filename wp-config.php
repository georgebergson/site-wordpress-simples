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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'aula_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'mqGD[14A/,4v9-no.:{*,AC4-u zuZ4z|!MXcqC_)ti({#cYrgIwjTi|SC- LJl~' );
define( 'SECURE_AUTH_KEY',  '5AqwMc]#J$S+YpE#=I`,eS,_nfFQ8h?dk!UU?.&<O$-c#7fwT?He:9Ybo!s4/NTX' );
define( 'LOGGED_IN_KEY',    '`!=Lrm#3*fQUAX[bSGC2{FU7e:D{s>Y?BmV%:4N6NC)XJbzndiUXC/$sbMz71G%_' );
define( 'NONCE_KEY',        'Fm|NmR]CM$pIQUA$XHJjl,7I4wVkjRUrL`3w% 7sp! J!U^;gM:z/;w(1@`Gp4@N' );
define( 'AUTH_SALT',        'G*h _=yvPz?d,x*;~s&<EcIX-r7o8_%%ptQ(<xnwx9jVP755Kae*rwc!oi5EHqP(' );
define( 'SECURE_AUTH_SALT', 'PGcXj-[d3nBtz/7>m&^$Zv>;ebkdfUY7G~_dWj0OtggGT:vP04boc/B`P@Twg3}f' );
define( 'LOGGED_IN_SALT',   'y=}TkhI30!5hyTD$jWwdL1Fw^mkBP},J8*~)Jt[B*<nw3E?:yXjL*M11D(?PR+0s' );
define( 'NONCE_SALT',       '0(p<*/D&xL0t!P6@]5#wW}A;p$m 3}_HZOeZi],FsFd}/%oX(eP,?i,r.H2xy7OL' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
