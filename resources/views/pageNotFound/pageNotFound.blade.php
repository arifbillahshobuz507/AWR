<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Page Not Found</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;500;700&family=Montserrat:wght@500&family=Space+Mono:ital,wght@0,400;0,700;1,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            background-color: #262626;
            font-family: "Space Mono", monospace;
            font-size: 16px;
        }

        h1 {
            font-family: "Inconsolata", monospace;
            color: #ff6600;
            font-size: 2em;
            padding: 1em 5em;
            transition: transform 0.7s ease;
        }

        h1:hover {
            color: #ffdb58;
            transform: scale(1.05);
        }

        main {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            height: 80vh;
            align-items: center;
        }

        .side {
            width: 50%;
            display: flex;
            flex-direction: column;
            padding-left: 2.9em;
        }

        .pic {
            justify-content: center;
            display: flex;
        }

        img {
            width: 67%;
            margin: 2em;
            transition: transform 0.7s ease;
        }

        img:hover {
            transform: scale(1.05);
        }

        h2 {
            font-family: "Space Mono", monospace;
            font-weight: bold;
            font-size: 5em;
            line-height: 1em;
            letter-spacing: -0.035em;
            color: #ffdb58;
            transition: transform 0.7s ease;
        }

        h2:hover {
            transform: scale(1.05);
            color: #ff6600;
        }

        p {
            font-family: "Space Mono", monospace;
            font-size: 1.5em;
            line-height: 36px;
            color: #ccc5b9;
            padding: 36px 10px 64px 0;
        }

        button {
            color: #fff;
            font-family: "Space Mono", monospace;
            background-color: #44496f;
            border-radius: 5px;
            border: none;
            width: 13.5em;
            height: 4.2em;
            transition: transform 0.7s ease;
        }

        button:hover {
            background-color: #ff6600;
            cursor: pointer;
            transform: scale(1.2);
        }

        footer {
            padding: 35px;
        }

        h6, a {
            color: #bdbdbd;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-size: 14px;
        }

        a:hover {
            color: #ff6d5b;
        }

        @media only screen and (max-width: 670px) {
            body {
                height: 100vh;
            }

            main {
                flex-direction: column;
                justify-content: space-around;
            }

            h1 {
                font-size: 1.5em;
                padding: 1.25em 2em;
            }

            h2 {
                font-size: 2em;
                line-height: 1.5;
            }

            .side {
                width: 100%;
                padding: 1.5em;
            }

            p {
                font-size: 1em;
                padding-right: 0.75em;
            }

            img {
                width: 43%;
                margin: 0 auto;
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>PAGE NOT FOUND</h1>
</header>

<main>
    <div class="pic">
        <img src="https://images.unsplash.com/photo-1589254066007-898d52d910d3?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0NDMyMTM1NA&ixlib=rb-1.2.1&q=80&w=400" alt="404 image">
    </div>

    <div class="side">
        <h2>404 SORRY!</h2>
        <p>The Page you're looking for might be removed or is temporarily unavailable.</p>

        <button id="myButton">GO BACK</button>
    </div>
</main>

<footer>
    <h6>
        created by
        <a href="https://github.com/saramazal" target="_blank">saramazal</a> | 2022
    </h6>
</footer>

<script>
    document.getElementById("myButton").onclick = function () {
        window.history.back();
    };
</script>

</body>
</html>
