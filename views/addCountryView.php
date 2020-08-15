<h1>Добавление новой страны</h1>

<div>
    <form method="POST" action="">
        <label for="name">Полное наименование</label>
        <input id="name" type="text" name="name" value="<?= $_SESSION['name'] ?? null ?>"><br>

        <label for="abb_name">Сокращенное наименование (не более 3 симв)</label>
        <input id="abb_name" type="text" name="abb_name" value="<?= $_SESSION['abb_name'] ?? null ?>"><br>

        <label for="population">Население</label>
        <input id="population" type="number" name="population" value="<?= $_SESSION['population'] ?? null ?>"><br>

        <p><input type="submit" name="submit" value="Добавить"> <input type="submit" name="clear" value="Очистить"></p>
    </form>
</div>