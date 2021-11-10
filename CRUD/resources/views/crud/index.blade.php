<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員一覧画面</title>
</head>
<body>
    <h1>会員一覧情報</h1>
    <a href="../crud/create">>>登録</a>
    <!-- 表の作成 -->
    <table border="1">
        <tr>
            <!--　表のタイトルたち -->
            <th>名前</th>
            <th>電話番号</th>
            <th>メールアドレス</th>
            <th> </th>
        </tr>
        <!--　$crudを配列の数だけループさせる、$crudにはデータベースのデータが入ってる -->
        @foreach($crud as $item)<!--　$crudのデータのレコードが最大になるまでループ -->
        <tr>
            <!--　$itemはレコードのインデックス番号を指定、 -->
            <td>{{$item->name}}</td><!--　インデックス番号0番目のnameカラムの値取得 -->
            <td>{{$item->phone}}</td><!--　インデックス番号0番目のphoneカラムの値取得 -->
            <td>{{$item->email}}</td><!--　インデックス番号0番目のemailカラムの値取得 -->
            <!-- 編集画面へ遷移 -->
            <td><a href="/crud/edit/{{$item->id}}">>>編集</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>