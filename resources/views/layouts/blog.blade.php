<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kuadobox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Link css tự style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- link css font-face -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- link css font-face -->
    <link rel="stylesheet" type="text/css" href="css/time.css">
    <!-- Link css tự style -->
     <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <!-- Link thư viện jquery -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
</head>


<body>
   
    @include('layouts.blog-header')
    <main>
    @include('layouts.blog-sidebar_left')
    <div class="col-md-6">
            @yield('content')
    </div>
    @include('layouts.blog-sidebar_right')
    </main>
    @include('layouts.footer')
</body>

</html>