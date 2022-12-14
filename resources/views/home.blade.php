<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        .menu {
            width: 100%;
            height: 80px;
            background-color: #9c9c01;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav {
            margin-left: 3rem;
        }

        ul {
            list-style: none;
            display: flex;

        }

        a {
            text-decoration: none;
            color: black;
            font-weight: 500;
            margin-right: 1rem;
        }

        h3 {
            color: black;
            font-weight: 800;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>{{ $pageTitle }}, {{ $info }}</h3>
        <div class="nav">
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="{{ route($link['coll']) }}">
                            {{ $link['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>

</html>
