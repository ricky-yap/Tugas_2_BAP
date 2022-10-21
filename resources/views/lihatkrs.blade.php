


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KRS - Ricky Yap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a href="/" style="width: 20%;"><img style="width: 70%;" class="navbar-brand" src="signature.png" ></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="/#about-section" class="nav-link"><span>About Me</span></a></li>
	          <li class="nav-item"><a href="experiences" class="nav-link"><span>Experiences</span></a></li>
	          <li class="nav-item"><a href="awards" class="nav-link"><span>Awards</span></a></li>
            <li class="nav-item"><a href="lihatKRS" class="nav-link"><span>Lihat KRS</span></a></li>
	          <li class="nav-item"><a href="contact" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>





    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    	<div class="container">
            <table style="width: 300px;">
                <tr>
                  <td>Nama</td>
                  <td><?php
                    $nama = DB::table('vmhs_term')
                    ->where('STUDENTID', '03081200006')
                    ->value('NAMA');
            
                    echo "<td>".$nama."</td>";
                    ?>  </td>
                </tr>
                <tr>
                    <td>Student ID</td>
                    <td><?php
                        $studentID = DB::table('vmhs_term')
                        ->where('STUDENTID', '03081200006')
                        ->value('STUDENTID');
                
                        echo "<td>".$studentID."</td>";
                        ?>  </td>
                </tr>
                <tr>
                    <td>Term</td>
                    <td><?php
                        $term = DB::table('vmhs_term')
                        ->where('STUDENTID', '03081200006')
                        ->value('kode_term');
                
                        echo "<td>".$term."</td>";
                        ?>  </td>
                </tr>
                <tr>
                    <td>Total SKS</td>
                    <td><?php

                        $total=0;
                        $id=1;
                        while($id<6){                    
                            $temp = $total + DB::table('vmhs_matkul')->where('STUDENTID', '03081200006')->value('sks');
                            $total = $temp;
                            $id++;
                        }
                        echo "<td>".$total."</td>";
                        ?>  </td>
                </tr>
            </table>
            <br>
            
            <h2>Matakuliah yang di ambil</h2>
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Matakuliah</th>
                    <th scope="col">Nama Matakuliah</th>
                    <th scope="col">SKS</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $result = DB::table('VMHS_MATKUL')
                            ->where('STUDENTID', '03081200006')
                            ->get();   
                        
                            $totalSKS = 0;

                        for ($x = 0; $x <= count($result) - 1; $x++) {
                            $row = $result[$x];
                            $number = $x + 1;

                            

                            $json = json_decode(json_encode($row), true);
                            $totalSKS+=$json['sks'];
                            echo "<tr>";
                            echo "<td>".$number."</td>";                        
                            echo "<td>".$json['kode_matakuliah']."</td>";
                            echo "<td>".$json['nama_matakuliah']."</td>";
                            echo "<td>".$json['sks']."</td>";
                            echo "<td style='text-align:center'></td>";
                            echo "</tr>";
                        } 
                    ?>
                </tbody>
              </table>
        
              




    	</div>
    </section>

    
		
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>I am an undergraduate student majoring in <strong>Information Systems</strong> in UPH Medan Campus. <br> Passionate in the world of design.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                {{-- <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li> --}}
                {{-- <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li> --}}
                <li class="ftco-animate"><a href="https://www.instagram.com/yap.ricky/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Go To</h2>
              <ul class="list-unstyled">
                <li><a href="/">Home</a></li>
                <li><a href="/#about-section">About</a></li>
                <li><a href="experiences">Experiences</a></li>
                <li><a href="awards">Awards</a></li>
                <li><a href="contact">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Any Inquiries?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">UPH Medan Lippo Plaza Campus</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 811 656 8868</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ricky.yap@icloud.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div> --}}
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>