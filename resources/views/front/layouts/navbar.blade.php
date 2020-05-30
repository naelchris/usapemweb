<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   
    
    <script src="https://kit.fontawesome.com/fd0a85f20e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: Nunito, sans-serif;
        }
        hr{
            border: 0;
            clear:both;
            width: 30%;               
            background-color:black;
            height: 1px;
        }
        .home_toptext{
            font-style: normal;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 49px;

            color: #3E3F43;
        }
        .home_bottomtext{
            font-style: normal;
            font-style: normal;
            font-weight: bold;
            font-size: 72px;
            line-height: 98px;

            color: #313235;

        }
        .containerhome{
            background-color: white;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .aboutUs_lefttext{
            font-style: normal;
            font-weight: bold;
            font-size: 36px;
            line-height: 49px;
            margin-left:5%;
        }
        .aboutUs_righttext{
            font-style: normal;
            font-weight: 800;
            font-size: 72px;
            line-height: 98px;
            text-align: right;
            margin-right:5%;

            color: rgba(34, 34, 34, 0.1);
        }
        .aboutUs_toptext{
            font-style: normal;
            font-size: 36px;
            line-height: 49px;

            color: #3E3F43;
        }
        .aboutUs_bottomtext{
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 33px;
        }
        .aboutUs2_toptext{
            font-style: normal;
            font-weight: 600;
            font-size: 36px;
            line-height: 49px;

            color: #000000;
        }
        .aboutUs2_bottomtext{
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 33px;

            color: #000000;

        }
        @media (max-width: 990px){
            .btnshopnow{
                width: 100%;
                margin-right: 0 !important;
                margin-top: 5% !important;
            }
            .p-5{
                padding:0!important;
            }
            .aboutUs_lefttext{
                font-size: 30px;
            }
            .aboutUs_righttext{
                font-size: 35px;
            }
            .home_bottomtext{
                line-height: 70px;
                font-size: 50px;
            }
        }
        .design1{
            position: absolute;
            width: 370px;
            height: 800px;
            right:0;
            border-bottom-left-radius: 100px;
            top: 0px;

            background: linear-gradient(180deg, #ACBEFF 0%, rgba(172, 190, 255, 0) 100%);
        }
        .design2{
            position: absolute;
            width: 278px;
            height: 388px;
            left: 117px;
            border-top-right-radius: 100px;
            border-bottom-left-radius: 100px;
            top: 873px;

            background: linear-gradient(89.48deg, #B8C7FF 4.43%, rgba(214, 222, 255, 0.583333) 49.25%, rgba(255, 255, 255, 0) 257.53%);
        }
        .products{
            /* width: 280px; */
            min-height: 400px;
            /* margin-left:4.17%;
            margin-right:4.16%; */
            /* border-top-right-radius: 100px; */
            /* border-bottom-left-radius: 100px; */
            background: #F9BDBD;
            /* padding:5%; */
            border-radius: 15px;
        }
        .producttext{
            font-style: normal;
            font-weight: 800;
            font-size: 24px;
            line-height: 33px;
            /* identical to box height */

            color: #3E3F43;
        }
        .btnshopnow{
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 25px;
            /* identical to box height */

            text-align: center;

            color: #3E3F43;
            border: 1px solid #3E3F43;
            box-sizing: border-box;
            border-radius: 4px;
            margin-top: 20%;
            float: right;
        }
        /* .ct1{
            background: #defcfc;
        }
        .ct2{
            background: #cbf1f5;
        } */
        .ct1{
            background: #C8E4FF;
        }
        .ct2{
            background: #B7FFFB;
        }
        .ct3{
            background: #A8DCEC;
        }
        .px{
            padding-left:5rem !important;
            padding-right:5rem !important;
        }
        .imagecategory{
            height: 180px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background: #EEF3FF;">
        <div class="container">
                 <a class="navbar-brand" href="#">navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categories">Categories</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/cart">Cart</a>
            </li>

            @if(Auth::guard('user')->check())
                <li class="nav-item">
                <a class="nav-link" href="/logout"> logout  </a>
                </li>
                
            @else
                <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
                </li>
            @endif
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
       
    </nav>
    <!-- https://assets3.lottiefiles.com/private_files/lf30_WdTEui.json -->
    @yield('content')
</body>
</html>