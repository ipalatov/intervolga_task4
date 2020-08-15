<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Test task 4 "Countries" for INTERVOLGA </title>
</head>

<body>
    <div>
        <p>
            <a href="<?= APP_MAIN ?>">Главная страница</a>
        </p>
        <p>
            <a href="<?= APP_ROOT ?>countries/index">Список стран</a>
        </p>
        <p>
            <a href="<?= APP_ROOT ?>countries/create">Добавить новую страну</a>
        </p>
    </div>

    <div>
        <?php echo $_SESSION['message'] ?? null;
        unset($_SESSION['message']); ?>
    </div>

    <div>
        <?php echo $_SESSION['error'] ?? null;
        unset($_SESSION['error']); ?>
    </div>

    <?php include 'views/' . $contentView; ?>
</body>

</html>