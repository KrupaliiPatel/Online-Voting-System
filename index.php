<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For google icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <title>Home</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .background {
            background: url(https://image.chitra.live/api/v1/wps/d72d958/f21dbbd2-75a5-4c92-ab3e-cf4aea1558ad/2/Online-voting-580x358.jpg) rgba(0, 0, 0, 0.61);
            background-repeat: no-repeat;
            background-size: 100% 90%;
            background-blend-mode: darken;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            filter: blur(3px);
            min-height: 800px;
            opacity: 100%;

        }
		.navbar{
			position: absolute;
			height:auto;
			width:100%;
			display: flex;
			align-items: center;
			overflow: hidden;

		}
		.navbar .logo{
			position: relative;
			height:auto;
			width:20%;
			left:5%;
			float:left;
			font-family:'Lato',sans-serif;
			font-size:35px;
			font-weight:600;
			cursor: pointer;
			text-shadow:0px 0.5px 5px rgba(0, 0, 0, 0.2);
			transition: 0.1s ease-in-out;
			margin-top: 1%;
		}
		.navbar .logo:hover{
			color:rgba(0, 0, 0, 0.4);
		}
		.navbar  ul{
			position: relative;
			float:right;
			width:50%;
			right:-14%;
			height:auto;
			margin:auto;
		}
		.navbar ul li{
			list-style-type: none;
			display: inline-block;
			height:100%;
			width:auto;
			border:1px solid rgba(255, 255, 255, 0.88);
			border-radius:2px ;
			cursor: pointer;
			padding:10px;
			box-shadow:0px 0.5px 5px rgba(0, 0, 0, 0.2);
			transition: 0.1s ease-in-out;
			box-sizing: border-box;
		}
		.navbar ul li a{
			color:#fff;
			text-align: center;
			text-decoration: none;
			font-family:'cinzel',sans-serif;
			font-size:15px;
			font-weight:300;
			display: block;
		}
		.navbar ul li:hover{
			background:rgba(0, 0, 0, 0.4);
		}
        
        h2 {
            font-size: 30px;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background: transparent;
            box-shadow: 0 0 15px rgb(255, 255, 255);
            border-radius: 15px;
            width: 500px;
            margin: 10vh auto;
        }
        
        form {
            padding: 10px;
            display: flex;
            flex-direction: column;
            width: 85%;
        }
        
        .form-item {
            display: flex;
            width: 90%;
            background: transparent;
            margin: 10px auto;
            align-items: center;
            border-radius: 15px;
            border-bottom: 1px solid rgb(82, 81, 81);
        }
        .form-item:hover {
            border: 1px solid rgb(82, 81, 81);;
        }
        input {
            font-size: 18px;
            width: 80%;
            height: 30px;
            outline: none;
            background: transparent;
            border: none;
            margin: auto;
            color: white;
        }
        #role {
            font-size: 18px;
            width: 80%;
            height: 30px;
            outline: none;
            background: transparent;
            border: none;
            margin: auto;
            color: white;
            background: rgba(122, 123, 116, 0.72);
        }
       
        
        span {
            margin: 5px;
            color: rgb(172, 172, 172);
            cursor: default;
            user-select: none;
            background: rgba(85, 81, 81, 0.637);
            padding: 5px;
            border-radius: 15px;
        }
        
        button[type="submit"] {
            width: 250px;
            font-size: 20px;
            margin: 10px auto;
            padding: 10px 16px;
            color: white;
            background: rgba(122, 123, 116, 0.72);
            border: none;
            text-align: center;
        }
        button[type="submit"]:hover {
            background: rgb(172, 134, 8);
        }
        p:first-of-type {
            font-size: 18px;
            margin: 0;
        }
        
        .options {
            display: flex;
            margin:  10px auto;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        button {
            padding: 5px 16px;
            font-size: 15px;
            margin: 5px 15px;
            width: 180px;
            color: white;
            background: transparent;
            cursor: pointer;
            transition: all 0.7s ease;
        }
        .fb:hover{
            background: rgb(5, 5, 73);
            border: none;
            box-shadow: 0 0 5px  rgb(5, 5, 73);
        }

        .gl:hover{
            background: rgb(73, 5, 5);
            border: none;
            box-shadow: 0 0 5px  rgb(73, 5, 5);

        }
        
        p {
            font-size: 18px;
            margin: 5px;
        }
        a{
            color: white;
        }
        a:hover{
            color: grey;
        }

        @media screen and (max-width:550px) {
            .container {
                width: 90%;
            }
            
        }
 		.btns{
			height:auto;
			width:100%;
			display: flex;
			text-align: center;
			align-items: center;
			justify-content: center;
			position: relative;
			font-size: 15px;
            color: white;
            background: transparent;
            cursor: pointer;
            transition: all 0.7s ease;
		}
		.btns a{
			color:#fff;
			text-align: center;
			text-decoration: none;
			font-family:'cinzel',sans-serif;
			font-size:15px;
			font-weight:300;
			display:block;
			border:1px solid rgba(255, 255, 255, 0.5);
			height:auto;
			width:150px;
			padding:10px;
			display: flex;
			text-align: center;
			align-items: center;
			justify-content: center;
			margin-left:1%;
			border-radius: 2px;
		}
		.btns a:hover{
			background:#919496;
			border:1px solid #fff;
		}
		.btns .btn1{
			background:#919496;
			border:1px solid #fff;

		}
		.btns .btn1:hover{
			background: rgb(172, 134, 8);
			border:1px solid #fff ;
			color:rgba(255, 255, 255, 0.95);
		}

    </style>

</head>

<body>
	<div class="navbar">
		<div class="logo" style="color: yellow;">StarTrack</div>
		<!-- <ul style="margin-right: -14.5%;">
			<li><a href="#top">Home</a></li>
			<li><a href="#about">About us</a></li>
			<li><a href="#contact">Contact us</a></li>
		</ul> -->
	
	</div>
    
    <div class="background"></div>
    <div class="container">
        <h2 style="margin-top:5%;">WELCOME TO OUR WEBSITE</h2>
	</div>
	<center>
		<h2 style="color: yellow;"> Online Voting System</h2> <br>
		<b>An online voting system is a software platform from which groups <br> <br>
			 can easily conduct votes and elections.</b><br><br>
	</center>
	<div class="btns">
		<a class="btn1" href="routes/login.php" style="background: rgba(122, 123, 116, 0.72; hover:yellow">Get Started</a>
		
	</div>

</body>

</html>







