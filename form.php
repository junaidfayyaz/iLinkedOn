<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
	<!-- Form-Section-start -->
    <p>This is my first commit</p>
	<section id="section1">
		<div class="holder">
			<div class="section1-content">
				<h2>
					<span class="ilinkedon-logo-medium"></span>
					<span>-Be Great at what you do</span>
				</h2>
				<p>
					<!-- <span class="ilinkedon-logo-extra-small"></span>  -->
				
				iLinkedOn is a digital platform that uses the web, and mobile app linked to form an interface that is meant to provide business and social solutions to the members. It’s an interface that companies and individuals can join for free by registering through a simple process. It is an ‘all under one roof’ based platform, which aims to cover the diverse and vibrant market in Pakistan and the world over. <br> <br> The platform links your business to other businesses and allows you to do business as you socialize. With iLinkedOn, you don’t have to keep switching to attend to that business.</p>
			</div>
			<div class="section1-video">
				<!-- <span class="ilinkedon-logo-large"></span> -->
				<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/NVPxmz_PvUw" allowfullscreen></iframe> -->
				<span>
					<img class="form-player" src="./images/form-player.png" alt="form-player">
			        <img class="form-logo" src="./images/logo.svg" alt="form-logo">
			    </span>
				<img src="./images/form-section.jpg" width="560" height="315" alt="form-section">	
			</div>
		</div>
		<span class="ilinkedon-logo-custom"></span>
	</section>
	<!-- Form Section-End -->


	<!-- Join Now Section Start -->
	    <section id="join-now-section">
        <div class="holder">
            <div class="join-form-holder">
                <h2>
                    <span class="ilinkedon-logo-medium"></span>
                    <span>-Be Great at what you do</span>
                </h2>
                <h3>Get started - it’s free.</h3>
                <form class="join-form" action="https://ilinkedon.20thfloor.us/Front/views/front/Signin.html"
                    novalidate="novalidate">
                    <div class="row">
                        <div class="columns-row">
                            <div class="row">
                                <div class="columns">
                                    <span class="fname">
                                        <input class="input-field" placeholder="First Name" id="fname"
                                            type="text">
                                        <strong class="fname-icon"></strong>
                                    </span>
                                </div>
                                <div class="columns">
                                    <span class="lname">
                                        <input class="input-field" placeholder="Last Name" id="lname"
                                            type="text" name="lname">
                                        <strong class="lname-icon"></strong>
                                    </span>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="columns">
                                    <span class="email">
                                        <input class="input-field" placeholder="Support@ilinkedOn.com" 
                                            type="email" name="email" id="email">
                                        <strong class="email-icon"></strong>
                                    </span>
                                </div>
                                <div class="columns">
                                    <span class="phone">
                                        <input class="input-field" placeholder="Phone" id="phone"
                                            type="text" name="phone">
                                        <strong class="phone-icon"></strong>
                                    </span>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="columns">
                                    <div class="row">
                                        <span class="password">
                                            <input class="input-field" placeholder="Password"
                                                id="password" type="password" name="password">
                                            <strong class="password-icon"></strong>
                                        </span>
                                    </div>
                                    <div class="row">
                                        <span class="confirm-password">
                                            <input class="input-field" placeholder="Re-Enter Password" 
                                                id="confirm-password" type="password" name="confirm-password" >
                                            <strong class="confirm-password-icon"></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="columns">
                                    <label for="upload-image">Upload Photo</label>
                                    <span class="upload-image">
                                        <input id="upload-image" type="file" accept="image/*" title="Upload Image">
                                        <img id="myImg" src="./images/transparent.gif" height="50" width="50"
                                            alt="Upload Image">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>
                            <label class="agreement-checkbox false" for="agreement-checkbox">
                                <input id="agreement-checkbox" type="checkbox">
                            </label>
                            <span>By clicking Join now, you agree to the</span>
                            <span class="ilinkedon-logo-small"></span>
                            <span>User <a href="#">Agreement,</a> <a href="#">Privacy Policy,</a> and <a href="#">Cookie
                                    Policy.</a></span>
                        </p>
                    </div>
                    <div class="row">
                        <button type="submit">Join Now</button>
                    </div>
                    <div class="row">
                        <ul class="other-signin">
                            <li class="sign-in-facebook"><a href="#">Sign up with Facebook</a></li>
                            <li class="sign-in-linkedin"><a href="#">Sign up with Linkedin</a></li>
                        </ul>
                    </div>
                </form>
                <span class="ilinkedon-logo-custom"></span>
            </div>
        </div>
    </section>

</body>
</html>