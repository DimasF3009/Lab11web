<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    *{
        padding:0px;
        margin:0px;
    }
    nav{
        background-color: black;
    }
    #navigasi li {
        list-style: none;
        padding: 20px;
        align-items: center;
    }
    #navigasi li a{
        color:white;
        text-decoration: none;
    }
    #navigasi a:hover {
        color: red;
    }
</style>
<body>

    <nav class="navbar">
        <div id="navigasi" class="d-flex">
            <li>
                <a href="home.php">Beranda</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="module/index.php">Artikel</a>
            </li>
        </div>
    </nav>