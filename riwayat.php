<?php

require 'function.php';

if (!isset($_SESSION["login"])) {
    header("Location: login_form.php");
}

$id_login = $_SESSION["login"];
$users = query("SELECT * FROM riwayat_perjalanan WHERE id_user='$id_login'");

$json = json_encode($users);
echo "
        <script>
            var text = $json 
        </script>
    ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/riwayat.css">
</head>

<body class="large-screen">
    <!-- <div class="wrap">
        <div class="btn-toolbar buttons">
            <div class="btn-group">
                <button id="desktop" class="btn btn-primary">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                    Desktop Table
                </button>
            </div>
            <div class="btn-group">
                <button id="mobile" class="btn btn-default">
                    <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                    Mobile Card List
                </button>
            </div>
        </div> -->
    <div class="table-wrapper">
        <table class="table-responsive card-list-table">
            <thead>
                <tr>
                    <th>Column #1</th>
                    <th>Column #2</th>
                    <th>Column #3</th>
                    <th>Column #4</th>
                    <th>Column #5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
                <tr>
                    <td data-title="Column #1">Value #1</td>
                    <td data-title="Column #2">Value #2</td>
                    <td data-title="Column #3">Value #3</td>
                    <td data-title="Column #4">Value #4</td>
                    <td data-title="Column #5">Value #5</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
   
    <script src="JS/riwayat.js"></script>
</body>

</html>