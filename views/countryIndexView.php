<h1>Список стран</h1>

<div>
    <table>
        <tr>
            <td>
                <span>Полное наименование</span>
            </td>
            <td>
                <span>Сокращенное наименование</span>
            </td>
            <td>
                <span>Население</span>
            </td>
        </tr>

        <?php foreach ($countries as $country) : ?>
            <tr>
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
    </table>

</div>