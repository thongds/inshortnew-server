<html >
<head>
    <meta charset="UTF-8">
    <title>shortnews admin page</title>



    {{--<link rel="stylesheet" href="css/style.css">--}}
    <link href={{ URL::asset('css/style-login.css') }} rel="stylesheet">

</head>

<body>

<form>
    <header>Login</header>
    <label>Username <span>*</span></label>
    <input/>
    <div class="help">At least 6 character</div>
    <label>Password <span>*</span></label>
    <input/>
    <div class="help">Use upper and lowercase lettes as well</div>
    <button>Login</button>
</form>


</body>
</html>