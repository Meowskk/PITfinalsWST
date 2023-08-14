<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="meow.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style>
        .mybg{
    background-color: #023020;

}
.bg2{
    background-color: teal;
}
.bg3{
    background-color: beige;
}
    </style>
    @csrf
    <section class="">
        <div class="">
            <nav class="navbar mybg ">
                <div class="container">
                    <a class="navbar-brand text-light">meowNect</a>
                    <ul class="nav justify-content-center">

                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">about us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">ADMIN</a>
                        </li>

                      </ul>

                </div>
            </nav>

        </div>





    </section>
    <section class=" bg2 text-light p-5">
        <div>
          <p class="card-text">Embrace the meowness</p>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrationModal">Join the meow</button>
        </div>
        <div class=" text-center fs-1 fw-bold">
          <p class="text-uppercase">the meownistrators</p>
          <p class="text-center fs-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore excepturi ipsum architecto culpa quae, perspiciatis ipsam pariatur laboriosam adipisci repudiandae esse possimus dolore quo quod doloremque veritatis aperiam vel? Aspernatur.</p>
          </div>
        <div class="container row ">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top rounded-circle p-5" src="{{URL('storage/image/1p.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top rounded-circle p-5" src="{{URL('storage/image/2p.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top rounded-circle p-5" src="{{URL('storage/image/3p.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top rounded-circle p-5" src="{{URL('storage/image/4p.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

        </div>



      </section>
      <!--rgstr-->
      <section>
        @csrf
        <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="registrationModalLabel">Join the meow</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter a password" required>
                  </div>
                  <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" required>
                      <option value="" disabled selected>Select your gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="birthdate" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="birthdate" required>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Join Now</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <nav class="navbar mybg ">
          <div class="container justify-content-center">

              <ul class="nav justify-content-center">

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">about us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ADMIN</a>
                  </li>

                </ul>

          </div>
      </nav>

      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
