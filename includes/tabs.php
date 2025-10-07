
<div class="tabs">
    <!--añado el primer tab como activo para que cuando abrimos la pagina siempre aparezca en perfil-->
	<button class="tab-link active" data-tab="profile">Perfil</button>
	<button class="tab-link" data-tab="music">Música</button>
	<button class="tab-link" data-tab="movies">Películas</button>
	<button class="tab-link" data-tab="menu">Menú</button>
	<button class="tab-link" data-tab="event">Evento</button>
	<button class="tab-link" data-tab="travel">Viajes</button>
</div>
<div id="profile" class="tab-content active">
	<?php include __DIR__ . '/../sections/part1-profile.php'; ?>
</div>
<div id="music" class="tab-content">
	<?php include __DIR__ . '/../sections/part2-music.php'; ?>
</div>
<div id="movies" class="tab-content">
	<?php include __DIR__ . '/../sections/part3-movies.php'; ?>
</div>
<div id="menu" class="tab-content">
	<?php include __DIR__ . '/../sections/part4-menu.php'; ?>
</div>
<div id="event" class="tab-content">
	<?php include __DIR__ . '/../sections/part5-event.php'; ?>
</div>
<div id="travel" class="tab-content">
	<?php include __DIR__ . '/../sections/part6-travel.php'; ?>
</div>