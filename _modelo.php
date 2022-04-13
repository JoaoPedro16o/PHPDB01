<?php

/**
 * Arquivo que faz a configuração incial da página.
 * Por exemplo, conecta-se ao banco de dados.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');


/**
 *Variável que define o título desta página
 *Referências:
 * → https://www.w3schools.com/php/php_variables.asp
 * → https://www.php.net/manual/pt_BR/language.variables.basics.php
 * → https://www.php.net/manual/pt_BR/language.variables.superglobals.php
 */
    $title = "Quem tem fome tem pressa...";
    //inclui o cabeçalo da página e se de erro vai para o programa.
    require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

    //inclui o cabeçalo da página e se de erro vai continuar o programa.
/**
 *Inclui o cabeçalho da página 
 *Referências:
 * → https://www.w3schools.com/php/php_includes.asp
 * → https://www.php.net/manual/pt_BR/function.include.php
 * → https://www.php.net/manual/pt_BR/language.variables.superglobals.php
 */
    //include('_header.php');

?>    
<section>
<h2>Título da pagina</h2>   
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, iste aliquam aperiam voluptatem molestias nemo odit unde modi cupiditate exercitationem doloremque quaerat soluta rerum quidem dignissimos officiis sapiente, aut alias!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, iste aliquam aperiam voluptatem molestias nemo odit unde modi cupiditate exercitationem doloremque quaerat soluta rerum quidem dignissimos officiis sapiente, aut alias!</p>

</section>

<aside>

<h3>Lateral</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, iste aliqu</p>

</aside>

<?php

    //inclui o rodapé da página e se de erro vai para o programa.
    require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');

    
    //inclui o rodapé da página e se de erro vai continuar o programa.
    //include('_header.php')

?>