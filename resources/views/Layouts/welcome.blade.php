<!DOCTYPE html>
<html>
    <head>
        <title>Pueblo PTO</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 150px;
            }
            p {
                font-family: serif;
                font-size: 34px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Welcome to Pueblo PTO</div>
                <p>Today is {{ date('M d, Y') }}</p>

            </div>
        </div>
    </body>
</html>
