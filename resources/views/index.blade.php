<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
    <title>Home - Classmates</title>
</head>
<body>
    <div class="box">
        <!--Header Start-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

            <!-- Navbar content -->
            <div class="container header">
                <a class="navbar-brand" href="#">Classmates</a>

                <div class="d-flex">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-2">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aboutus">About Us</a>
                        </li>
                    </ul>

                </div>

            </div>

        </nav>
        <!--Header End-->

        <!--Body Start-->
        
        <div class="content flex-grow-1">
            {{-- <img src="https://picsum.photos/id/237/320/240" alt="" /> --}}

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 web d-flex justify-content-center flex-column align-items-center">
                        <h1 class="wtitle">Classmates</h1>
                        <p class="wdesc">homeplace for nerds</p>
                    </div>
        
                    <div class="col-md-6 form d-flex justify-content-center flex-column align-items-center signupcont">
                        <h1 class="wtitle mb-5 notsel">Sign Up</h1>
                        <form id="notsel" class="">
                            <div class="input-group mb-3">
                              <input type="text" id="gfn" class="form-control" placeholder="First Name">
                              <input type="text" id="gln" class="form-control" placeholder="Second Name">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" id="gm" class="form-control" placeholder="Mobile Number or Email Address">
                            </div>
                            <div class="input-group mb-3">							
                                <input type="text" class="form-control" placeholder="New Password">
                            </div>
        
                            <label for="dob" id="gbd" class="form-label">Date of Birth</label>
                            <div class="input-group mb-3">						
                                <input type="date" id="gdb">
                            </div>
        
                            <label class="form-label">Gender</label>
                            <div class="input-group mb-3">
                                <label class="radio-inline" id="gg">
                                    <input type="radio" id="ggm" value="Male" name="gender">Male</input>
                                    <input type="radio" id="ggf" value="Female" name="gender">Female</input>
                                </label>
                            </div>
                            <a href="#scroll"><input type="text" onclick="feedvals()" name="" class="btn btn-primary button" value="Sign Up"></a>
                            <button class="loginbtn" id="loginbtn"><a href="#">Already have an account? Click here to Sign in</a></button>
                        </form>
                    </div>

                    <div class="col-md-6 form d-flex justify-content-center flex-column align-items-center signincont d-none">
                        <h1 class="wtitle mb-5 notsel1">Sign In</h1>
                        <form id="notsel1">
                            <div class="input-group mb-3">
                                <input type="text" id="gm" class="form-control" placeholder="Mobile Number or Email Address">
                            </div>
                            <div class="input-group mb-3">							
                                <input type="password" class="form-control" placeholder="Enter Password">
                            </div>

                            <a href="/programs"><input type="text" onclick="feedvals()" name="" class="btn btn-primary button" value="Sign In"></a>
                            <button class="loginbtn" id="signupbtn"><a href="#">Don't have an account? Click here to Sign Up</a></button>
                        </form>
                    </div>
                    
                </div>
            </div>

        </div>

        <!--Body End-->

        {{-- <div class="footer">
            <h2>FOOTER</h2>
        </div> --}}

    </div>

    <script src="{{ asset('js/script.js')}}">

    </script>
</body>
</html>