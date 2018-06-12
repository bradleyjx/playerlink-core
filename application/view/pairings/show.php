<h1 class="font-weight-light">Pairings</h1>
<h4 class="font-weight-light"><?= $information_row[0] ?> - Round <?= $information_row[1] ?></h4>

<table class="table table-sm tablesorter">
    <thead>
    <tr>
        <th scope="col" class="text-center">Tbl</th>
        <th scope="col">Player</th>
        <th scope="col" class="text-center">Pts</th>
        <th scope="col">Opponent</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($player_rows as $player_row) : ?>
    <tr>
        <td class="text-center"><?= $player_row[7] ?></th>
        <td><?= $player_row[1] ?></td>
        <td class="text-center"><?= $player_row[3] ?></td>
        <td><?= $player_row[8] ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>