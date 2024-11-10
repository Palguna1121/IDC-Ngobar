<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>

<body>
    <h1>Menampilkan user</h1>
    <a href="create.php">tambah data user</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>username</th>
            <th>password</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "connect.php";
        $stmt = $conn->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->get_result();
        $no = 1;
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['password'] ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
                    <a href="javascript:if(confirm('Apakah yakin menghapus data <?= $row['username'] ?>?')) window.location.href='delete.php?id=<?= $row['id'] ?>'">Hapus</a>
                </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
</body>

</html>