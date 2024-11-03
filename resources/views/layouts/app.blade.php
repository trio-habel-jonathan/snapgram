<!DOCTYPE html>
<html lang="en">
<head>
    <title>Snapgram</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('albums.index')}}">Albums</a></li>
        <li><a href="{{route('photos.create')}}">Upload</a></li>
        <li><a href="{{route('profile.index')}}">Profile</a></li>
        </ul>
    @yield('content')
</body>
</html>