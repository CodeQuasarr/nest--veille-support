<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Veille NestJS!</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ::-webkit-scrollbar {
            width: 13px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #b2505c;
            background-image: linear-gradient(315deg, #b2505c 0%, #f1ecec 74%);
            border-radius: 6px;
        }

        .left {
            height: 100vh;
            background-color: #f5f5f5;
        }

        .right {
            min-height: 1000vh;
            background-color: white;
        }


        footer {
            background: #ccc;
            position: absolute;
            bottom: 0;
            width: 100%;
            padding-top: 50px;
            height: 50px;
        }


        .next-text-color {
            color: #E0234E !important;
            font-weight: bold;
        }

        h1 {
            color: #E0234E !important;
        }

        .title {
            font-family: "Titillium Web", sans-serif;
            font-size: 28px;
            color: #e7e8f2;
        }

        pre[class*=language-] {
            padding: 0 30px 26px;
            margin: 35px 0;
            overflow: auto;
            border: 0;
        }

        .keyword {
            color: #E0234E !important;
        }

        .punctuation {
            color: #fce83b !important;
        }

        .string {
            color: #0ef334 !important;
        }

        .paragraph {
            color: #b5b5bd !important;
        }

        li h2 a {
            margin-left: 50px;
            color: #b5b5bd !important;
            font-size: 14px;
            font-family: "Titillium Web", sans-serif;
            transition: all 0.5 ease;
        }

        li h2 a:hover {
            margin-left: 70px;
            color: #E0234E !important;
            transition: all 0.5 ease;
        }
    </style>
</head>

<body class="position relative">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
    </svg>
    <div class="container-fluid d-flex flew-wrap align-items-stresh p-0 m-0 position relative">
        <?= $contents ?>

    </div>
    <footer class="bg-dark py-5 text-white d-flex align-items-center justify-content-center">
        <span>© 2021 Daré Samuel ANYARONKE, Tous droits réservés.</span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js "></script>
</body>

</html>