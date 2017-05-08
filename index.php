<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta property="og:type" content="website">
<title></title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" href="css/styles.css">
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/top.js"></script>
<!--[if lt IE 9]>
<script src="js/IE9.js"></script>
<![endif]-->
</head>
<body id="index">
<div class="login-page">
	<form class="login-form" method="post">
      <input type="text" placeholder="username" name="user" />
      <input type="password" placeholder="password" name="pass" />
      <button type="submit">login</button>
    </form>
</div>
<?php
	if (isset($_POST['user']) and isset($_POST['pass'])){
		$user = $_POST['user'];
		$password = $_POST['pass'];
		if($user == "alivu" and $password == "123456789!@#"){
		
?>
<script type="text/javascript">
	$('.login-page').fadeOut();
</script>
<div class="loading">
	<svg>
    	<rect id="loading-upper" x="-50%" y="0" width="150%" height="100%"></rect>
		<rect id="loading-lower" x="-50%" y="85%" width="200%" height="200%"></rect>
		<animate 
			xlink:href="#loading-lower" 
			attributeName="y" 
			from="85%" 
			to="125%"
			dur="2s" 
			begin="1s" 
			fill="freeze"  />
		<animate 
			xlink:href="#loading-upper" 
			attributeName="y" 
			from="0" 
			to="-5%"
			dur="2s" 
			begin="1s" 
			fill="freeze"  />
    </svg>
</div>
<div id="wrapper">
  <header id="header">
  	<div class="container clearfix">
    	<h1><a href="#"><img src="images/logo.png" alt="Ali Vu"></a></h1>
        <nav id="gnavi">
        	<ul>
            	<li><a href="#idx01">MY SKILLS</a></li>
                <li><a href="#idx02">PROJECTS</a></li>
                <li><a href="#idx03">CONTACT</a></li>
            </ul>
        </nav>
    </div>
  </header>
  <div id="mainvisual">  
  	<div class="container">
    	<div class="main-left">
        	<ul class="social">
              <li><a href="#"><img src="images/social_icon01.png" alt="facebook"></a></li>
              <li><a href="#"><img src="images/social_icon02.png" alt="tweeter"></a></li>
              <li><a href="#"><img src="images/social_icon03.png" alt="google plus"></a></li>
            </ul>
            <div class="slogan">Follow Your Passions And Success Will Folow</div>
        </div>
        <div class="avatar"><img src="images/main_img01.png" alt="Ali Vu's avatar"></div>
    </div>	
  </div>  
  <main id="main">
  	<section class="box01">
    	<div class="container">
        	<h3 id="idx01">My Skills</h3>
            <div class="box01-items">
            	<dl>
                	<dt>DESIGN</dt>
                    <dd>
                    	<ul class="box01-list">
                        	<li>Photoshop</li>
                            <li>Illustrator</li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                	<dt>FRONT END</dt>
                    <dd>
                    	<ul class="box01-list">
                        	<li>HTML, CSS</li>
                            <li>JS, JQuery</li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                	<dt>BACK END</dt>
                    <dd>
                    	<ul class="box01-list">
                        	<li>PHP</li>
                            <li>MySql</li>
                        </ul>
                    </dd>
                </dl>
            </div> 
        </div>
    </section>
    <section class="box02">
    	<div class="container clearfix">
        	<h3 id="idx02">Projects</h3>
            <div class="project-item">
            	<a href="#"><img src="images/box02_img01.jpg" alt="project 01"></a>
                <div class="project-name">
                	<span class="project-date">2016 Sept</span>
                    <span>Project Name 01</span>
                </div>
            </div>
            <div class="project-item">
            	<a href="#"><img src="images/box02_img02.jpg" alt="project 02"></a>
                <div class="project-name">
                	<span class="project-date">2016 Sept</span>
                    <span>Project Name 02</span>
                </div>
            </div>
            <div class="project-item">
            	<a href="#"><img src="images/box02_img03.jpg" alt="project 03"></a>
                <div class="project-name">
                	<span class="project-date">2016 Sept</span>
                    <span>Project Name 03</span>
                </div>
            </div>
        </div>
    </section>
    <section class="box03">
    	<div class="container">
        	<h3 id="idx03">Contact</h3>
            <div class="contatc-tel">TEL: <span>0916924239</span></div>
            <div class="contatc-mail">Email: <span>fvn.vuldn@gmail.com</span></div>
        </div>
    </section>
  </main>
  <footer id="footer">&copy; Ali Vu. All Rights Resevered.</footer>
</div>
<?php
		}else{
			echo '<div class="wrong-login">Wrong ID or Password.  Pleasse contact to adminitrator and re-login.</div>';
		}
	}
?>
</body>
</html>
