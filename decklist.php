<?php
    $decklist = jsonTalker::retrieveDeckList(DECKLIST_NAME);

    if(empty($decklist)){
        echo '<span>the decklist is empty</span>'.'<hr>';
        die;
    }

    include_once('cardForView.php');
?>

<html>
    <h2>Decklist : <?= DECKLIST_NAME ?> (<?= count($decklist) ?>)</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Color</th>
                <th>Types</th>
                <th>Subtype</th>
                <th>Stats</th>
                <th>Artist</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($decklist as $card) {
            echo '<tr>';
            echo '<td>'.$card->name.'</td>';
            echo '<td>'.cardForView::renderColor($card).'</td>';
            echo '<td>'.cardForView::renderType($card).'</td>';
            echo '<td>'.$card->subtype.'</td>';
            echo '<td>'.cardForView::renderStats($card).'</td>';
            echo '<td>'.$card->artist.'</td>';
            echo '</tr>';
            }
        ?>
        </tbody>
    </table>
</html>
