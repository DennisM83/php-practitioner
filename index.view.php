<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <?php if ($task->completed): ?>
                    <s><?=$task->description;?></s>
                <?php else: ?>
                    <?=$task->description;?>
                <?php endif;?>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>
