<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'altran');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.VGv>X?Q-WL*T+Utre<2. Fk)Omm~&]w>3p5(Ig[..(+[U|{^4-k5d(MsE<L;s=t');
define('SECURE_AUTH_KEY',  ';+B-uXZ)o)OO!:X,A_;YB4knm[XS8KDPJ;wQd(.TYvSFrwtuCxbw_E,oJEi7CuM(');
define('LOGGED_IN_KEY',    'ZppkU?7Nk8q{t]+1SIG)f- B 6*nt~)EPl+1q8=-C[c(1w*@|EI;o,R?+O-ehH9!');
define('NONCE_KEY',        'ND&|xTI2R1;hY33up?@kn n-|NNs_zc_Mw{R-P{e^Xa`Z)*E$x<t>hJt.0|oN!;}');
define('AUTH_SALT',        '-zV;^}jk^%wQvY@R0l|4&4nr->^KMk`8H|FqEDT:46LUSZDiMT%Iq7}oFd6hnh{S');
define('SECURE_AUTH_SALT', 'O9_ya|2:-Xyv2wl`|Sd<kj +cO/E2L)?culE#%=i.k&c=&YV`Wt^Vd_8(;hD-H?,');
define('LOGGED_IN_SALT',   'Ff9O4t$YDP5mmx~B7Sw:r$_NRFo*@#R`D=Xbh,(((FW?)6~ckpstJ S2^W+R%J.=');
define('NONCE_SALT',       'X,<^]`m52mmpe7Nx)>p:WChq_6V9nXAE#SEm2BXK<I`B)FZ:*qRe=yl$?x|{| ~L');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'at_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
