<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title id="title">... </title>
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top" onload="loadproject()">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Sorawit Wannasri</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../assets/img/profile.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Project</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Picture</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Github</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        My
                        <span class="text-primary">Project</span>
                    </h1>
                    <div class="subheading mb-5">
                        <a href="https://www.superresume.com/ViewResume?Key=Rdwkwz4l8YK7xNCCNIEiNkCI3&Enc=briddSU4fl4Dn0giLddocWgUTgWM" target="_blank"> My Resume </a> · (088) 785-8840 ·
                        <a href="mailto:sorawis.wan@northbkk.ac.th">sorawis.wan@northbkk.ac.th</a>
                    </div>
                    <p class="lead mb-5" ><h2 id="pjname"> Loading... </h2></p>
					<p class="lead mb-5" id="pjdescription"> </p>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Picture</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0" id="loadimg1"> Loadimage...</h3>
                            <div class="subheading mb-3" id="pjimg"> </div>
                            
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"> </span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Project in Github</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <p><h3 id="loadgithub">Loading file...</h3></p>
							<div id="github"> </div>
                            
                        </div>
                       
                    </div>
                </div>
            </section>
            <hr class="m-0" />
           
           
            <hr class="m-0" />
            
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
				<!-- The core Firebase JS SDK is always required and must be listed first -->
		<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>

		<!-- TODO: Add SDKs for Firebase products that you want to use
			 https://firebase.google.com/docs/web/setup#available-libraries -->
		<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-analytics.js"></script>
		
		<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-auth.js"></script>
		
		<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-firestore.js"></script>
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		<script>
		  // Your web app's Firebase configuration
		  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
		  var firebaseConfig = {
			apiKey: "AIzaSyDRnjUpDoiizc6Ph6jmoLIwqIpfhA9l7SY",
			authDomain: "sorawitwebsite.firebaseapp.com",
			databaseURL: "https://sorawitwebsite-default-rtdb.firebaseio.com",
			projectId: "sorawitwebsite",
			storageBucket: "sorawitwebsite.appspot.com",
			messagingSenderId: "720052418554",
			appId: "1:720052418554:web:a1801f53a691803ce69643",
			measurementId: "G-H14YC7QL0J"
		  };
		  // Initialize Firebase
		  firebase.initializeApp(firebaseConfig);
		  //firebase.analytics();
		</script>
		<script>
			function loadproject() {
				//firebase.auth().signInAnonymously();
				  var db = firebase.firestore();
				  var docRef = db.collection('project').doc('{{$id}}');
				  docRef.get().then(function(doc) {
                            $("#title").text(doc.data().topic);
							$("#pjname").text(doc.data().topic);
							$("#pjdescription").text(doc.data().content);
							$("#loadimg1").hide();
							$("#pjimg").prepend( '<center><img src="'+ doc.data().img1 +'" width="60%" height="20%" /></center>' );
							$("#loadgithub").hide();
							$("#github").append('<a href="'+ doc.data().files +'" target="_blank">'+ doc.data().files +'</a>');
						});
				  
			}
		</script>
    </body>
</html>
