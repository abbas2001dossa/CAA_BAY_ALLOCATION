<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Grid Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .row {
            border: 1px solid black;
            margin-bottom: 5px;
        }

        .col {
            border: 1px solid gray;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Generating the rows and columns dynamically
        for ($i = 1; $i <= 10; $i++) {
            echo '<div class="row">';
            for ($j = 1; $j <= 24; $j++) {
                echo '<div class="col">Row ' . $i . ', Col ' . $j . '</div>';
            }
            echo '</div>';
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>