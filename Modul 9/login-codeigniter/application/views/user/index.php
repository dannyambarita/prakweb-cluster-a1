<html>

<head>
    <title>User PABW</title>
</head>

<body>
    <table border="0" cellpadding="10" cellspacing="1" width="100%">
        <tr>
            <td align="center">User Dashboard</td>
        </tr>
        <tr>
            <td>
                Selamat datang
                <?php
                $name = $this->session->userdata('username');
                echo "$name";
                ?>,
                Klik disini untuk <a href="<?= base_url('user/logout'); ?>" tite="Logout">Logout.
            </td>
        <tr>
            <td>

                Role Anda :
                <?php
                if ($user['role'] == 1) {
                ?><a href="<?= base_url('Admin/index'); ?>">admin</a>;
                <?php
                } else {
                ?><a href="<?= base_url('Usera/index'); ?>">user</a>;
                <?php
                } ?>
            </td>
        </tr>
        </tr>

    </table>
</body>

</html>