<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    
            <div class="row">
                <div class="col-sm-1">
                    @include('includes.sidebar')
                </div>
        <div class="col-sm-11">
            
                @yield('content')
            
        </div>
    </div>
    

    @include('includes.footer')
</body>
</html>