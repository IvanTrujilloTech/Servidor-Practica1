<?php
$jsonContent = file_get_contents('assets/json/viajes.json');
$viajes = json_decode($jsonContent, true);
?>
<link rel="stylesheet" href="assets/css/viajes.css">
<div class="travel-container">
    <h1>Mis Próximos Viajes</h1>

    <div class="travel-grid">
        <?php foreach ($viajes as $viaje): ?>
            <div class="travel-card">
                <div class="travel-header">
                    <h2><?php echo htmlspecialchars($viaje['destino']); ?></h2>
                    <span class="travel-type <?php echo htmlspecialchars($viaje['tipo']); ?>">
                        <?php echo htmlspecialchars($viaje['tipo']); ?>
                    </span>
                </div>

                <div class="travel-info">
                    <p class="country"><strong>País:</strong> <?php echo htmlspecialchars($viaje['pais']); ?></p>
                    <p class="duration"><strong>Duración:</strong> <?php echo htmlspecialchars($viaje['dias']); ?> días</p>
                    <p class="price"><strong>Precio:</strong> €<?php echo htmlspecialchars($viaje['precio']); ?></p>
                    <p class="dates">
                        <strong>Fechas:</strong>
                        <?php echo date('d/m/Y', strtotime($viaje['fecha_salida'])); ?> -
                        <?php echo date('d/m/Y', strtotime($viaje['fecha_regreso'])); ?>
                    </p>
                </div>

                <div class="travel-description">
                    <p><?php echo htmlspecialchars($viaje['descripcion']); ?></p>
                </div>

                <div class="travel-activities">
                    <h3>Actividades planeadas:</h3>
                    <ul>
                        <?php foreach ($viaje['actividades'] as $actividad): ?>
                            <li><?php echo htmlspecialchars($actividad); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="travel-footer">
                    <button class="btn-reservar">Reservar viaje</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>