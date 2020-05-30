<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    @include('front.layouts.css_js')
    <link rel="stylesheet" href="front_assets/editProfile/styleEditProfile.css">
</head>
<body>
    <script>
        $(function () {
            $("#profilephoto").change(function () {
                readURL(this);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    //alert(e.target.result);
                    $('#profilephotonow').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!-- <div class="imglogo" style="background-image: url('logo2.png');"></div> -->
    <div class="container-lg containerlogin">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-brand">
            <a href="/"><i class="fas fa-arrow-left"></i></a>
                <!-- XYPc -->
            </div>
        </nav>
        <div class="row pt-2" style="margin:0;">
            <div class="container col-lg-6" id="loginAnimation" style="padding:0;text-align:center;">
                <div class="inputimage">
                    <img src="uploads/{{Auth::guard('user')->user()->image}}" alt="" id="profilephotonow">
                </div>
                <br>
                <label for="profilephoto">
                    <form method="POST" enctype="multipart/form-data" action="/edit">
                        @csrf
                    <div class="form-group profilephotobutton p-4">
                        <span style="width: 100%;" aria-hidden="true" class="changeprofile">Change Profile Photo</span>
                    </div>
                    <input type="file" id="profilephoto" accept="image/png, image/jpeg, image/jpg" name="profilephoto" style="display:none">
                </label>
            </div>
            <div class="container formlogin col-lg-6 p-5" style="margin:auto;">
                <div class="form-group">
                    <label for="formGroupExampleInput"><i class="fas fa-user"></i> Name</label>
                    <input name="name" value="{{Auth::guard('user')->user()->name}}" type="text" class="form-control @error('name') is-invalid @enderror" id="formGroupExampleInput" placeholder="Harry Potter">
                    <div class="invalid-feedback">
                        @error('name') {{$message}} @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput"><i class="fas fa-birthday-cake"></i> Birthdate</label>
                    <input name="birthdate" value="{{Auth::guard('user')->user()->birthdate}}" placeholder="31 July, 1980" class="form-control @error('birthdate') is-invalid @enderror" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="formGroupExampleInput" />
                    <div class="invalid-feedback">
                        @error('birthdate') {{$message}} @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput"><i class="fas fa-house-user"></i> Address</label>
                    <input name="address" value="{{Auth::guard('user')->user()->address}}" type="text" class="form-control @error('address') is-invalid @enderror" id="formGroupExampleInput" placeholder="Godric's Hollow, West Country, England, Great Britain">
                    <div class="invalid-feedback">
                        @error('address') {{$message}} @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputGender">Gender</label>
                    <select name="gender" id="inputGender" class="form-control @error('gender') is-invalid @enderror">

                        

                        @if (Auth::guard('user')->user()->gender == 1)
                            <option value=1>Male</option>
                           <option value=2>Female</option>
                        @else
                            <option value=2>Female</option>
                            <option value=1>Male</option>
                        @endif

                    </select>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2"><i class="fas fa-lock"></i> Password</label>
                  <input name="password" value="" type="password" class="form-control @error('password') is-invalid @enderror" id="formGroupExampleInput2" placeholder="********">
                  <div class="invalid-feedback">
                        @error('password') {{$message}} @enderror
                    </div>
                </div>

                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary mt-2" style="letter-spacing: 0.25em;border-radius: 20px;">Submit</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div> 
</body>
</html>