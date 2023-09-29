<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @dump($myparams)

    <h1>Hello my little FINGER</h1>
    <p>
        <a>length={{$length}}</a><br>
        <a>width={{$width}}</a>
    </p>    

    <div class="people">
       
        <form action="/addHome" method="POST">
            @csrf
            <div class="form-finger">
                <label for="name">Название</label>
                <input type="text" class="form-name" name="title">
            </div>

            <div class="form-finger">
                <label for="length">Длинна</label>
                <input type="text" class="form-length" name="title">
            </div>

            <div class="form-finger">
                <label for="width">Ширина</label>
                <input type="text" class="form-length" name="title">
            </div>
        <button type="submin" class="btn btn-finger">Отправить</button>
            
        </form>

    </div>

</body>
</html>