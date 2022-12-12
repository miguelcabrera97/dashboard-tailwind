<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{route('publicar')}}" method="post">
    @csrf
    <input type="hidden" value="{{$sitioId}}" name="sitioId">
    <input type="submit" id="btn" onmouseover="mifuncion()">
</form>
<script>
    window.addEventListener("load",function mifuncion(){
        document.getElementById("btn").click();
    })

</script>


</body>
</html>
