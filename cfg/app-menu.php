<?php
/*
 * Fichero de menú de la aplicación
 */
//echo('<pre>');
// print_r(\zfx\Config::getInstance());
// die;

$menu = \zfx\Config::get('admMenu');



// Grupo Cuenta. Aquí uno puede cambiar su contraseña, salir, etc.
$pofemenu = array(
    'es'       => array('Menú', '<i class="fas fa-user"></i> '),
    'sections' => array(
        'pofemenu-tablas' => array(
            'es'          => array('Tablas', '<i class="fas fa-wrench"></i> '),
            'subsections' => array(
                'pofemenu-tablas-usuarios' => array(
                    'es'         => array('Usuarios', '<i class="fas fa-user"></i>'),
                    'controller' => 'usuarios',
                    'perm'       => '|',
                )
            )
        ),
    )
);


$menu['pofemenu'] = $pofemenu;





$cfg['appMenu'] = $menu;