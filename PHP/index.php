<?php
// Defina os itens do menu com seus respectivos links
$items = array(
    1 => array(
        'title' => 'Página Inicial',
        'url' => 'index.php'
    ),
    2 => array(
        'title' => 'Página 1',
        'url' => 'pagina1.php'
    ),
    3 => array(
        'title' => 'Página 2',
        'url' => 'pagina2.php'
    ),
    4 => array(
        'title' => 'Página 3',
        'url' => 'pagina3.php'
    ),
    5 => array(
        'title' => 'Página 4',
        'url' => 'pagina4.php'
    ),
    6 => array(
        'title' => 'Página 5',
        'url' => 'pagina5.php'
    )
);

// Função para gerar o menu
function generateMenu($items) {
    $html = '<ul>';
    foreach ($items as $item) {
        $html .= '<li><a href="' . $item['url'] . '">' . $item['title'] . '</a></li>';
    }
    $html .= '</ul>';
    return $html;
}

// Exibe o menu
echo generateMenu($items);
?>