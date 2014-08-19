<?php /* Smarty version Smarty-3.1.14, created on 2013-11-27 15:19:42
         compiled from "tpl\templates\test.html" */ ?>
<?php /*%%SmartyHeaderCode:1881152960bd6ea9794-62776610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d10c9162d32e6018337d1abb5ce0d70f29f5f9b' => 
    array (
      0 => 'tpl\\templates\\test.html',
      1 => 1385565227,
      2 => 'file',
    ),
    '4be8c844f6f107b7a7f96cb61cccfd1afa180b34' => 
    array (
      0 => 'tpl\\templates\\menu.html',
      1 => 1385565579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881152960bd6ea9794-62776610',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52960bd6eabb27_75359894',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52960bd6eabb27_75359894')) {function content_52960bd6eabb27_75359894($_smarty_tpl) {?><html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title> Menu transitionnelle </title>
		<style type="text/css">


#nav{
	font-family: "trebuchet ms";
}
#nav div{
	background: linear-gradient(#0033CC, #1A1E22) repeat scroll 0 0 rgba(0, 0, 0, 0);
	border-radius: 5px 5px 5px 5px;
	box-shadow: 0 -1px 0 rgba(255, 255, 255, 0.35);
	height: 220px;
	margin: 60px auto;
    padding-top: 5px;
	position: relative;
	width: 500px; 
}
#nav ul{
	background: linear-gradient(red, pink) repeat scroll 0 0 rgba(0, 0, 0, 0);
	border-bottom: 1px solid rgba(255, 255, 255, 0.25);
    height: 209px;
	 margin: auto;
	 overflow: hidden;
	 padding: 3px;
	 width: 494px;
}
#nav ul:hover:before {
    color: #000000;
}
#nav ul li div {
    background: linear-gradient(#6699FF, #99FFCC) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-radius: 5px 5px 5px 5px;
    color: #0033FF;
    height: 208px;
    margin-left: 33px;
    width: 324px;
    margin-top: -5px;
}
#nav ul li div h3{
	font-size: 30pt;
	line-height: 12pt;
	margin-left: 40px;
}
#nav ul li div p{
	font-size: 18pt;
}
#nav ul li div h3,#nav ul li div p{	
	transform:rotate(-8deg); 
}
#nav ul li {
	background:#FF0099;
    float: left;
	font-size: 1.1em;
    height: 209px;
    list-style: none outside none; /*list-style: list-style-type || list-style-position || list-style-image*/
    margin-right: 3px;
    overflow: hidden;
    position: relative;
    text-align: right;
    transition: width 1s ease 0.15s;
	width: 30px;
}
#nav ul li:last-child {
    margin-right: 0;
}
#nav ul li a{ 
	transform:rotate(-90deg); 
	-webkit-transform:rotate(-90deg);
	-moz-transform:rotate(-90deg);
	-ms-transform:rotate(-90deg);
	-o-transform:rotate(-90deg);
}
#nav ul li:hover{ 
	width:360px; 
}
#nav ul li a:hover,#nav ul li a:active{
	background: #FF0099;
	background: linear-gradient(to right, #FF33CC, #CC99CC) repeat scroll 0 0 rgba(0, 0, 0, 0);
    text-shadow: 1px 0 0 rgba(0, 0, 0, 0.25);
}
#nav ul li a {
    background: linear-gradient(to right, #FFCCFF, #FF33FF) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-left: 1px solid #000000;
    border-radius: 5px 5px 5px 5px;
    border-right: 1px solid rgba(255, 255, 255, 0.35);
    bottom: -30px;
	color: #FFFFFF;
    display: block;
	height: 26px;
    left: 0;
	padding-right: 25px;
    padding-top: 4px;
	position: absolute;
    text-decoration: none;
	text-shadow: 1px 0 0 #000;
    transform: rotate(-90deg);
	transform-origin: 0 0 0;
    width: 182px;
	z-index: 20;
}


		</style>
	</head>
	
	<body>
			<div id="nav"> 
						<ul>
							<li class="active"> <a href="">Accueil</a> 
								<div> 
									<h3>Accueil</h3> 
									<p>Bienvenue sur le site officiel d'IRISI</p> 
								</div> 
							</li> 
							<li> <a href="">Nouvelles</a>
								<div> 
									<h3>Nouvelles</h3>
									<p> Toutes les nouveautés de département Informatique</p> 
								</div> 
							</li> 
							<li> <a href="">Portefolio</a>
								<div> 
									<h3>Portefolio</h3>
									<p>Nos CVs </p> 
								</div> 
							</li>
							<li> <a href="">Blog</a>
								<div> 
									<h3>blog</h3>
									<p>Tout ce dont vous aurez besoin</p> 
								</div> 
							</li>
							<li> <a href="">Contact</a>
								<div> 
									<h3>Contact</h3>
									<p>Si vous souhaitez nous contacter</p> 
								</div> 
							</li>

						</ul> 
					</div>
					
<div>
<h1>
bonjour monde</h1>
</div>


	</body>
</html><?php }} ?>