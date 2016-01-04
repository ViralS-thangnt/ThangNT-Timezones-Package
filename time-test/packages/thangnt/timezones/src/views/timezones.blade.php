<html>
    <head>
        <title>Laravel Timezones</title>
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
                font-size: 96px;
            }
        </style>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" id="timezone">{{ $current_time }}</div>
            </div>
        </div>

        <script type="text/javascript">

            $(document).ready(function () {
                var time = $("#timezone");
                window.setInterval(function () {
                    datetime = new Date();
                    time[0].textContent = datetime.getFullYear() + ' : ' + (datetime.getMonth() + 1) + ' : ' + datetime.getDate() + ' \n' +
                                            datetime.getHours() + ' : ' + datetime.getMinutes() + ' : ' + datetime.getSeconds();

                }, 1000);

            });

        </script>
    </body>


</html>