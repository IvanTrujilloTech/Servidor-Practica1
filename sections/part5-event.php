<?php
// cargo el archivo json con los eventos
$eventsJson = 'assets/json/events.json';
if (file_exists($eventsJson)) {
    $eventsJson = file_get_contents($eventsJson);
    $events = json_decode($eventsJson, true);
}

// calculo el precio total de cada evento
foreach ($events as &$event) {
    $event['total_price'] = $event['inscription_price'] + $event['main_price'];
}

// ordeno los eventos por precio total de mayor a menor
usort($events, function($a, $b) {
    return $b['total_price'] <=> $a['total_price'];
});
// muestro los eventos en la pagina
?>
<header>
 <link rel="stylesheet" href="assets/css/events.css">
    <h1 style="text-align: center" >Upcoming Events</h1>
</header>
<div class="events-container">

    <div class="events-grid">
        <?php // recorro cada evento para mostrarlo
        foreach ($events as $event): ?>
            <div class="event-card">
                <h3 class="event-name"><?php echo htmlspecialchars($event['event_name']); ?></h3>

                <div class="event-prices">
                    <div class="price-item">
                        <span class="price-label">Inscription Price:</span>
                        <span class="price-value inscription"><?php echo number_format($event['inscription_price'], 2, ',', '.'); ?>€</span>
                    </div>

                    <div class="price-item">
                        <span class="price-label">Main Price:</span>
                        <span class="price-value main"><?php echo number_format($event['main_price'], 2, ',', '.'); ?>€</span>
                    </div>

                    <div class="price-item total">
                        <span class="price-label">Total Price:</span>
                        <span class="price-value total"><?php echo number_format($event['total_price'], 2, ',', '.'); ?>€</span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>