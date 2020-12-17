
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax dischi</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body>

    <!-- Database -->
    <?php 
    include __DIR__ . '/partials/database.php';
    ?>

    <!-- Header -->
    <?php 
    include __DIR__ . '/partials/header.php';
    ?>

    <!-- Main -->
    <?php 
    include __DIR__ . '/partials/main.php';
    ?>

    <!-- Js -->
    <script> src="./dist/js/main.js"</script>
</body>
</html>