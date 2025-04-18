<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top ">
        <div class="container-fluid">
          <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">R<span style="color:red;">@</span>J Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="#">Rooms</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                  </li>
                  <li class="nav-item me-2">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link me-2" href="about.php">About Us</a>
                  </li>
                </ul>
            <div class="d-flex">

            
              <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginmodal">
                    Login
                  </button> 
                  <button type="button" class="btn btn-primary me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#registermodel">
                    Register
                  </button>    
            </div>
        </div>
       
      </nav>

       <!-- Modal Login -->
          <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form>
                    <div class="modal-header ">
                        <h5 class="modal-title d-flex align-items-center" id="staticBackdropLabel"><i class="bi bi-person-circle fs-3 me-2"></i>User Login </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div> 
                      <div class="modal-body">
                        <div class="mb-3">
                          <label  class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                          <div class="d-flex align-items-center justify-content-between mb-2">
                            <button class="btn btn-dark" type="submit" class="btn btn-primary">LOGIN</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a> 
                        </div>
                      </div>
                    </form>
                </div>
              </div>
          </div>
   
              <!-- Modal Register -->
    <div class="modal fade" id="registermodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>

              <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                <i class="bi bi-person-lines-fill fs-3 me-2 "></i> User Registration
                </h5>
                <button type="reset " class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body"> 

                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                    Note:Your Detail must match with your ID (Aadhaar card , PAN card , Passport , Driving Lisence , etc)
                    tjat will be required during check-in.
                  </span>
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-6 ps-0 mb-3">
                            <label  class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 p-0 mb-3">
                            <label  class="form-label">Email </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 ps-0 mb-3">
                            <label  class="form-label">Phone Number</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 p-0 mb-3">
                            <label  class="form-label">Picture </label>
                            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-12 p-0 mb-3">
                            <label  class="form-label">Address </label>
                            <textarea class="form-control" rows="1"></textarea>
                          </div>
                          <div class="col-md-6 ps-0 mb-3">
                            <label  class="form-label">Pincode</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 p-0 mb-3">
                            <label  class="form-label">Date of Birth </label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 ps-0 mb-3">
                            <label  class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="col-md-6 p-0 mb-3">
                            <label  class="form-label">Confirm Password </label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="text-center"> 
                            <button class="btn btn-dark" type="submit" class="btn btn-primary">Register</button>
                          </div>  
                  </div>   
                </div>
              </div>
              </form>
             </div>
        </div>
    </div> 