<!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
     
        <link rel="stylesheet"type='text/css' href="assets/css/select2.min.css"  />
        
        <!--  CSS for DataTables-->
        <link rel="stylesheet"type='text/css' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  />
        <link rel="stylesheet"type='text/css' href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css"  />

        <script type="text/javascript" language="javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="assets/js/jquery.dataTables.js"></script>
    
        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>
        <!--  Light Bootstrap Table core CSS    -->
        <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />

    
        <!--  Fonts and icons-->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="assets/js/jquery-1.12.4.js"></script>

    </head>

    <body>
        <div class='container'>

            @yield('content')

        </div>

    </body>
            @yield('scripts')
</html>
