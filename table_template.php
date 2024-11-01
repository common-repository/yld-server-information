<div class="wrap">
    <h2>Server info</h2>
    <table class= "widefat striped">
        <tbody id="the-list">
            <?php foreach ($info as $key => $value): ?>
                <tr>
                    <th> <?php echo $key ?> </th>
                    <td> <?php echo $value ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>