<?php header('Content-type: text/css'); 
header('Cache-Control: max-age=290304000, public');
ob_start('ob_gzhandler'); ?>
body {
	background-color:black;
	padding:0px;
	margin:0px;
	background-image:url("../images/bg.jpg");
	background-repeat:repeat-x;
}
a {
	color:#ff9900;
}
div#content {
	width:780px;
	/*background-color:#FF4400;*/
	margin: 0 auto;
	position:relative;
	padding:452px 10px 10px;
	color:#FFFFFF;
}
div#content .header {
	position:absolute;
	width:auto;
	height:452px;
	top:0px;
	left:10px;
	right:10px;
	background-image:url("../images/header.jpg");
}
div#content .sideimg {
	width:10px;
	background-image:url("../images/sidebar.png");
	position:absolute;
}
div#content .sideimg.left {
	top:0px;
	left:0px;
	bottom:11px;
}
div#content .sideimg.bottom {
	width:auto;
	height:10px;
	bottom:0px;
	left:11px;
	right:11px;
	z-index:3;
	background-image:url("../images/sidebar_bottom.png");
}
div#content .sideimg.corners.L {
	width:11px;
	height:11px;
	bottom:0px;
	left:0px;
	z-index:2;
	background-image:url("../images/corner.png");
}
div#content .sideimg.corners.R {
	width:11px;
	height:11px;
	bottom:0px;
	right:0px;
	z-index:2;
	background-image:url("../images/corner.png");
}
div#content .sideimg.right {
	top:0px;
	right:0px;
	bottom:11px;
	-moz-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: fliph; /*IE*/
}
div#content .Menu {
	text-align:center;
	height:40px;
	position:relative;
	background-image:url("../images/tempmenu.png");
}
div#content .footer {
	height: 30px;
	text-align:center;
}
div.ModName {
}
div.ModDescription {
}
div.ModPicture {
	margin: 0 0 10px 10px;
	float:left;
}
<?php ob_end_flush(); ?>