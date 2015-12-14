<?php
require $_SERVER['DOCUMENT_ROOT'].'/filmibaas/controller/search.php';

if (count($film) > 0): ?>
    <table>
        <thead>
        <tr>
            <th><?php echo implode('</th><th>', array_keys(current($film))); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($film as $row): array_map('htmlentities', $row); ?>
            <tr>
                <td><?php echo implode('</td><td>', $row); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif;