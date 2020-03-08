<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="{!! asset('css/style.css') !!}" />
        <style rel="stylesheet">
            body {
                width: 100vw;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                background: url("{!! asset('images/background.jpg'); !!}");
            }
        </style>
    </head>
    <body>
        <div class="card">
            <div class="card-image"></div>
            <div class="card-text">
                <span class="date">4 days ago</span>
                <h2>Post One</h2>
                <p>Tempor deserunt incididunt sit elit ea mollit nulla ut dolore nisi quis commodo nostrud. Laborum fugiat anim aliqua ipsum ad fugiat excepteur eiusmod ex.</p>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">
                        4<sup>m</sup>
                    </div>
                    <div class="type">
                        read
                    </div>
                </div>
                <div class="stat border">
                    <div class="value">
                        5123
                    </div>
                    <div class="type">
                        views
                    </div>
                </div>
                <div class="stat">
                    <div class="value">
                        32
                    </div>
                    <div class="type">
                        comments
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
