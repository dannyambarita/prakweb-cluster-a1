<!DOCTYPE html>
<html>

<head>
    <title>Add</title>
</head>

<body>
    <form method="post" action="<?= base_url('add2/tambah') ?>">
        <table>
            <tr>
                <td align="center" colspan="2">Tambah Artikel</td>
            <tr>
                <td>
                    <textarea name="artikel" id="artikel" style="height: 100px; width: 500px;"></textarea>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <button type="submit">SUBMIT</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>