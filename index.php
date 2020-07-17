
<?php
$conn = mysqli_connect('localhost', 'linda', 'test1234','animal-language-translator' );
//  $date = date_format('Y-m-d h:i:s', );
if(!$conn){
    die('connection error: ' . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = "INSERT INTO `language-translator`(`id`, `email`, `created_at`) VALUES ('','".$_POST['email']."','')";
    if(mysqli_query($conn, $sql)){
        die('Email captured');
    }else{
        die('Erro capturing mail');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Translator</title>
    <style>

    </style>
</head>

<body>


    <header class="container-fluid shadow-sm pb-2">
        <nav class="navbar nav-top navbar-expand-md navbar-light">
            <a class="navbar-brand" href="#">
                <p class="pet">Pet Translator</p>
                <i class="fa fa-paw fa-2x dog-print ml-5"></i>
            </a>

            <button style="background-color: #0239C0;" class="navbar-toggler collapsed" type="button"
                data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link px-4 font-weight-bold" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 font-weight-bold" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 font-weight-bold" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        
                        <button class="btn px-4 font-weight-bold mx-3 my-2 my-sm-0 text-white rounded" type="submit"
                            style="background-color: #0239C0;">
                            Request Early Access
                        </button>

                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="row d-flex justify-content-between div1 p-4">

        <div class="col-12 col-md-6">

            <div class="col-12  text-center">
                <h2 class="understand font-weight-bold text-left">Literally understand <br>What Your Pet Is Saying </h2>
            </div>

            <div class="col-12 ">
                <p class="never text-left">
                    Never misunderstand your pets again. <span class="green">Pet translator </span>
                    allows you to communicate better with your pets by translating animal sounds
                    into a language you understand!
                </p>
            </div>
            <div class="row form&divrow d-flex">


                <div class=" col form&betadivcol">

                    <div class="col-12 form text-center">
                        <form id="access-form" action="index.php" method="post">
                            <input type="email" name="email" class="w-50 my-3" placeholder="enter email address">
                            <button class="btn px-4 font-weight-bold mx-3 my-2 my-sm-0 text-white" type="submit"
                                style="background-color: #0239C0;">
                                Request Early Access
                            </button>

                        </form>
                    </div>

                    <div class="col-12 text-white my-3">
                        <div class="row d-flex justify-content-center  justify-content-md-start flex-nowrap  beta-row ">

                            <p class="beta text-center mx-1" style="align-items: center;">Beta Launch:</p>
                            <p class="days">30 days, 15:20:20 </p>


                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="col-12 col-md-6 phone-sound">
            <div class="col-12 ">
                <div>
                    <img class="phone1" src="./images/blob + screen.svg" alt="#">
                </div>
            </div>



            <div class="floating-imgs">
                <img class="cat" src="./images/cat.svg" alt="#">
                <img class="dog" src="./images/dog.svg" alt="#">
                <img class="owl" src="./images/owl.svg" alt="#">
            </div>
        </div>
    </div>
    </div>

    <div class="row justify-content-center d-flex div1 p-4">
        <div class="col-12 d-flex justify-content-center">

            <p class="mx-2"> Explore Features</p>
            <i class="fa fa-angle-double-down fa-1x "></i>

        </div>
    </div>

    <!-- two -->
    <div class="row d-flex justify-content-between p-5 flex-sm-nowrap pb-5">

        <!-- <section></section> -->
        <div class="col-12 col-md-3 four-box m-2 first ">
            <div>
                <img class="p-4 " src="./images/language11.png" alt="#">
                <h5 class="text-center sounds">20 languages supported</h5>
            </div>
            <hr>

            <p class="top-20 text-center pt-3">choose translations in in your preferred language from a list the of the
                top 20
                languages in the world

            </p>

        </div>



        <div class="col-12 col-md-3 four-box m-2">
            <div class="">
                <img class="p-4" src="./images/paw11.png" alt="#">

                <h5 class="text-center sounds">25+ pets included</h5>
            </div>
            <hr>

            <p class="top-20 text-center pt-3">
                Pet translator includes an extensive database for a wide range of animal languages.
            </p>

        </div>

        <div class="col-12 col-md-3 four-box m-2">
            <div>
                <img class="p-4" src="./images/speaker11.png" alt="#">
                <h5 class="text-center sounds">Voice playback supported</h5>
            </div>
            <hr>

            <p class="top-20 text-center pt-3">
                Get options to read transactions or listen to it through a friendly inbuilt TTS system.
            </p>

        </div>
        <div class="col-12 col-md-3 four-box m-2">
            <div>
                <img class="p-4" src="./images/recorder.svg" alt="#">
                <h5 class="text-center sounds">Record 24/7 with Notification</h5>
            </div>
            <hr>

            <p class="top-20 text-center pt-3">
                Record pet sounds round the clock. Get notified for whilelisted words.
                Never miss an important bark ot Hoot.
            </p>

        </div>
    </div>

    <!-- section3 -->
    <div class="row justify-content-between p-5">

        <div class="col-12 col-md-6 testimonies">

            <div class="col-12  my-3">
                <h6 class="media text-center font-weight-bold"> Pet Translator on the Media</h6>

                <div class="col-12 d-flex justify-content-around align-items-center">

                    <img class="nyt mr-4" src="./images/nyt.png" alt="#">
                    <p class="NYT"> "Pet Translator is bridging the gap in communications between
                        people and animals. It's amazing!" - New York Times. </p>
                </div>
            </div>

            <div class="col-12 my-3">
                <div class="col-12 d-flex justify-content-around align-items-center">
                    <p class="NYT"> "This new tech might not break the internet. Infact,
                        it might not be breaking anything at all because it's perfect in buiding!" -wired. </p>
                    <img class="nyt mr-4" src="./images/wired.png" alt="#">

                </div>
            </div>

            <div col-12 my-3>

                <div class="col-12 d-flex justify-content-around align-items-center">

                    <img class="nyt mr-4" src="./images/vetstreet.png" alt="#">
                    <p class="NYT"> "It's clear the team at Pet Translator have done their home work.
                        They have created a polished product at a much-needed time. Humanity would be grateful" -
                        VetStreet. </p>
                </div>
            </div>

            <div col-12 my-3>

                <div class="col-12 d-flex justify-content-around align-items-center">

                    <p class="NYT"> "Brilliant work by the Team at Pet Translator.
                        The future is looking bright for this young startup!" - Nat Geo Wild. </p>
                    <img class="nyt mr-4" src="./images/natgeowild.png" alt="#">

                </div>
            </div>
        </div>

        <div class="col-12 col-md-6  ">

            <div class="row d-flex justify-content-around my-4">
                <div class="col-4">
                    <img class="slide-img" src="./images/screen 1.svg" alt="#">
                </div>
                <div class="col-4">
                    <img class="slide-img" src="./images/screen 2.svg" alt="#">
                </div>
                <div class="col-4">
                    <img class="slide-img" src="./images/screen 3.svg" alt="#">
                </div>
            </div>

            <div class="row d-flex justify-content-around ">
                <div class="col-4">
                    <img class="slide-img" src="./images/screen 4.svg" alt="#">
                </div>
                <div class="col-4">
                    <img class="slide-img" src="./images/screen 5.svg" alt="#">
                </div>
                <div class="col-4">
                    <img class="slide-img" src="./images/screen 6.svg" alt="#">
                </div>
            </div>

        </div>


    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <p class="get-notified font-weight-bold text-center">Get Notified when we launch Open Beta</p>
        </div>
    </div>

    <div class="row d-flex justify-content-center ">
        <div class="col-8">
            <p class="be-the-first text-center">
                Be the first to know when we launch. <span class="font-weight-bold">Sign up for early access.</span>
            </p>
        </div>
    </div>

    <div class="row d-flex justify-content-center pb-4">
        <div class="col-8 text-center">
            <form action="index.php" method="post">
                <input class="text-left email-1" type="email" placeholder=" Enter email address ">
            </form>
        </div>
    </div>

    <div class="row d-flex justify-content-center pb-4">
        <div class="col-8 text-center">
            <button class="give-me-access text-center text-white">Give Me Access </button>
        </div>
    </div>

    <footer>
		<div class="container-fluid" style="background-color: #002E05">
			<div class="container">
               
                <!-- <div class="row d-flex justify-content-start" style="margin-top: 30px;">
                    <img class="pt-5 logo" src="./images/footer-paw.png" alt="#"> 
                    <p class="text-white translator">Pet Translator</p>
                </div> -->
				<div class=" d-flex pb-5 calender mt-0 justify-content-center">
                    
					<div class="d-flex">
						<div class="d-flex flex-column">
							<div class="calenderBox d-flex justify-content-center align-items-center">
								<h5 class="pt-1">30</h5>
							</div>
							<h6 class="mt-2 ml-3 ml-xs-0">

								Days
							</h6>
						</div>
						<div class="d-flex flex-column mx-3">
							<h4>.</h4>
							<h4 class="mt-lg-2">.</h4>
						</div>
						
					</div>
					<div class="d-flex">
						<div class="d-flex flex-column">
							<div class="calenderBox d-flex justify-content-center align-items-center">
								<h5 class="pt-1">15</h5>
							</div>
							<h6 class="mt-2 ml-3">
								Hours
							</h6>
						</div>
						<div class="d-flex flex-column mx-3">
							<h4>.</h4>
							<h4 class="mt-lg-2">.</h4>
						</div>
						
					</div>
					<div class="d-flex">
						<div class="d-flex flex-column">
							<div class="calenderBox d-flex justify-content-center align-items-center">
								<h5 class="pt-1">20</h5>
							</div>
							<h6 class="mt-2 ml-1">
								Minutes
							</h6>
						</div>
						<div class="d-flex flex-column mx-3 colon">
							<h4>.</h4>
							<h4 class="mt-lg-2">.</h4>
						</div>
						
					</div>
					<div class="d-flex">
						<div class="d-flex flex-column">
							<div class="calenderBox d-flex justify-content-center align-items-center">
								<h5 class="pt-1">20</h5>
							</div>
							<h6 class="mt-2 ml-1">
								Seconds
							</h6>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="background-color:#6D6D6D">
			<div style="color:white" class=" container py-1 d-flex justify-content-between">
				<h6>2020 &copy; Designed by Groot</h6>
				<div>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-facebook-f pl-3"></i>
					<i class="fab fa-instagram pl-3"></i>
				</div>
			</div>
		</div>
	</footer>


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script>
        // const form = document.getElementById('access-form')
        // form.addEventListener('submit', async (event)=>{
        //     event.preventDefault()
        //     const email = event.target.elements.email.value
        //     const json = JSON.stringify({email})
        //     let response = await fetch(`/app-3/form.php`,{
        //         method: 'POST',
        //         body:json
        //     })
        //    let result =  await response.text()
        //    alert(result)
        // })
    </script>
</body>

</html>

<!-- <div class="row d-flex justify-content-center access text-white">
<h5>Give Me access</h5>
</div> -->



<!-- <footer class="foot">
        <div class="row d-flex justify-content-around">
            <div class="box" id="box1">30</div>
            <div class="box" id="box2">15</div>
            <div class="box" id="box3">20</div>
            <div class="box" id="box4">20</div>
        </div>
    </footer> -->