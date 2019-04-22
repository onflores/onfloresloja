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
define( 'DB_NAME', 'onfloresbase' );

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
define( 'AUTH_KEY',         'PQ4L;Ue_ #eFwcVK!lce%P4[wv)Hd3HbP3XR;$I1kDVHu3s$%)>z2w9UZ$5_]Kj~' );
define( 'SECURE_AUTH_KEY',  'MxF<5<XM`n&c5)jz7r$N2b7jw)DBeAgT+^6A)d>JV1quXhC|EXGcc0$UkcMWte.=' );
define( 'LOGGED_IN_KEY',    'V>$k!gh{O#1L//TkOl7[N,|[*M^~2-<q=M/lvX*[]|LB16hUYPUAN#KBMv$a#goQ' );
define( 'NONCE_KEY',        '2Baa*f>0Imc222J^Z@q;Y~Wroea/<H7NLQ_LowkZA8nVSL^kFrh{1G)gjiY[G@k(' );
define( 'AUTH_SALT',        'wAG^M!8Np2(h5^e:Buu?o2U2PIDN9xm*e^CX}Ce6WJ5HUvADGn^W!h>9N2hs0Dqf' );
define( 'SECURE_AUTH_SALT', '.H;k,o9;q)/(6o>emwaZox6Ql%A9|Qb[Qp)GKedOSmO{fx4mY__ILI,US_VY>v_P' );
define( 'LOGGED_IN_SALT',   '4Y&b/b5HMNS]Hi^-i8wRu-fs`<cnK;(1)I[6+eXK>Ck `/VoPv][/~MA!06%x5)I' );
define( 'NONCE_SALT',       'LD4&.&dXeB;.$#Cwj$>W,Nl9qtwo-{>5&hLrrd7=(@z[(L#eVR+#gma`<5j,>A}C' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'b_of';

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
