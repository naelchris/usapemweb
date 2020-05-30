<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fd0a85f20e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: Nunito;
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
                margin-top: 1%!important;
            }
        }
    </style>
    <script src="lottie.js"></script>
    
</head>
<body>
    <div class="container-lg containerlogin">
        <!-- <a href="https://www.freepik.com/free-photos-vectors/design">Design vector created by stories - www.freepik.com</a>max-width: 608px; -->
        <div class="row" style="margin:0;">
            <div class="container formlogin col-lg-8 p-5" style="margin:auto;">
                <form action="/registerPost" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput"><i class="fas fa-user"></i> Name</label>
                        <input name="name" value="{{old('name')}}" type="text" class="form-control @error('name') is-invalid @enderror" id="formGroupExampleInput" placeholder="Harry Potter">
                        <div class="invalid-feedback">
                            @error('name') {{$message}} @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput"><i class="fas fa-birthday-cake"></i> Birthdate</label>
                        <input name="birthdate" value="{{old('birthdate')}}" placeholder="31 July, 1980" class="form-control @error('birthdate') is-invalid @enderror" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="formGroupExampleInput" />
                        <div class="invalid-feedback">
                            @error('birthdate') {{$message}} @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput"><i class="fas fa-house-user"></i> Address</label>
                        <input name="address" value="{{old('address')}}" type="text" class="form-control @error('address') is-invalid @enderror" id="formGroupExampleInput" placeholder="Godric's Hollow, West Country, England, Great Britain">
                        <div class="invalid-feedback">
                            @error('address') {{$message}} @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputGender">Gender</label>
                        <select name="gender" id="inputGender" class="form-control @error('gender') is-invalid @enderror">
                            <option value=1>Male</option>
                            <option value=2>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput"><i class="fas fa-envelope"></i> Email</label>
                      <input name="email" value="{{old('email')}}" type="text" class="form-control @error('email') is-invalid @enderror" id="formGroupExampleInput" placeholder="harrypotter@email.com">
                      <div class="invalid-feedback">
                            @error('email') {{$message}} @enderror
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2"><i class="fas fa-lock"></i> Password</label>
                      <input name="password" value="{{old('password')}}" type="password" class="form-control @error('password') is-invalid @enderror" id="formGroupExampleInput2" placeholder="********">
                      <div class="invalid-feedback">
                            @error('password') {{$message}} @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2"><i class="fas fa-lock"></i> Retype Your Password</label>
                        <input name="repassword" value="{{old('repassword')}}" type="password" class="form-control @error('repassword') is-invalid @enderror" id="formGroupExampleInput2" placeholder="********">
                        <div class="invalid-feedback">
                            @error('repassword') {{$message}} @enderror
                        </div>
                    </div>
                    @error('message')
                        <div class="alert alert-danger">
                            {{$message}} <i class="fas fa-exclamation-circle"></i>
                        </div>
                    @endif
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary mt-5" style="letter-spacing: 0.25em;border-radius: 20px;">Create Account</button>
                    </div>
                    <div style="text-align: center;margin-top: 5%;">   
                        <a class="registerhref" href="login" style="margin-top: 2%;">Already have an account?</a>
                    </div>
                </form>
            </div>
            <div class="container col-lg-4" id="loginAnimation" style="padding:0;height:500px;">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_RgEUpC.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
            </div>
        </div>
    </div> 
    <script>
        $(document).ready(function() {
            document.getElementById("inputGender").value = {{old('gender')}};
        });
</script>
</body>
</html>