<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Book/Index')</title>
    <style>
        body {
            font-size: 16pt; 
            color: #999;
            margin: 50px;
        }
        h1 {
            font-size: 50pt; 
            text-align: center; 
            margin: -20px 0px -30px 0px;
            letter-spacing: -4px;
        }
        /* ul {
            font-size: 12pt;
        } */
        .content {
            padding-top: 80px;
            margin: 30px;
        }
        .footer {
            text-align: right;
            font-size: 10pt; 
            padding-top: 80px;
            margin: 10px; 
            border-bottom: solid 1px #ccc; 
            color: #ccc; 
        }
        
        th {
            background-color: #999; 
            color: fff; 
            padding: 5px 10px; 
        }

        td {
            border: solid 1px #aaa; 
            color: #999; 
            padding: 5px 10px; 
        }


    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    {{-- @section('menubar') --}}
    {{-- <h2 class="menutitle"></h2> --}}
        {{-- <ul>
            <li>@show</li>
        </ul> --}}
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
</body>
</html>