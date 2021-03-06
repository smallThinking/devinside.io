<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tools/button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/layout.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }}</title>

  </head>
  <body class="text-center">
    <form class="form-signin" action="{{ route('login') }}" method="POST">
      @csrf
      <h1 class="display-2 mb-4">환영합니다.</h1>
      <hr/>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
      <div class="errors">
        @if ($errors->has('email'))
          <p>{{$errors->first('email')}}</p>
        @endif
        @if ($errors->has('password'))
          <p>{{$errors->first('password')}}</p>
        @endif
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">로그인</button>
      <hr />
      <h1 class="h4 mb-3 font-weight-normal">아직 회원이 아니신가요?</h1>
      <a class="btn btn-link btn-block" href="{{ route('register') }}">회원가입 페이지로</a>
      <p class="mt-5 mb-3 text-muted">JEONG Copyright© 2018.09.28 ~ </p>
    </form>
  </body>
</html>