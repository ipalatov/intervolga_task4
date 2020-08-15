<h3>Список стран</h3>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    <span>#</span>
                </th>
                <th scope="col">
                    <span>Полное наименование</span>
                </th>
                <th scope="col">
                    <span>Сокращенное наименование</span>
                </th>
                <th scope="col">
                    <span>Население</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($countries as $key => $country) : ?>
                <tr>
                    <th scope="row"><?= $key + 1 ?></th>
                    <td>
                        <span><?= htmlspecialchars($country['name']) ?></span>
                    </td>
                    <td>
                        <span><?= htmlspecialchars($country['abb_name']) ?></span>
                    </td>
                    <td>
                        <span><?= htmlspecialchars($country['population']) ?></span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>