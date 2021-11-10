<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集画面</title>
</head>
<body>
    <h1>編集画面</h1>
    <form method="POST" action="{{route('crud.update')}}">
    @csrf

    <input type="hidden" name=id value="{{$id}}">

    <div>
        名前
        <input type="text" name=name value="{{$crud->name}}">
    </div>
    <div>
        電話番号
        <input type="text" name=phone value="{{$crud->phone}}">
    </div>
    <div>
        メールアドレス
        <input type="text" name=email value="{{$crud->email}}">
    </div>

    <input type="submit" value="更新する">
    </form>
    <form method="POST" action="{{route('crud.destroy',['id'=>$crud->id])}}">
        @csrf

        <button type="submit">削除</button>

    </form>

</body>
</html>