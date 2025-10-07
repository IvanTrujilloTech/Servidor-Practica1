<?php
$songs_json = 'assets/json/songs.json';
$songs_data = file_get_contents($songs_json);
$songs = json_decode($songs_data, true);

for ($i = 0; $i < count($songs); $i++) {
    for ($j = $i + 1; $j < count($songs); $j++) {
        if ($songs[$j]['listened_hours'] > $songs[$i]['listened_hours']) {
            $temp = $songs[$i];
            $songs[$i] = $songs[$j];
            $songs[$j] = $temp;
        }
    }
}
?>

<main>
    <link rel="stylesheet" href="assets/css/styles.css">
    <h2 style="text-align:center">Tu musica favorita</h2>
    <div class="music-chart">
        <p style="font-size:60px;">🎵</p>
        <h3>
            <?php
            $song_fav = $songs[0]['song_name'];
            $listened_hours = $songs[0]['listened_hours'] . " horas escuchadas";
            echo($song_fav);
            ?>
        </h3>
        <?php echo($listened_hours); ?>
        <p>My favourite song</p>
    </div>
    <div class="other_songs">
        <h3>Tus otras canciones escuchadas</h3>
        <ul>
            <?php
            for ($i = 1; $i < count($songs); $i++) {
            echo "<li>" . $songs[$i]['song_name'] . " - " . $songs[$i]['listened_hours'] . " horas escuchadas</li>";
            }
            ?>
        </ul>
</main>