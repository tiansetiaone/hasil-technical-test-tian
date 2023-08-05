<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BERITA TERKINI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" type="text/css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Quicksand:wght@600&family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    
</head>
<style>
*, body, html {
    margin: 0;
    padding: 0;
}
body {
    background-color: rgba(13, 9, 52, 0.694);
}
footer{
    width: 100%;
    height: 60px;
    position: fixed;
    bottom: 20px;
    z-index: 1;
    border-top: 5px solid gold;
    }
footer .container-fluid{
    display: flex;
}
footer .container-fluid strong{
    color: white;
}
footer .container-fluid .title-foot{
    color: yellow;
    margin-right: auto;
}
.container {
    margin-bottom: 50px;
}
.card-body .image{
margin: auto;
width: 100%;
background-color:cornflowerblue;
padding: 20px; 
border-radius: 6px;
}
.card-body .image img{
    width: 100%;
    border: 1px solid red;
    border-bottom: 3px solid #6c757d;
    border-radius: 3px;
}
h1 {
    padding-bottom: 20px;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 8rem;
    color: rgb(255, 247, 0);

}
.card-header {
    background-color: crimson;
    color: white;
}
.card {
    padding-bottom: 1rem; 
    margin-bottom: 5rem;
    border-bottom: 1rem solid rgb(53, 50, 50);
    background-color: rgb(253, 255, 251);
}
h3 {
    font-family: 'Signika Negative', sans-serif;
}
p {
    margin-bottom: 5rem;
    margin-top: 1rem;
}
.blockquote-footer{
    margin-top: 1rem;
}
hr {
    color: white;
}
.container-fluid .navbar-brand:hover {
    transform: rotate(3deg);
}
.container-fluid ul li a{
    transition: all .5s ease 0s;
}
.container-fluid ul li a:hover {
    color: red;
    transform: rotate(3deg);
}
.navnav {
    margin-right: auto;
}

@media screen and (max-width:460px) {
.navnav {
    margin-right: auto;
}
}
</style>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>
