<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name') }} | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">
        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="body bg-gray">
                    <div class="form-group has-error">
                        <input type="text" name="mobile" class="form-control" placeholder="Mobile No." value="{{ old('mobile') }}" />
                        @if($errors->has('mobile'))
                        <span class="help-block" style="margin-left: 10px;">
                            {{ $errors->first('mobile') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group has-error">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        @if($errors->has('password'))
                        <span class="help-block" style="margin-left: 10px;">
                            {{ $errors->first('password') }}
                        </span>
                        @endif
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}/> Remember me
                    </div>
                </div>
                <div class="footer">                                                   
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>
                </div>
            </form>
        </div>
        
        <script src="{{ asset('js/theme.js') }}"></script>       

    </body>
</html>