

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />



  <title>Registration Form.</title>
  
  
  
  
<style>
body{
   text-align:center;
	background-image: linear-gradient(135deg, #007991 30%, #78ffd6 90%);
}

.register-wrapper {
     position: relative;
     z-index: 3;
     padding: 100px;
     font-size:18px;
     color: #999999;
   }
.register-wrapper * {
     box-sizing: border-box;
   }

.register-wrapper form input {
     display: inline-block;
     width: 100%;
     padding: 0 20px;
     line-height: 50px;
     height: 65px;
     background-color: white;
     border: 2px solid #e6e6e6;
     border-bottom-width: 3px;
     border-radius: 5px;
     outline: 0;
     -webkit-transition: all 0.3s ease;
     transition: all 0.3s ease;
   }

.register-wrapper form input:not(:last-child) {
     margin-bottom: 20px;
   }

	.register-wrapper form input[type="email"]:focus, 
	.register-wrapper form input[type="email"]:active, 
	.register-wrapper form input[type="password"]:focus, 
	.register-wrapper form input[type="password"]:active {
		  border-color: #cccccc;
		}

.register-wrapper form input[type="submit"] {
     position: relative;
     z-index: 1;
     display: inline-block;
     padding: 0 20px;
     font-size: 1rem;
     background-color: #f2395a;
     background-size: 100%;
		  rgba(0, 0, 0, 0) 75%,rgba(0, 0, 0, 0));
     background-image:linear-gradient(45deg,
		  rgba(255, 255, 255, 0.15) 25%, rgba(0, 0, 0, 0) 25%,
		  rgba(0, 0, 0, 0) 50%,
		  rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, rgba(0, 0, 0, 0) 75%,
		  rgba(0, 0, 0, 0));
	
     background-size: 20px 20px, 100% 100%;
     border: 1px solid #f02146;
     border-bottom-width: 3px;
     color: white;
     outline: none;
     cursor: pointer;
     -webkit-transition: all 0.3s ease;
     transition: all 0.3s ease;
   }

.register-wrapper form input[type="submit"]:hover {
     background-size: 40px 40px;
   }
   .register-title {
     font-size: 1.5em;
     padding-bottom: 30px;
     margin: 0 0 20px;
     border-bottom: 1px dashed #e6e6e6;
   }

.register-block {
     position: relative;
     display: block;
     width: 100%;
     max-width: 300px;
     margin: auto;
     padding: 30px;
     background-color: white;
     box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
     border-radius: 5px;
	
   }

.register-block:before, 
.register-block:after {
     position: absolute;
     z-index: -1;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     display: block;
     width: 100%;
     height: 100%;
     content: "";
     background-color: white;
     border: 1px solid #e6e6e6;
     border-radius: 5px;
     -webkit-transform: scale(0.9) translate(0, 0);
             transform: scale(0.9) translate(0, 0);
     -webkit-transition: all 0.3s ease;
     transition: all 0.3s ease;
   }

.register-block:hover:before {
     z-index: -1;
     -webkit-transform: scale(0.96) translate(0, 16px);
             transform: scale(0.96) translate(0, 16px);
   }

.register-block:hover:after {
     z-index: -2;
     -webkit-transform: scale(0.92) translate(0, 32px);
             transform: scale(0.92) translate(0, 32px);
   }

h1,a{
		font-family: 'Parisienne', cursive;
		color: #fff;
		font-size:50px;
		text-decoration: none;
		text-shadow: 2px 2px 3px lightblue;
		padding-top:35px;
  }
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Registration Form - 30DaysOfCSS3</title> 
	 <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Nova+Mono|Roboto+Condensed" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
 </head>
 <body>
	<h1>Registration Form.</h1>
	<div class="content">
	<section>
		<div class="register-wrapper">
		<div class="register-block">
		<h3 class="register-title">Create an account</h3>
			<p>Create an account using the form below.</p>
			<form action="index.html">
			<input type="email" placeholder="Enter your email" required/>
			<input type="password" placeholder="Enter your password" required/>
			<input type="submit">
			</form>
		</div>
		</div>
	</section>
</div>

</body>
</html>
  
  
  
  
  

</body>

</html>
 
