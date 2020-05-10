<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
        
        <!-- Styles -->
        <style>
            body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: calc(100vh - 55px); /* 55px = height of the navbar */
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .title {
                font-size: 84px;
            }
        </style>
    </head>
    <body>
        @include('includes.header')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Undercover
                </div>
            </div>
        </div>
    </body>
</html>
