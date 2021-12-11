<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Brand</th>
                <th scope="col">Jumlah</th>
                <th scope="col">status device</th>
            </tr>
        </thead>
        <tbody class="table-success">
            <?php
            foreach ($monitoring as $listItem) {
            ?>
                <tr>
                    <?php
                    foreach ($listItem as $item) {
                    ?>
                        <td><?= $item ?></td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>