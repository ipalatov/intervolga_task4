<h3>Добавление новой страны</h3>

<div class="container card">
    <form method="POST" action="">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="name">Полное наименование</label>
                <input class="form-control" id="name" type="text" name="name" value="<?= $_SESSION['name'] ?? null ?>"><br>
            </div>
            <div class="form-group col-md-4">
                <label for="abb_name">Сокращенное наименование</label>
                <input class="form-control" aria-describedby="abb_name_help" id="abb_name" type="text" name="abb_name" value="<?= $_SESSION['abb_name'] ?? null ?>">
                <small id="abb_name_help" class="form-text text-muted">(не более 3 симв)</small>
            </div>
            <div class="form-group col-md-4">
                <label for="population">Население</label>
                <input class="form-control" id="population" type="number" name="population" value="<?= $_SESSION['population'] ?? null ?>"><br>
            </div>
        </div>


        <p><input class="btn btn-primary" type="submit" name="submit" value="Добавить">
            <input class="btn btn-secondary" type="submit" name="clear" value="Очистить"></p>
    </form>
</div>