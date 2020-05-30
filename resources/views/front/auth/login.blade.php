<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fd0a85f20e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: Nunito;
            /* background:url(https://wallpaperplay.com/walls/full/7/8/c/228173.jpg); */
            background:url(https://wallup.net/wp-content/uploads/2018/09/25/615925-Tom_Haugomat-forest-squirrel-illustration-sky_blue-yellow_flower-trees.jpg);
            background-repeat: repeat-y;
            background-size: cover;
        }
        .form-control{
            background: #E8FBFD;
            border-radius: 10px;
            font-style: normal;
            font-weight: bold;
            font-size: 15px;
            line-height: 33px;
            letter-spacing: 0.15em;
            border:none;
            color:black;
        }
        .form-control::placeholder{
            color: rgba(0, 0, 0, 0.5);
        }
        .registerhref{
            font-style: normal;
            font-weight: bold;
            font-size: 15px;
            line-height: 25px;
            letter-spacing: 0.15em;

            color: #000000;
        }
        .registerhref:hover{
            text-decoration: none;
        }   
        .containerlogin{
            background-color: #fafafa;
            border-radius: 20px;
            margin-top: 3%;
        }
        .is-invalid{
            border: 1px solid #dc3545!important;
        }
        @media (min-width: 990px){
            .formlogin{
                margin-top: 10%!important;
            }
        }
    </style>
    <script src="lottie.js"></script>
    
</head>
<body>
    <div id="anim">

    </div>
    <div class="container-lg containerlogin">
        <!-- <a href="https://www.freepik.com/free-photos-vectors/design">Design vector created by stories - www.freepik.com</a>max-width: 608px; -->
        <div class="row pt-5" style="margin:0;">
            <div class="container col-lg-6" id="loginAnimation" style="padding:0;">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_ZXsep1.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
            </div>
            <div class="container formlogin col-lg-6 p-5" style="margin:auto;">
            @if (Session::has('msg'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Welcome to XYPC, {{session('msg')}}</h4>
                    <p>Your account has been succesfully created!</p>
                </div>
            @endif

            @if (Session::has('cart'))
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">{{session('cart')}}</h4>
                </div>
            @endif
                
                <form action="/loginPost" method="post">
                    @csrf   
                    <div class="form-group">
                        <label for="formGroupExampleInput"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror @error('message') is-invalid @enderror" id="formGroupExampleInput" value="{{ old('email')}}" placeholder="Please Input your Email">
                        <div class="invalid-feedback">
                            @error('email') {{$message}} @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror @error('message') is-invalid @enderror" id="formGroupExampleInput2" value="{{ old('password')}}" placeholder="Please Input your Password">
                        <div class="invalid-feedback">
                            @error('password') {{$message}} @enderror
                        </div>
                    </div>
                    @error('message')
                        <div class="alert alert-danger">
                            {{$message}} <i class="fas fa-exclamation-circle"></i>
                        </div>
                    @endif
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary mt-2" style="letter-spacing: 0.25em;border-radius: 20px;">Submit</button>
                    </div>
                    <div style="text-align: center;margin-top: 5%;">   
                        <a class="registerhref" href="register" style="margin-top: 2%;">Don't have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>  
    
    <script>
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('https://assets5.lottiefiles.com/private_files/lf30_5u6A5U.json'),
                
            // Set your ID to something that you'll associate with the animation you're using //
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'ss.json'
                
            // Make sure your path has the same filename as your animated     SVG's JSON file //
        })
    </script>
</body>
</html>