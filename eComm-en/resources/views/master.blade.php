<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Onilne Cart</title>

    <!-- Latest compiled and minified CSS -->
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        background-color: #333;
        margin-left: 350px;
        padding: 0px 100px;
        width: 800px ;
        height: 400px !important;
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        width: 120px;
        height: 100px;
    }
    .trening-item{
        margin: 5px;
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        width: 50%;
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;

    }
    footer{
    background-color: #333;
    
    padding: 10px;
}
.footer-nav{
    list-style: none;
    float: left;
    font-size: 70%;
}

.social-links{
    list-style: none;
    float: right;
}

.footer-nav  li,
.social-links li{
    display: inline-block;
    margin-right: 30px;
}
.footer-nav  li:last-child,
.social-links li:last-child{
    margin: 0;
}

.footer-nav li a:link,
.footer-nav li a:visited,
.social-links li a:link,
.social-links li a:visited{
    text-decoration: none;
    border: 0;
    color: #888;
    -webkit-transition: color 0.2s;
    transition: color 0.2s;
    
}

.footer-nav li a:hover,
.footer-nav li a:active{
    color: #ddd;
}





footer p{
    color: #888;
    text-align: center;
    font-size: 70%;
    margin-top: 30px;

}


</style>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>