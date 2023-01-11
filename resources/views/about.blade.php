<?php
    $testo = "lorem ipsum dolor sit amet, consectet adip id est laborum, sed diam euismod erat, sed diam voluptua sed diam vol uptiver diam et just as lobort inc habitant morbi tristique senectus et netus et malesu immediate possible. ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <nav>
            <ul>
                
                <li>
                    <a id="home" href="/">Home</a>
                </li>
                <li>
                    <a id="about" href="/about">About</a>
                </li>
                
            </ul>
        </nav>
        <div>
            <p>{{$testo}}</p>
        </div>

    </main>
</body>
</html>

<style lang="scss">
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        background-color: lightgray;
        width: 100%;
        height: 100vh;
        padding: 10vh 0;
    }

    main{
        width: 60%;
        margin: auto;
    }

    ul{
        list-style: none;
        display: flex;
        gap: 30px;
        justify-content: center;
    }

    ul a{
        font-size: 23px;
        text-decoration: none;
        color: black;
        font-weight: bold;
    }
    #home{
        text-decoration: underline;;
        color: black;
    }

    #about{
        color: grey;
        cursor: default;
    }

    div{
        margin-top: 50px;
        font-size: 30px;
        text-align: center;
    }
</style>