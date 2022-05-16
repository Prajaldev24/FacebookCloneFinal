<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer> </script>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <link href="/css/app.css" rel="stylesheet"/>
    <title>Facebook Clone</title>
</head>
<body>
    {{$content}}
    <script src="{{asset('js/homepage.js')}}"></script>
    <script src="{{asset('js/imagePreview.js')}}"></script>
    @if(session()->has('success'))
        <div 
            x-data="{show:true}"
            x-init = "setTimeout(()=>show = false,3000)"
            x-show="show"
            style="position:fixed;background-color:teal;padding: 3px 10px;bottom:10px;right:10px;color:white;border-radius:10px;font-size:16px"
        >
            <p>{{session('success')}}</p>
        </div>

    @endif
</body>
</html>