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
                            <a class="nav-link active" href="/">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Header End-->

        <div class="container">
            <div class="row">
                <div class="col-md-12 posts">
                    <div class="container">
                        <h3 class="text-center">Contribute</h3>
                        <div class="line"></div>

                        <br>

                        <div class="mb-3 forminp">
                            <label for="inputTitle" class="form-label"><b>Materials Name</b></label>
                            <input type="text" class="form-control" id="inputTitle" placeholder="Enter Material Name">
                        </div>

                        <div class="mb-3 forminp">
                            <label for="formFile" class="form-label"><b>Attach study materials</b></label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <button class="btn btn-primary addmtrl">Add Materials</button>
                        <br><br>

                    </div>

                    <h3 class="">Recently Shared</h3>

                    <div class="post">
                        <p><b>Sayyab</b></p>
                        <p class="d-inline">Bootstrap Slides</p>
                        <p class=""><b><a href="#">Download Now</a></b></p>
                    </div>

                    <div class="post">
                        <p><b>Imran</b></p>
                        <p class="d-inline">Data Communication and Computer Networks Handouts</p>
                        <p class=""><b><a href="#">Download Now</a></b></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>