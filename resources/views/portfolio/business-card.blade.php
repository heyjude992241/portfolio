<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie-edge" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link
      rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"
    />
        <link href="{!! asset('css/business.css') !!}" rel="stylesheet" />
        <title>Hafiz Portfolio</title>
    </head>
    <body>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-front">
                    <div class="left">
                        <img src="{!! asset('images/logofull.png') !!}" alt="comp logo" />
                        <h4><span>Web </span>Design</h4>
                    </div>
                    <div class="right">
                        <div class="person right-content">
                            <i class="fas fa-user-tie"></i>
                            <div>
                                <h4>John Smith</h4>
                                <p>Web Design</p>
                            </div>
                        </div>
                        <div class="phone right-content">
                            <i class="fas fa-phone"></i>
                            <div>
                                <p>+(60) 14-8376989</p>
                                <p>+(6011) 5634-5184</p>
                            </div>
                        </div>
                        <div class="email right-content">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <p>mhafizudden3@gmail.com</p>
                            </div>
                        </div>
                        <div class="address right-content">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <p>Main street</p>
                                <p>Putrajaya</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-back">
                    <img src="{!! asset('images/logofull.png') !!}" alt="company logo">
                </div>
            </div>
        </div>
    </body>
</html>
