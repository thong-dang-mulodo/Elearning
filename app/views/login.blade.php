

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Elastic Login Form</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>

<!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
    <div class="profile">
        <button class="profile__avatar" id="toggleProfile">
            <img src="https://pbs.twimg.com/profile_images/554631714970955776/uzPxPPtr.jpeg" alt="Avatar" />
        </button>
        <div class="profile__form">
            <div class="profile__fields">

                {{ Form::open(array('url' => 'login')) }}
                <p>
                {{ $errors->first('username') }}
                {{ $errors->first('password') }}
                </p>

                <div class="field">
                    {{--<input type="text" id="fieldUser" class="input" required pattern=.*\S.* />--}}
                    {{ Form::label('username', 'user name', array('class' => 'label')) }}
                    {{ Form::text('username', Input::old('username'), array('class' => 'input')) }}
                    {{--<label for="fieldUser" class="label">Username</label>--}}
                </div>
                <div class="field">
                    {{ Form::label('password', 'Password', array('class' => 'label')) }}
                    {{ Form::password('password' , array('class' => 'input')) }}
                    {{--<input type="password" id="fieldPassword" class="input" required pattern=.*\S.* />--}}
                    {{--<label for="fieldPassword" class="label">Password</label>--}}

                </div>
                <div class="profile__footer">
                    {{--<button class="btn">Login</button>--}}
                    {{ Form::submit('Submit!', array('class' => 'btn')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>

{{--<script src="js/index.js"></script>--}}
{{ HTML::script('js/index.js') }}
</body>
</html>

