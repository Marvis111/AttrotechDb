<?php 
	include 'attroServer.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<meta name='author' content="Mustapha Olawale , Oyegbile Marvellous , Emmanuel Offisong , Okeke Johnpaul , Balogun Adeleke , Olubiyi Emmanuel , Oluwasemitope David , Fiyinfoluwa Dideoluwa , Osibajo Oreoluwa">
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Attrotech</title>
	<link rel="stylesheet" type="text/css" href="attrodesign.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="icon" href="fav-icon.jpeg.jpg" title="Attrotech logo">
</head>
<body>
	<div class="image">
		<a href="attrotech.html"> <img src="Picture.png"> </a>
	</div>
	<div id="absolute-nav">
	<nav>
		<div class="logo">
			<a href="attrotech.html"><img src="logo.jpeg.jpg" alt="Attrotech_Logo"> </a>
		</div>
		<div>
			<ul>
				<li><a href="attrotech.html">Home</a></li>
				<li class="aBout">About</li>
				<li><a href="">Services</a></li>
				<li><a href="">Portfolio</a></li>
				<li class="nav05"><a href="">Contact</a></li>
			</ul>
		</div>
	<!-- Pop up Menu Icon -->
        <div id="menu-bar"  style=" background-color: #571F9C; padding: 4px;border-radius: 5px;right:10px;position :absolute;">
            <div onclick="menuBar()" class="strip_line"></div>
            <div onclick="menuBar()" class="strip_line"></div>
            <div onclick="menuBar()" class="strip_line"></div>
        </div>
	</nav>
	</div>
	<!-- Menu Bar Contents-->
	  <div id="Menu">
        <a href="attrotech.html"> <li class="nav01"> <b> HOME </b>  </li> </a>
        <a class="aBout" href="#"> <li class="nav02">  <b> ABOUT</b>  </li> </a> 
        <a href="#"> <li class="nav03">  <b> SERVICES </b> </li> </a> 
        <a href="#"> <li class="nav04">  <b> PORTFOLIO </b></li> </a> 
        <a href="#"> <li> <b> CONTACT US</b> </li> </a> 
    </div>
    <!-- DO Not add any thing to this MAIN tag its has its specfic Media Query -->
  <main>
		<header>
		  <h5>Hi, we're</h5>
		  <h1>Dedicated Teams Offering Professional Service for Software Needs </h1>
		</header>
		<div class="quote-section">
		  <h5> We're reliable & responsible, company with the highest integrity.</h5>
		  <span onclick="changeQuotes()">Get a quote</span>
		</div>	
  </main>
  		<div class="imagehibernated">
			<img src="Picture.png">
		</div>
	<!-- About Us -->
	<div class="aboutUs" id="aboutUs" >
		<div class="aboutUSLOGO">
			<span><u> Abo</u>ut us</span>
			<h2>We are a creative digital agency</h2>
		</div>
		<div class="introCaps">
			<div class="tray">
				<div class="tray-flex">
					<b class="icon-anchor" style="font-size: 160%;color:#571F9C;"></b>
					<h2>Well Experienced</h2>
					<content> Loriem psum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</content>
				</div>
				<div class="tray-flex">
					<b class="icon-heart" style="font-size: 160%;color:#571F9C;"></b>
					<h2>Creative</h2>
					<content> Loriem psum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</content>
				</div>
			</div>
			<div class="tray">
				<div class="tray-flex">
					<b class="icon-trophy" style="font-size: 160%;color:#571F9C; "></b>
					<h2>Award Winning</h2>
					<content> Loriem psum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</content>
				</div>
				<div class="tray-flex">
					<b class="icon-wrench" style="font-size: 160%;color:#571F9C;"></b>
					<h2>Best Support</h2>
					<content> Loriem psum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</content>
				</div>
			</div>
			
		</div>
	</div>
<br> <br> <br>
  <!-- Working Together as a Sucess-->
 

<!-- contact us -->
<div class="contact_us">
	
	<div class="contact_details">
		<div class="contact-content">
	<h2> Discuss your project with Us</h2>
	<h5>We are here to meet your demand</h5>
	<h5>Email: atrrotechcompany@gmail.com</h5>
	<h5>Tel:134456677788</h5>
	</div>
</div>
<div class="contact_form">
	<div class="form-content">
		<form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form_input_div">
	 <div class="input">
			<input type="text" name="client_name" class="form-input" placeholder="Name"><br>
		<span style="" class="form-error"> <?php echo $client_name_error; ?> </span>
		</div>	
		<div class="input">
			<input type="text"  name="client_email" class="form-input" placeholder="Email"><br>
			<div><span class="form-error"> <?php echo $client_email_error; ?>  </span></div>
		</div>
	</div>
	<div class="form_input_div">
		<div class="input">
		<input type="text" name="client_subject" placeholder="Subject" class="form-inputMessage"><br>
		</div>
	</div><div><span class="form-error-msg"><?php echo $client_subject_error; ?></span></div>
	
	<div class="message-flex">
	<div class="form_input_div">
		<textarea name="message" placeholder="Type your Message here"   class="form-inputMessage"></textarea><br>
		</div>
	</div>
	<div><span class="form-error-msg"><?php echo $message_error; ?>  </span></div>
	<div class="form_input_div">
		<input type="submit" name="ContactUS" class="form-submit" value="Submit">			
	</div>	
		</form>
	</div>	
</div>
</div>






  <!-- Meet the Team --->
  <h3 class="team-section">Meet The Team</h3>
  <div class="teamContainer">
  	<div class="arrows" id="arrow-left"><b onclick="clickPrev()" class="icon-chevron-left"></b></div>
  	<div class="teammainContainter">
  		<div class="flex-box">
	  		<div class="box-content" id="frist">
	  			<div>
	  				<img src="">
	  				<div class="personal-info">
						<p class="name"> Mustapha Olawale</p>
						<span class="expertise"> Full-Stack Web Developer </span>	  			
	  				</div>
	  			</div>
	  		</div>
	  		<div class="box-content">
	  			<div>
	  				<img src="">
	  				<div class="personal-info">
						<p class="name"> Olubiyi Emmanuel </p>
						<span class="expertise"> Front-end Engineer </span>	  			
	  				</div>
	  			</div>
	  		</div>
	  		<div class="box-content">
	  			<div>
	  				<img src="">
	  				<div class="personal-info">
						<p class="name">  Oluwasemitope David</p>
						<span class="expertise"> Digital Marketer & Customer Service </span>	  			
	  				</div>
	  			</div>
	  		</div>
  		</div>
  		<div class="flex-box">
	  		<div class="box-content">
	  			<div>
	  				<img src="picture4.jpeg" width="260" height="320">
	  				<div class="personal-info">
						<p class="name"> Oyegbile Marvellous</p>
						<span class="expertise"> Back-end Engineer </span>	  			
	  				</div>
	  			</div>
	  		</div>
	  		<div class="box-content">
	  			<div>
	  				<img src="picture5.png" width="260" height="320">
	  				<div class="personal-info">
						<p class="name"> Okeke Johnpaul</p>
						<span class="expertise"> Front-end Engineer </span>	  			
	  				</div>
	  			</div>
	  		</div>
	  		<div class="box-content">
	  			<div>
	  				<img src="">
	  				<div class="personal-info">
						<p class="name"> Emmanuel Offisong</p>
						<span class="expertise"> AI and Data Scientist </span>	  			
	  				</div>
	  			</div>
	  		</div>
	  	</div>
  		<div class="flex-box">
  			<div class="box-content">
	  			<div>
	  				<img src="">
	  				<div class="personal-info">
						<p class="name"> Osibajo Oreoluwa</p>
						<span class="expertise"> Full-Stack Web Developer </span>	  			
	  				</div>
	  			</div>
	  		</div>
  			<div class="box-content">
	  			<div>
	  				<img src="">
	  				<div class="personal-info">
						<p class="name"> Balogun Adeleke</p>
						<span class="expertise"> UI/UX Designer </span>	  			
	  				</div>
	  			</div>
	  		</div>
	  		<div class="box-content">
	  			<div>
	  				<img src="">
	  				<div class="personal-info">
						<p class="name"> Fiyinfoluwa Dideoluwa</p>
						<span class="expertise"> Front-end Engineer </span>	  			
	  				</div>
	  			</div>
	  		</div>
	  	</div>	
  	</div>

  </div>
  <div class="arrows" id="arrow-right"><b onclick="clickNext()" class="icon-chevron-right"></b></div>
    
  </div>
  <div class="contactsContainer">
    <h1>Our Contact Details</h1>
    <span style="font-weight:bold;">Address</span>
    <h5>Location A</h5>
    <h5>Location B</h5> <br>
    <span style="font-weight:bold;"> Call Us</span>
    <h5>Number 1</h5>
    <h5>Number 2</h5> <br>
    <span style="font-weight:bold;"> Email Address</span>
    <h5>Number 1</h5>
    <h5>Number 2</h5>
  </div>
  <footer>
    <div> <p>All rights reserved.</p></div>
    <div>			
    	<ul>
			<li class="first-child"><a href="attrotech.html">Home</a></li>
			<li> About</li>
			<li>Services</li>
			<li>Portfolio</li>
			<li>Contact</li>
		</ul>
	</div>
    <div class="social-links">
      <ul>
            <a href="#" class="twitter"style="text-decoration: none;" ><i class="icon-twitter" style="text-decoration: none;color:#1DA1F2;"></i></a>
            <a href="#" style="text-decoration: none;" class="facebook"><i class="icon-facebook" style="text-decoration: none;color: #3B5998;"></i></a>
            <a href="#" style="text-decoration: none;color: blue;" class="whatsapp"><i class="icon-whatsapp" style="text-decoration: none;color: green;"></i></a>
            <a href="#" style="text-decoration: none;color: blue;" class="google"><i class="icon-google" style="text-decoration: none;color: red;"></i></a>
            <a href="#" style="text-decoration: none;color: blue;" class="linkedin"><i class="icon-linkedin" style="text-decoration: none;color: #0E76A8;"></i></a>
            <a href="#" style="text-decoration: none;color: blue;" class="youtube"><i class="icon-youtube" style="text-decoration: none;color: #C4302B;"></i></a>
       </ul>
    </div>
  </footer>
</body>
<style>
	/* Contact us in desktop mode*/
.contact_us{
	width:100%;
	height:900px;
	background:#f2f2f2;
	color:#571F9C;
	display:flex;
}
.contact_details{
	width:50%;
	height:550px;
	margin-top:0;
 line-height:30px;
	background:#f2f2f2;
	justify-content:center;
	
	
}
.contact-content{
	width:100%;
	height:100%;
	margin-top:120px;
	margin-left:30px;
}
/* contact form*/
.input{
	width: 100%;
}
.message-flex{
	display:flex;
	width:100%;
	flex-direction:column;
	justify-content:center;
	align-content:center;
	
}
.contact_form{
	width:50%;
	height:550px;
	background:#f2f2f2;
	display:flex;
	justify-content:space-between;
	
}
form {
	width:100%;
	height:100%;
}
.form-error,.form-error-msg{
	color:red;
	padding-top:23px;

}
.form-error-msg{
	margin-left:25%;
}
.form-content{
	width:100%;
	height:100%;
	margin-top:90px;
	display:flex;
	justify-content:space-between;
	flex-direction:column;
	margin-left:5%;
	margin-right:5%;
}
.form_input_div{
	padding-top:20px;
	width:100%;
	display:flex;
	
}
.form-inputMessage{
	width:100%;
	height:60px;
	background:#f2f2f2;
	border:none;
	display:flex;
	padding-bottom:10px;
	flex-direction:column;
	border-bottom:1px solid black;
}
textarea{
	resize: none;
	width: 100%;
}
input{
	width:95%;
	height:30px;
	background:#f2f2f2;
	border:none;
	border-bottom:1px solid black;
}
.form-submit{
	width:80%;
	background:#571F9C;
	color:white;
	cursor: pointer;
	margin-left:10%;
}
	
	
	@media(max-width:840px){
		/* Contact us in mobile view mode*/

.contact_us{
	width:100%;
	height:900px;
	background:#f2f2f2;
	color:#571F9C;
	display:flex;
	flex-direction:column;
}
.contact_details{
	width:100%;
	height:30%;
	line-height:20px;
	background:#f2f2f2;

}
.contact-content{
 height:100%;
 width:100%;
 margin-top:40px;
 display:flex;
 justify-content:center;
 flex-direction:column;
 text-align:center;
 margin:0 auto;
}
/* contact form*/

.contact_form{
	width:100%;
	height:50%;
	 background:#f2f2f2;
	display:flex;
	flex-direction:column;
	
}
form {
	width:100%;
	height:100%;
	display:flex;
	flex-direction:column;
}
.form-error,.form-error-msg{
	color:red;
	margin-top: 0px;
	margin-left: 10%;
	padding-top: 0;
}
.form-content{
	width:100%;
	height:100%;
	display:flex;
	margin-top:15px;
	flex-direction:column;
	margin-left:0;
	margin-right:0;

}
.form_input_div{
	width:100%;
	display:flex;
	padding-top:10px;
	margin-top: 10px;
	flex-direction:column;
	justify-content:center;
	align-content:center;
}
.form-input{
	margin-left: 10%;
	width: 80%;
	background:#f2f2f2;
	margin-top: 30px;
}
.form-inputMessage{
  	    width:80%;
		background:#f2f2f2;
		margin-top:4px;
		border:none;
		height: 80px;
		margin-left: 10%;
	border-bottom:1px solid black;
}

.form-submit{
	width:80%;
	background:#571F9C;
	margin-left:10%;
	color:white;
	padding: 0 5px;
	height: 40px;
	font-size: 20px;
}

		
		
	}
	
 </style>


<script type="text/javascript" src="attroscript.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".aBout").on("click",function(){

		$("#Menu").slideUp("slow");
		
			$("html,body").animate({
				scrollTop:$("#aboutUs").offset().top
			},2000)
			$("#aboutUs").fadeOut(2100).fadeIn(2110).css({
				'background':'purple',
				'color':'white'
			});
			$(".tray-flex b").css('color','white');
			
		})
	})

	var cuRRent = 0;
	var PictureList = ['0','1', '2','3', '4' ,'5' ,'6' ,'7' ,'8' ];
  function clickPrev(){
      if (cuRRent === 0){
        cuRRent = 8;
        $(".box-content").hide();
        $(".box-content").eq(8).show();
      }
      var value = parseInt(PictureList[cuRRent--]);
       $(".box-content").hide();
       $(".box-content").eq(value).show();
	}
	function clickNext(){
	  
      var value = parseInt(PictureList[cuRRent++]);
       $(".box-content").hide();
       $(".box-content").eq(value).show();
       if (cuRRent === 10) {
       	cuRRent = 0;
       	$(".box-content").hide();
       	$(".box-content").first().show();
       }
    console.log(cuRRent);
	}
	
  
  $(window).on("resize", function(event){
    var windowWidth = $(window).width();
      if(windowWidth > 700){
          $("nav").on("dl-click", function(){
            $("#absolute-nav").show();
          });
    }
    else if(windowWidth < 700){
    	$("main").not("nav").on("click",function(){
          $("#absolute-nav").show();
          });
    }
  });
  	var current = 1;
	var QuoteList = ["We're reliable & responsible, company with the highest integrity." , "  All our dreams can come true, if we have the courage to pursue them." , " “We can do anything we want to if we stick to it long enough.”" , "The best time to plant a tree was 20 years ago. The second best time is now.", " If people are doubting how far you can go, go so far that you can’t hear them anymore." , "You can either experience the pain of discipline or the pain of regret. The choice is yours." , "Impossible is just an opinion." , "Magic is believing in yourself. If you can make that happen, you can make anything happen." , "If something is important enough, even if the odds are stacked against you, you should still do it.", "Hold the vision, trust the process." , "Don’t be afraid to give up the good to go for the great." , "No one is to blame for your future situation but yourself. If you want to be successful, then become “Successful.” " , "Everything comes to him who hustles while he waits." , " “Invest in your dreams. Grind now. Shine later.”" , " “Greatness only comes before hustle in the dictionary.” " , "H.O.P.E. = Hold On. Pain Ends." , " “If we have the attitude that it’s going to be a great day it usually is.”" , "The same boiling water that softens the potato hardens the egg. It’s what you’re made of. Not the circumstances.”" , "“Your passion is waiting for your courage to catch up.”" , "“Things may come to those who wait, but only the things left by those who hustle.”" , "“Go the extra mile. It’s never crowded there.”" , "“What defines us is how well we rise after falling.”" , "“Begin anywhere.”"];
	var length = QuoteList.length;
	// Quotes
	function changeQuotes(){
       if (current === length ) {
       	current = 0;
       }   
       $(".quote-section > h5").html($("<blackquote> <i>" + QuoteList[current++] +"</i> </blackquote>").fadeIn(5000));     
	}
  	function menuBar(){
	    	$("#Menu").slideToggle("slow");
	  }
	 
         
	
</script>
</html>