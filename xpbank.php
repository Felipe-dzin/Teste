<?php 

/**
 * Plugin Name: Xpbank 
 * Plugin URI: https://example.com/plugins/the-basics/
 * Description: Um plugin criado para as aulas de Aplicativos para Web,  mais conhecido pela sigla de APW, na ETEC de Itanhaém
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Felipe-dzin & Sam9Santana
 * Author URI: https://zhengfeliped.epizy.com
 * 


*/

function cotar(){
	return file_get_contents(plugins_url().'/xpbank/cotacao.php');
}


add_shortcode("dolarRs","cotar");

 ?>