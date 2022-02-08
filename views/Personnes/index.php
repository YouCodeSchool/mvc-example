<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des personnes</title>
</head>
<body>
    <?php foreach($personnes as $personne):?>
        <h2><?=$personne['nom']?></h2>
        <h3><?=$personne['cin']?></h3>
        <h4><?=$personne['id']?></h4>
    <?php endforeach;?>
</body>
</html>