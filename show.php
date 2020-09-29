<?php
    include __DIR__."/partials/templates/header.php";
    include __DIR__."/partials/show/server.php";

 ?>

<body>

    <ul class="list-group">
        <li class="list-group-item">ID: <?php echo $row["id"]; ?></li>
        <li class="list-group-item">Numero della stanza: </li>
        <li class="list-group-item">Piano: </li>
        <li class="list-group-item">Numero di letti: </li>
    </ul>

</body>
</html>
