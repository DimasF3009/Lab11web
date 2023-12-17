<?php
    include_once('../class/database.php');

    $db = new Database();
    $result = $db->get('biodata');
?>

<html>
<head> </head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php if ($result):
            while ($row = $result ->fetch_object):?>
        <tr>
            <td><?=$row->Nim;?></td>
            <td><?=$row->Nama;?></td>
            <td><?=$row->Kelas;?></td>
        </tr>
        <?php endwhile; endif; ?>
    </table>
</body>
</html>