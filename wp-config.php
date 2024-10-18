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
define('DB_NAME', 'wp_curso');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '1W]4=c (j*r2G@Xw!u`$]kaq2=1ym$Bf?[{{LL~=d;%;[O m|0pzy=2QX7Fd9fiF');
define('SECURE_AUTH_KEY',  '62Q9_C9aLlzR9`XVK`)pZ?!po{6X  OA3Vuw:Z6cmt8gtneBR^Wk<&@,c]BvSY{s');
define('LOGGED_IN_KEY',    '1ac6@n[<7<71n <?$,yMh-:bm5v/& `S0NjqWii|!~4]^B;}IK5o}<;YA*B*WckR');
define('NONCE_KEY',        '?a.AyPR?N4A^[yV%:FhGqS1`1G+D|Y9RNu8)>FLgEZ^?6;v6I;D)&d#xsW`3^^zm');
define('AUTH_SALT',        'n%NN7*k97=*khQ{D,@A2&@rLEgrMD%)M em e9!~h2Cl6TjMprhwnI_s=p[8AsCe');
define('SECURE_AUTH_SALT', 'ZGC^>?XYKcdnz5D2 ugrV/>/=3i:WFy(K/(jrEJ(`@MOHQW]Vlqhyw7xLp(qzo@3');
define('LOGGED_IN_SALT',   'RqK/ETcmye.+@~N_+7%KTK9K[CgjZ|2eCUC~y^OIvo-Kr<&I!Sf`&w:$h;rv>$%P');
define('NONCE_SALT',       'RT<`pu|CO,j%7<W;-QV49=]SqwH:y;JnhU uoD)DX,zxdJTOQj17PjEYZ4o;)#O4');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'bd_';

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
define('WP_DEBUG', true);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
