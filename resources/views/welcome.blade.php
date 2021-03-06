<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ki-tuna</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gothic+A1:500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sunflower:500" rel="stylesheet"> <!-- realtime 재고잔고 설명 폰트 -->
        <link href="https://fonts.googleapis.com/css?family=Dosis:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet"> <!-- 숫자 폰트 -->
        <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    </head>
    <body>
        <div data-app>
            <div id="app"> 
                
            </div>
        </div>
         <script>

            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
          </script>
        <script src="{{asset('js/app.js')}}"></script>
        
        <script src="//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>
        <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
    </body>
</html>