<table border="1">
        <thead>
            <tr>
            <th>Id</th>
                <th>Name</th>
                <th>Attack</th>
                <th>Life</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($characters as $character): ?>
                <tr>
                <td><?php echo $character['id']; ?></td>
                    <td><?php echo $character['name']; ?></td>
                    <td><?php echo $character['atk']; ?></td>
                    <td><?php echo $character['life']; ?></td>
                    <td><?php echo $character['color']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>