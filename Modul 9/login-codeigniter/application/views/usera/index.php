<!DOCTYPE html>
<html>

<head>
    <title>User</title>
</head>

<body>
    <h1>Artikel</h1>
    <a href="<?= base_url('Add/index'); ?>">Add New Artikel</a><br /><br />
    <table width='80%' border=1>

        <tr>
            <th>No.</th>
            <th>Artikel</th>
            <th>Delete</th>
        </tr>
        <?php
        $i = 1;
        foreach ($artikel as $dt) : ?>
            <tr>
                <td><?php
                    echo  "$i" ?></td>
                <td>
                    <p><?= $dt['artikel']; ?></p>
                </td>
                <td>
                    <button type="button" style="background-color: black;">
                        <a href=" <?= base_url(); ?>Usera/hapus/<?= $dt['id']; ?>" style="color: white;">Delete</a></button>
                </td>
            </tr>

        <?php $i++;
        endforeach; ?>
    </table>
    <?php  ?>
    <br>
    <a href="<?= base_url('user/logout'); ?>" tite="Logout">Logout

</body>

</html>