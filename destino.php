<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" />
    <title>Manipulação de Arrays com PHP</title>
    <style>
        body {
            background: linear-gradient(135deg, #87ceeb, #003366);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            background-color: #003366;
        }

        .title {
            text-align: center;
            font-size: 1.8rem;
            color: #FFD700;
            margin-bottom: 15px;
        }

        .array-section {
            margin: 15px 0;
            padding: 10px;
            border-radius: 8px;
        }

        .default { background-color: #28a745; }
        .push { background-color: #17a2b8; }
        .pop { background-color: #dc3545; }
        .fill { background-color: #ffc107; }
        .shift { background-color: #fd7e14; }
        .reverse { background-color: #6f42c1; }

        img.material-symbols-outlined {
            width: 32px;
            height: 32px;
        }

        .icon-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            padding: 5px 0;
        }
    </style>
</head>
<body>

<div class="container text-center">
    <div class="title">Manipulação de Arrays com PHP</div>
    
    <div class="array-section default">
        <h3>Array sem alterações:</h3>
        <div class="icon-group">
            <?php
                $imgs = [
                    "<img class='material-symbols-outlined' src='imgs/img1.png'>",
                    "<img class='material-symbols-outlined' src='imgs/img2.png'>",
                    "<img class='material-symbols-outlined' src='imgs/img3.png'>",
                    "<img class='material-symbols-outlined' src='imgs/img4.png'>",
                    "<img class='material-symbols-outlined' src='imgs/img5.png'>"
                ];

                function mostrarImagens($imgs) {
                    $min_index = min(array_keys($imgs));
                    $max_index = max(array_keys($imgs));

                    for ($i = $min_index; $i <= $max_index; $i++) {
                        if (isset($imgs[$i])) {
                            echo $imgs[$i];
                        }
                    }
                }

                mostrarImagens($imgs);
            ?>
        </div>
    </div>

    <div class="array-section push">
        <h3>Array com PUSH:</h3>
        <div class="icon-group">
            <?php
                array_push($imgs, "<img class='material-symbols-outlined' src='imgs/img6.png'>");
                mostrarImagens($imgs);
            ?>
        </div>
    </div>

    <div class="array-section pop">
        <h3>Array com POP:</h3>
        <div>
            <?php
                $pop_array = array_pop($imgs);
                echo "<p>O último valor removido foi: " . $pop_array . "</p>";
                echo '<div class="icon-group">';
                mostrarImagens($imgs);
                echo '</div>';
            ?>
        </div>
    </div>

    <div class="array-section fill">
        <h3>Array com FILL:</h3>
        <div class="icon-group">
            <?php
                $fill_array = array_fill(5, 5, "<img class='material-symbols-outlined' src='imgs/img7.png'>");
                mostrarImagens($fill_array);
            ?>
        </div>
    </div>

    <div class="array-section shift">
        <h3>Array com SHIFT:</h3>
        <div>
            <?php
                $shift_array = array_shift($imgs);
                echo "<p>O primeiro valor removido foi: " . $shift_array . "</p>";
                echo '<div class="icon-group">';
                mostrarImagens($imgs);
                echo '</div>';
            ?>
        </div>
    </div>

    <div class="array-section reverse">
        <h3>Array com REVERSE:</h3>
        <div class="icon-group">
            <?php
                $reverse_array = array_reverse($imgs);
                mostrarImagens($reverse_array);
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
