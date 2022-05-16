<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/profile.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer> </script>
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <script type="text/javascript" src="{{ URL::asset('js/profile.js') }}"></script></head>
<body>
    {{$profileContent}}
    <script src="{{asset('js/profile.js')}}"></script>
    <script src="{{asset('js/pPUpload.js')}}"></script>
    <script src="{{asset('js/cPUpload.js')}}"></script>
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
    @if(session()->has('fail'))
        <div 
            x-data="{show:true}"
            x-init = "setTimeout(()=>show = false,3000)"
            x-show="show"
            style="position:fixed;background-color:red;padding: 3px 10px;bottom:10px;right:10px;color:white;border-radius:10px;font-size:16px"
        >
            <p>{{session('fail')}}</p>
        </div>

    @endif
</body>
</html>