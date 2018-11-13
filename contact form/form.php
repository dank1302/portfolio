<?php include('form_process.php'); ?>
<!Doctype html>
<html lang="en-us">
    <head>
        <meta charset="UTF8">
        <title>Portfolio-Contact-Me</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
		 crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
		<!--bootstrap cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
         crossorigin="anonymous">

         </head>

         
         <body>
            <div class="parallax-container">
                
                    <div class="parallax">
                      <img src="assets/images/artImg2.jpg"></div>
                </div>
        <div>
                <nav class="nav-extended">
                    
                        <div class="nav-wrapper">
                            <h1 class="brand-logo">Daniel Kissiday</h1>
                        </div>
                   <div class="nav-content">
                          <ul class="tabs tabs-transparent">
                            <li class="tab"><a class="active" href="Projects.html">Projects</a></li>
                            <li class="tab"><a class="active" href="index.html">Home</a></li>
                          </ul>
                        </div>
                      </nav>
                    
                    
                            

        </div>

        <div class="jumbotron">
                <h2 class="display-4">Contact Me</h2>
                <hr class="my-4">
                <div class="container form-top">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                            <div class="panel panel-danger">
                                <div class="panel-body">
                                    <form id="reused_form" action="<?= $_SERVER['PHP_SELF']; ?>'" method="POST" enctype="text/plain">
                                         <div class="form-group">
                                             <label><i class="fa fa-user" aria-hidden="true"></i> Name</label>
                                             <input type="text" value="<?= $name ?>" name="name" class="form-control" placeholder="Enter Name">
                                             <span class="error"><?= $name_error ?></span>
                                            </div>
                                         <div class="form-group">
                                             <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                                             <input type="text" value="<?= $email ?>" name="email" class="form-control" placeholder="Enter Email">
                                             <span class="error"><?= $email_error ?></span>
                                            </div>
                                         <div class="form-group">
                                             <label><i class="fa fa-comment" aria-hidden="true"></i> Message</label>
                                             <textarea rows="3" name="message" class="form-control" placeholder="Type Your Message"></textarea>
                                        </div>
            
            
                                         <div class="form-group">
                                             <button class="btn btn-raised btn-block btn-danger">Send →</button>
                                         </div>
                                    </form>
                                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                                    <h4>Error</h4>
                                    Sorry there was an error sending your form.
                                    </div>
                                    <div id="success_message" style="width:100%; height:100%; display:none; ">
                                    <h2>Success! Your Message was Sent Successfully.</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
              </div>

            <!--  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->


            
            
            
              <footer class="page-footer">
                
                  <div class="row" id="leftFoot">
                    <div class="col l6 s12">
                      <h5 class="white-text">Daniel Kissiday Portfolio</h5>
                      <p class="grey-text text-lighten-4">Web Designer, Front-End Developer</p>
                    </div>
                  
                </div>
                <div class="footer-copyright">
                  
                  <ul class="nav nav-bar" id="icons">
                      <li class="nav-item">
                        <a class="nav-link" href="https://github.com/dank1302">
                          <i class="fab fa-github-square fa-3x fa-spin"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/daniel-kissiday-a36370124/">
                          <i class="fab fa-linkedin fa-3x fa-spin"></i>
                        </a>
                      </li>
                    </ul>
                    <p class="copyright">
                        © 2018 Copyright
                             </p>
                  
                </div>
              </footer>
      
        








        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
       <!--Materialize-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
       <!--app.js-->
       <script src="assets/js/app.js"></script>
     