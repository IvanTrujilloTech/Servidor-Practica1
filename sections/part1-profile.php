<?php
// Datos del perfil
$name = 'Iván';
$age = 20;
$position = 'Desarrollador Fullstack';
$salary = '2000€/mes';
$studies = [
    'CFGS Desarrollo Web',
    'CFGS Desarrollo Software',
    'Bachillerato Tecnologico'
];
$softskills = [
    'Trabajo en equipo',
    'Comunicación',
    'Resolución de problemas',
    'Pensamiento crítico',
    'Liderazgo'
];

?>

<main>
    <h2 class="profile-name">Hola, Bienvenido a tu perfil</h2>
    <p>Nombre: <?=$name?></p>
    <p>Edad: <?=$age?></p>
    <p>Puesto: <?=$position?></p>
    <p>Salario: <?=$salary?></p>
    <p>Estudios: <?=join(', ', $studies)?></p>
    <p>Softskills: <?=join(', ', $softskills)?></p>
</main>