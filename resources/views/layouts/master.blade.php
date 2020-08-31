<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>Siterush</title>
</head>
<body>
    
    @section('menu')
        <div class='container-fluid mb-3'>
            <div class="row">
                <nav class='mainmenu col-12'>
                    <ul class='nav nav-pills nav-fill'>
                        <li class='nav-item'>
                            <a href="{{url('about')}}" class="nav-link {{$page === 'About' ? 'active' : ''}}">About</a>
                        </li>
                        <li class='nav-item'>
                            <a href="{{url('service')}}" class="nav-link {{$page === 'Service' ? 'active' : ''}}">Service</a>
                        </li>
                        <li class='nav-item'>
                            <a href="{{url('training')}}" class="nav-link {{$page === 'Training' ? 'active' : ''}}">Training</a>
                        </li>
                        <li class='nav-item'>
                            <a href="{{url('admin/create')}}" class="nav-link {{$page === 'Admin' ? 'active' : ''}}">Admin</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    @show

    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('content')
            </div>
        </div>
    </div>

    @section('footer')
        <div class='container-fluid bg-primary mt-5 py-3 footer'>
            <div class='row'>
                <div class='col-12 text-center'>
                    Footer 2020
                </div>
            </div>
        </div>
    @show




<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    

</body>
</html>