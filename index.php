<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <?php include 'includes/tabs.php'; ?>
        <?php include 'includes/footer.php'; ?>
                <script src="assets/js/tabs.js"></script>
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var titles = {profile:'Perfil',music:'Musica',movies:'Películas',menu:'Menú',event:'Evento',travel:'Viajes'};
                            document.title = titles.profile;
                            document.querySelectorAll('.tab-link').forEach(function(btn){
                                btn.addEventListener('click',function(){
                                    document.title = titles[this.dataset.tab]||document.title;
                                });
                            });
                        });
                </script>
    </main>
</body>
</html>
