<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
    <h1>会員登録画面</h1>

<div class="container">
  <div class="row">
  <form method="POST" action="{{ route('crud.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
  <label for="name" class="form-label">名前</label>
  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
  @error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="mb-3">
  <label for="phone" class="form-label">電話番号</label>
  <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone">
  @error('phone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
  <div class="mb-3">
    <label for="email" class="form-label">メールアドレス</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">
    @error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</body>
</html>