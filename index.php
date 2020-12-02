<?php require("libs/fetch_data.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$currDir = dirname(__FILE__);
include("blogadmin/lib.php");
$x = new DataList;
$x->TableTitle = $Translation['homepage'];
$tablesPerRow = 2;
$arrTables = getTableList();
// include("libs/db_connect.php");
?>


<!DOCTYPE html>
<html lang="vn">
<head>
	<title>TaskVN</title>
	<link rel="icon" href="images/logo.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon"/>
	<meta charSet="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="next-head-count" content="20" />
	<link rel="preload" href="_next/static/css/styles.28c242a5.chunk.css" as="style" /	>
	<link rel="stylesheet" href="_next/static/css/styles.28c242a5.chunk.css" />
	<link rel="preload" href="_next/static/css/a5901285.a9fa0008.chunk.css" as="style" />
	<link rel="stylesheet" href="_next/static/css/a5901285.a9fa0008.chunk.css" />
	<link rel="stylesheet" href="_next\static\css\styles.28c242a5.chunk.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<style type="text/css">
		body{
			font-family: 'Muli' !important;
		}
		.offcanvas-header{ display:none; }
		@media (max-width: 992px) {
			.offcanvas-header{ display:block; }
			.navbar-collapse {
				position: fixed;
				top:0; 
				bottom: 0;
				left: 100%;
				width: 100%;
				padding-right: 1rem;
				padding-left: 1rem;
				overflow-y: auto;
				visibility: hidden;
				background-color: black;
				transition: visibility .2s ease-in-out, -webkit-transform .2s ease-in-out;
			}
			.navbar-collapse.show {
				visibility: visible;
				transform: translateX(-100%);
			}
			.show{
				background: white;
			}
			.fonos-text{
				color: #46484a  !important;
			}
		}	
	</style>
	
	<style data-styled="" data-styled-version="5.0.1">
		.bCAqxw{box-sizing:border-box;margin-top:0;margin-bottom:1rem;} data-styled.g2[id="Text__TextWrapper-sc-49k381-0"]{content:"bCAqxw,"} .iZtwpV{box-sizing:border-box;margin-top:0;margin-bottom:1rem;font-weight:bold;color: #6e7379;} data-styled.g3[id="Heading__HeadingWrapper-sc-10v4eax-0"]{content:"iZtwpV,"} .jZhmLy{display:block;max-width:100%;height:auto;box-sizing:border-box;margin:0;} data-styled.g4[id="Image__ImageWrapper-csrlc2-0"]{content:"jZhmLy,"} .cnvkcL{margin-left:auto;margin-right:auto;padding-left:30px;padding-right:30px;} @media (min-width:768px){.cnvkcL{max-width:750px;width:100%;}} @media (min-width:992px){.cnvkcL{max-width:970px;width:100%;}} @media (min-width:1220px){.cnvkcL{max-width:1170px;width:100%;}} @media (max-width:768px){} data-styled.g10[id="style__ContainerWrapper-sc-1gre7ok-0"]{content:"cnvkcL,"} .clQFeW{    background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);padding-top:100px;min-height:802px;overflow:hidden;position:relative;background-image:-moz-linear-gradient( 139deg,rgb(26,49,84) 0%,rgb(148,210,255) 100% ); } @media only screen and (min-width:1201px) and (max-width:1440px){.clQFeW{min-height:100vh;}} @media only screen and (max-width:1099px){.clQFeW{min-height:100%;}} @media only screen and (max-width:480px){.clQFeW{padding-top:90px;}} .clQFeW > div.container{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;min-height:calc(802px - 100px);} @media only screen and (min-width:1201px) and (max-width:1440px){.clQFeW > div.container{min-height:calc(100vh - 100px);margin-top:35px;-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;}} @media only screen and (max-width:1099px){.clQFeW > div.container{min-height:100%;}} @media only screen and (max-width:480px){.clQFeW > div.container{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;}} .clQFeW .bannerBottomShape{position:absolute;right:0;bottom:-2px;} @media only screen and (max-width:999px){.clQFeW .bannerBottomShape{display:none;}} data-styled.g11[id="bannerstyle__BannerWrapper-sc-1t20giu-0"]{content:"clQFeW,"} .hlhwRJ{width:40%;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;margin-top:30px;} @media only screen and (max-width:1199px){.hlhwRJ{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:100%;margin-top:25px;}} .hlhwRJ h1{font-size:46px;line-height:55px;font-weight:700;color: #212529d4;margin-bottom:24px;} @media only screen and (max-width:1366px){.hlhwRJ h1{font-size:32px;line-height:42px;margin-bottom:20px;}} .hlhwRJ p{color:#6e7379;font-weight:500;font-size:18px;line-height:29px;} .hlhwRJ .appstore{height:60px;margin:20px 15px 20px 0;} @media only screen and (max-width:991px){.hlhwRJ .appstore{height:50px;margin:20px 5px 20px 0;}} .hlhwRJ .mascot{height:160px;margin-bottom:30px;} data-styled.g12[id="bannerstyle__BannerContent-sc-1t20giu-1"]{content:"hlhwRJ,"} .eLUFAp{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;} .eLUFAp img{max-width:700px;margin-left:100px;margin-top:50px;} @media only screen and (max-width:1440px){.eLUFAp img{margin-top:0px;}} @media only screen and (max-width:1199px){.eLUFAp{display:none;}} data-styled.g14[id="bannerstyle__BannerImage-sc-1t20giu-3"]{content:"eLUFAp,"} .mGdpT.icon_left{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;} .mGdpT.icon_left .icon__wrapper{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;} .mGdpT.icon_right{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse;} .mGdpT.icon_right .content__wrapper{text-align:right;} .mGdpT.icon_right .icon__wrapper{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;} data-styled.g20[id="featureBlockstyle__FeatureBlockWrapper-sc-1pllarm-0"]{content:"mGdpT,"} .frdiiV{overflow:hidden;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;min-height:100vh;} .frdiiV .sticky-active .navbar{padding:20px 0 21px;background-color:#ffffff;box-shadow:0px 3px 8px 0px rgba(43,83,135,0.08);} @media only screen and (max-width:1366px){.frdiiV .sticky-active .navbar{padding:15px 0 16px;}} .frdiiV .sticky-active .navbar .main-logo{display:none;} .frdiiV .sticky-active .navbar .logo-alt{display:block;} .frdiiV .sticky-active .navbar .mobile-menu{top:72px;} .frdiiV .sticky-active .navbar ul li a{color:#557fa7;font-size:18px;font-weight:400;-webkit-transition:all 0.3s ease;transition:all 0.3s ease;} .frdiiV .sticky-active .navbar ul li a:hover{color:#ff8963;} .frdiiV .sticky-active .navbar ul li.is-current a{color:#ff8963;} .frdiiV .sticky-active .navbar .reusecore__button.menubar{color:#557fa7;} .frdiiV .sticky-active .navbar .reusecore__button.text{color:#557fa7;} .frdiiV .sticky-active .navbar .reusecore__button.text .btn-icon svg{stroke:#557fa7;} @media only screen and (max-width:991px){} data-styled.g24[id="appModernstyle__AppWrapper-sc-3tq9sx-0"]{content:"frdiiV,"} .ivRGZI{-webkit-flex:1 0 auto;-ms-flex:1 0 auto;flex:1 0 auto;width:100%;overflow:hidden;} data-styled.g25[id="appModernstyle__ContentWrapper-sc-3tq9sx-1"]{content:"ivRGZI,"} .gHknyw{max-width:800px;width:100%;margin:0 auto 58px;text-align:center;} @media only screen and (max-width:991px){.gHknyw{margin-bottom:20px;}} .gHknyw h5{font-size:14px;font-weight:700;line-height:24px;margin-bottom:12px;-webkit-letter-spacing:1.5px;-moz-letter-spacing:1.5px;-ms-letter-spacing:1.5px;letter-spacing:1.5px;color:#ff8963;text-transform:uppercase;} @media only screen and (max-width:991px){.gHknyw h5{font-size:13px;margin-bottom:10px;}} .gHknyw h2{font-size:30px;line-height:42px;font-weight:700;color:#0F2137;margin:0;-webkit-letter-spacing:-1px;-moz-letter-spacing:-1px;-ms-letter-spacing:-1px;letter-spacing:-1px;} @media only screen and (max-width:1366px){.gHknyw h2{font-size:28px;-webkit-letter-spacing:-0.7px;-moz-letter-spacing:-0.7px;-ms-letter-spacing:-0.7px;letter-spacing:-0.7px;}} @media only screen and (max-width:991px){.gHknyw h2{font-size:26px;line-height:38px;-webkit-letter-spacing:-0.5px;-moz-letter-spacing:-0.5px;-ms-letter-spacing:-0.5px;letter-spacing:-0.5px;}} data-styled.g26[id="appModernstyle__SectionHeader-sc-3tq9sx-2"]{content:"gHknyw,"} .hsmczZ{padding:105px 0 75px;overflow:hidden;} @media only screen and (max-width:1440px){.hsmczZ{padding:50px 0;}} @media only screen and (max-width:667px){.hsmczZ{padding:45px 0;}} .hsmczZ h3{font-size:20px;color:#ffa659;text-transform:uppercase;} data-styled.g27[id="featuresstyle__SectionWrapper-uvd861-0"]{content:"hsmczZ,"} .iltswj{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;margin:-12px 0 -30px;} .iltswj > div{width:calc(100% / 3 - 34px);margin:38px 0 30px;} @media only screen and (max-width:1366px){.iltswj > div{width:calc(100% / 3 - 30px);}} @media only screen and (max-width:991px){.iltswj > div{margin:0 0 30px;width:calc(100% - 30px);}} @media only screen and (max-width:767px){.iltswj > div{width:calc(100% - 15px);}} @media only screen and (max-width:480px){.iltswj > div{width:100%;margin-top:15px;}} .iltswj .feature__block{-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;text-align:center;} @media only screen and (max-width:991px){.iltswj .feature__block{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}} .iltswj .feature__block .icon__wrapper{position:relative;margin:35px auto;} @media only screen and (max-width:1366px){.iltswj .feature__block .icon__wrapper img{height:72px;}} @media only screen and (max-width:480px){.iltswj .feature__block .icon__wrapper img{height:70px;}} .iltswj .feature__block .icon__wrapper i{opacity:0;visibility:hidden;position:absolute;color:var(--color);-webkit-transition:all 0.5s cubic-bezier(0.75,-0.5,0,1.75);transition:all 0.5s cubic-bezier(0.75,-0.5,0,1.75);} .iltswj .feature__block .icon__wrapper i.plus{top:-8px;left:-15px;-webkit-transform:translate(50px,50px) scale(0.1) rotate(-180deg);-ms-transform:translate(50px,50px) scale(0.1) rotate(-180deg);transform:translate(50px,50px) scale(0.1) rotate(-180deg);} .iltswj .feature__block .icon__wrapper i.circle{top:-8px;right:-15px;-webkit-transform:translate(-50px,50px) scale(0.1) rotate(-180deg);-ms-transform:translate(-50px,50px) scale(0.1) rotate(-180deg);transform:translate(-50px,50px) scale(0.1) rotate(-180deg);} .iltswj .feature__block .icon__wrapper i.star{bottom:-40px;left:calc(50% - 8px);-webkit-transform:translate(0,-50px) scale(0.1) rotate(-180deg);-ms-transform:translate(0,-50px) scale(0.1) rotate(-180deg);transform:translate(0,-50px) scale(0.1) rotate(-180deg);} .iltswj .feature__block .content__wrapper{padding-left:0;margin-top:-5px;} @media only screen and (max-width:1366px){} @media only screen and (max-width:767px){} .iltswj .feature__block .content__wrapper h3{font-size:19px;line-height:30px;font-weight:500;margin-bottom:15px;} @media only screen and (max-width:1366px){.iltswj .feature__block .content__wrapper h3{font-size:18px;margin-bottom:5px;}} .iltswj .feature__block .content__wrapper p{color:rgba(52,61,72,0.8);font-size:18px;line-height:28px;margin:0;} .iltswj .feature__block:hover .icon__wrapper{cursor:pointer;} .iltswj .feature__block:hover .icon__wrapper i{opacity:1;visibility:visible;} .iltswj .feature__block:hover .icon__wrapper i.plus{-webkit-transform:translate(-4px,-4px) scale(1) rotate(180deg);-ms-transform:translate(-4px,-4px) scale(1) rotate(180deg);transform:translate(-4px,-4px) scale(1) rotate(180deg);} .iltswj .feature__block:hover .icon__wrapper i.circle{-webkit-transform:translate(4px,-4px) scale(1) rotate(180deg);-ms-transform:translate(4px,-4px) scale(1) rotate(180deg);transform:translate(4px,-4px) scale(1) rotate(180deg);} .iltswj .feature__block:hover .icon__wrapper i.star{-webkit-transform:translate(0,-4px) scale(1) rotate(180deg);-ms-transform:translate(0,-4px) scale(1) rotate(180deg);transform:translate(0,-4px) scale(1) rotate(180deg);} data-styled.g28[id="featuresstyle__FeatureWrapper-uvd861-1"]{content:"iltswj,"} .bBjLPn{margin:50px 0;padding:75px 0 25px;overflow:hidden;} @media (max-width:1600px){.bBjLPn{padding:25px 0 0px;}} @media only screen and (max-width:1366px){.bBjLPn{padding:30px 0;}} @media only screen and (max-width:991px){.bBjLPn{margin:0 0;}} @media only screen and (max-width:667px){.bBjLPn{padding:30px 0 0;}} data-styled.g29[id="audiobooksstyle__SectionWrapper-b5cho6-0"]{content:"bBjLPn,"} .iBJTKr{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;} @media only screen and (max-width:991px){.iBJTKr{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}} .iBJTKr .image{max-width:calc(100% - 410px);width:350px;margin-right:150px;} @media only screen and (max-width:991px){.iBJTKr .image{max-width:calc(100% - 290px);margin-right:0;-webkit-order:2;-ms-flex-order:2;order:2;}} @media only screen and (max-width:768px){.iBJTKr .image{max-width:100%;margin-bottom:40px;}} .iBJTKr .content{width:410px;} @media only screen and (max-width:991px){.iBJTKr .content{width:100%;}} .iBJTKr .content h2{color:#537ea9;font-size:24px;line-height:44px;margin-bottom:10px;font-weight:700;-webkit-letter-spacing:-1px;-moz-letter-spacing:-1px;-ms-letter-spacing:-1px;letter-spacing:-1px;max-width:400px;} @media only screen and (max-width:1366px){.iBJTKr .content h2{font-size:30px;line-height:42px;margin-bottom:20px;}} @media only screen and (max-width:991px){.iBJTKr .content h2{font-size:26px;line-height:38px;text-align:center;max-width:100%;}} .iBJTKr .content p{font-size:18px;line-height:28px;color:#6e7379;margin-bottom:36px;} @media only screen and (max-width:1366px){.iBJTKr .content p{margin-bottom:30px;}} @media only screen and (max-width:991px){.iBJTKr .content p{text-align:center;}} .iBJTKr .content h3{font-size:32px;margin-top:0;margin-bottom:25px;} @media only screen and (max-width:991px){.iBJTKr .content h3{text-align:center;}} .iBJTKr .reusecore__button{border-radius:5px;} .iBJTKr .reusecore__button:hover{background-color:#3C74FF;} data-styled.g30[id="audiobooksstyle__ContentWrapper-b5cho6-1"]{content:"iBJTKr,"} .fTTzxo{margin:50px 0;padding:75px 0 25px;overflow:hidden;} @media (max-width:1600px){.fTTzxo{padding:25px 0 0px;}} @media only screen and (max-width:1366px){.fTTzxo{padding:30px 0;}} @media only screen and (max-width:991px){.fTTzxo{margin:0 0;}} @media only screen and (max-width:667px){.fTTzxo{padding:30px 0 0;}} data-styled.g31[id="summariesstyle__SectionWrapper-sc-111mx6w-0"]{content:"fTTzxo,"} .cVELCQ{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;} @media only screen and (max-width:991px){.cVELCQ{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}} .cVELCQ .image{width:350px;margin-left:150px;max-width:calc(100% - 410px);} @media only screen and (max-width:991px){.cVELCQ .image{max-width:calc(100% - 290px);margin-left:0;}} @media only screen and (max-width:768px){.cVELCQ .image{max-width:100%;margin-bottom:40px;}} .cVELCQ .content{width:410px;} @media only screen and (max-width:991px){.cVELCQ .content{width:100%;}} .cVELCQ .content h2{color:#6abf97;font-size:24px;margin-bottom:10px;line-height:44px;font-weight:700;-webkit-letter-spacing:-1px;-moz-letter-spacing:-1px;-ms-letter-spacing:-1px;letter-spacing:-1px;max-width:400px;} @media only screen and (max-width:1366px){.cVELCQ .content h2{font-size:30px;line-height:42px;margin-bottom:20px;}} @media only screen and (max-width:991px){.cVELCQ .content h2{font-size:26px;text-align:center;line-height:38px;max-width:100%;}} .cVELCQ .content p{font-size:18px;line-height:28px;color:#6e7379;margin-bottom:36px;} @media only screen and (max-width:1366px){.cVELCQ .content p{margin-bottom:30px;}} @media only screen and (max-width:991px){.cVELCQ .content p{text-align:center;}} .cVELCQ .content h3{font-size:32px;margin-top:0;margin-bottom:25px;} @media only screen and (max-width:991px){.cVELCQ .content h3{text-align:center;}} .cVELCQ .reusecore__button{border-radius:5px;} .cVELCQ .reusecore__button:hover{background-color:#3C74FF;} data-styled.g32[id="summariesstyle__ContentWrapper-sc-111mx6w-1"]{content:"cVELCQ,"} .bvZyUg{margin:50px 0;padding:75px 0 25px;overflow:hidden;} @media (max-width:1600px){.bvZyUg{padding:25px 0 0px;}} @media only screen and (max-width:1366px){.bvZyUg{padding:30px 0;}} @media only screen and (max-width:991px){.bvZyUg{margin:0 0;}} @media only screen and (max-width:667px){.bvZyUg{padding:30px 0 0;}} data-styled.g33[id="meditationsstyle__SectionWrapper-sc-16r7m8s-0"]{content:"bvZyUg,"} .iRZcM{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;} @media only screen and (max-width:991px){.iRZcM{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}} .iRZcM .image{width:350px;margin-left:150px;max-width:calc(100% - 410px);} @media only screen and (max-width:991px){.iRZcM .image{max-width:calc(100% - 290px);margin-left:0;}} @media only screen and (max-width:768px){.iRZcM .image{max-width:100%;margin-bottom:40px;}} .iRZcM .content{width:410px;} @media only screen and (max-width:991px){.iRZcM .content{width:100%;}} .iRZcM .content h2{color:#62c7d3;font-size:24px;margin-bottom:10px;line-height:44px;font-weight:700;-webkit-letter-spacing:-1px;-moz-letter-spacing:-1px;-ms-letter-spacing:-1px;letter-spacing:-1px;max-width:400px;} @media only screen and (max-width:1366px){.iRZcM .content h2{font-size:30px;line-height:42px;margin-bottom:20px;}} @media only screen and (max-width:991px){.iRZcM .content h2{font-size:26px;text-align:center;line-height:38px;max-width:100%;}} .iRZcM .content p{font-size:18px;line-height:28px;color:#6e7379;margin-bottom:36px;} @media only screen and (max-width:1366px){.iRZcM .content p{margin-bottom:30px;}} @media only screen and (max-width:991px){.iRZcM .content p{text-align:center;}} .iRZcM .content h3{font-size:32px;margin-top:0;margin-bottom:25px;} @media only screen and (max-width:991px){.iRZcM .content h3{text-align:center;}} .iRZcM .reusecore__button{border-radius:5px;} .iRZcM .reusecore__button:hover{background-color:#3C74FF;} data-styled.g34[id="meditationsstyle__ContentWrapper-sc-16r7m8s-1"]{content:"iRZcM,"} .eYlLb{margin:50px 0;padding:75px 0 25px;overflow:hidden;} @media (max-width:1600px){.eYlLb{padding:25px 0 0px;}} @media only screen and (max-width:1366px){.eYlLb{padding:30px 0;}} @media only screen and (max-width:991px){.eYlLb{margin:0 0;}} @media only screen and (max-width:667px){.eYlLb{padding:30px 0 0;}} data-styled.g35[id="sleepstoriesstyle__SectionWrapper-go1dz-0"]{content:"eYlLb,"} .fmLMuL{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;} @media only screen and (max-width:991px){.fmLMuL{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}} .fmLMuL .image{max-width:calc(100% - 410px);width:350px;margin-right:150px;} @media only screen and (max-width:991px){.fmLMuL .image{max-width:calc(100% - 290px);margin-right:0;-webkit-order:2;-ms-flex-order:2;order:2;}} @media only screen and (max-width:768px){.fmLMuL .image{max-width:100%;margin-bottom:40px;}} .fmLMuL .content{width:410px;} @media only screen and (max-width:991px){.fmLMuL .content{width:100%;}} .fmLMuL .content h2{color:#525ac7;font-size:24px;line-height:44px;margin-bottom:10px;font-weight:700;-webkit-letter-spacing:-1px;-moz-letter-spacing:-1px;-ms-letter-spacing:-1px;letter-spacing:-1px;max-width:400px;text-transform:uppercase;} @media only screen and (max-width:1366px){.fmLMuL .content h2{font-size:30px;line-height:42px;margin-bottom:20px;}} @media only screen and (max-width:991px){.fmLMuL .content h2{font-size:26px;line-height:38px;text-align:center;max-width:100%;}} .fmLMuL .content p{font-size:18px;line-height:28px;color:#6e7379;margin-bottom:36px;} @media only screen and (max-width:1366px){.fmLMuL .content p{margin-bottom:30px;}} @media only screen and (max-width:991px){.fmLMuL .content p{text-align:center;}} .fmLMuL .content h3{font-size:32px;margin-top:0;margin-bottom:25px;} @media only screen and (max-width:991px){.fmLMuL .content h3{text-align:center;}} .fmLMuL .reusecore__button{border-radius:5px;} .fmLMuL .reusecore__button:hover{background-color:#3C74FF;} data-styled.g36[id="sleepstoriesstyle__ContentWrapper-go1dz-1"]{content:"fmLMuL,"} .ksVQnR{margin:50px 0;padding:75px 0 25px;overflow:hidden;} @media (max-width:1600px){.ksVQnR{padding:25px 0 0px;}} @media only screen and (max-width:1366px){.ksVQnR{padding:30px 0;}} @media only screen and (max-width:991px){.ksVQnR{margin:0 0;}} @media only screen and (max-width:667px){.ksVQnR{padding:30px 0 0;}} data-styled.g37[id="musicstyle__SectionWrapper-sc-1u7oklp-0"]{content:"ksVQnR,"} .khdqIN{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;} @media only screen and (max-width:991px){.khdqIN{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}} .khdqIN .image{max-width:calc(100% - 410px);width:350px;margin-right:150px;} @media only screen and (max-width:991px){.khdqIN .image{max-width:calc(100% - 290px);margin-right:0;-webkit-order:2;-ms-flex-order:2;order:2;}} @media only screen and (max-width:768px){.khdqIN .image{max-width:100%;margin-bottom:40px;}} .khdqIN .content{width:410px;} @media only screen and (max-width:991px){.khdqIN .content{width:100%;}} .khdqIN .content h2{color:#ff9f2b;font-size:24px;line-height:44px;margin-bottom:10px;font-weight:700;-webkit-letter-spacing:-1px;-moz-letter-spacing:-1px;-ms-letter-spacing:-1px;letter-spacing:-1px;max-width:400px;text-transform:uppercase;} @media only screen and (max-width:1366px){.khdqIN .content h2{font-size:30px;line-height:42px;margin-bottom:20px;}} @media only screen and (max-width:991px){.khdqIN .content h2{font-size:26px;line-height:38px;text-align:center;max-width:100%;}} .khdqIN .content p{font-size:18px;line-height:28px;color:#6e7379;margin-bottom:36px;} @media only screen and (max-width:1366px){.khdqIN .content p{margin-bottom:30px;}} @media only screen and (max-width:991px){.khdqIN .content p{text-align:center;}} .khdqIN .content h3{font-size:32px;margin-top:0;margin-bottom:25px;} @media only screen and (max-width:991px){.khdqIN .content h3{text-align:center;}} .khdqIN .reusecore__button{border-radius:5px;} .khdqIN .reusecore__button:hover{background-color:#3C74FF;} data-styled.g38[id="musicstyle__ContentWrapper-sc-1u7oklp-1"]{content:"khdqIN,"} .cryXUa{-webkit-text-decoration:none;text-decoration:none;box-sizing:border-box;margin:0;margin-right:1rem;display:inline-block;} data-styled.g39[id="Link__LinkWrapper-gszw5l-0"]{content:"cryXUa,"} .fPNGHt{padding:50px 0 60px;    background: #333535;} @media only screen and (max-width:1366px){} @media only screen and (max-width:667px){} .fPNGHt .logo img{width:128px;height:auto;} data-styled.g40[id="footerstyle__FooterArea-sc-1a7t3z-0"]{content:"fPNGHt,"} .jFnZKM{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding-top:30px;} @media only screen and (max-width:1366px){.jFnZKM{padding-top:50px;}} .jFnZKM > a{margin-right:0;} data-styled.g42[id="footerstyle__MenuArea-sc-1a7t3z-2"]{content:"jFnZKM,"} .kAIoyq{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:37px;margin-bottom:15px;} @media only screen and (max-width:667px){.kAIoyq{margin-top:30px;}} data-styled.g43[id="footerstyle__Menu-sc-1a7t3z-3"]{content:"kAIoyq,"} .hOMhBK{margin:0 18px;} @media only screen and (max-width:667px){.hOMhBK{margin:5px 15px;}} .hOMhBK a{color:#ffffff;-webkit-transition:all 0.3s ease;transition:all 0.3s ease;} .hOMhBK a:hover{color:rgba(255,255,255,0.7);} data-styled.g44[id="footerstyle__MenuItem-sc-1a7t3z-4"]{content:"hOMhBK,"} .erXaKV{color:white;margin-bottom:0;font-size:14px;text-align:center;max-width:900px;margin-bottom:15px;} .erXaKV a{color:white;} data-styled.g45[id="footerstyle__BestBooks-sc-1a7t3z-5"]{content:"erXaKV,"} .cWyblH{color:rgba(255,255,255,0.5);margin-bottom:0;font-size:14px;text-align:center;} data-styled.g46[id="footerstyle__AddressText-sc-1a7t3z-6"]{content:"cWyblH,"} .bERHqj{margin-top:15px;} .bERHqj img{max-width:200px;} data-styled.g47[id="footerstyle__Gov-sc-1a7t3z-7"]{content:"bERHqj,"} .kVhZLC{color:rgba(255,255,255,0.5);margin-bottom:0;font-size:14px;} data-styled.g48[id="footerstyle__CopyrightText-sc-1a7t3z-8"]{content:"kVhZLC,"} html{box-sizing:border-box;-ms-overflow-style:scrollbar;} *,*::before,*::after{box-sizing:inherit;} *{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;} *:focus{outline:none;} html,html a,h1,h2,h3,h4,h5,h6,a,p,li,dl,th,dt,input,textarea,span,div{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;text-shadow:1px 1px 1px rgba(0,0,0,0.004);} body{margin:0;padding:0;overflow-x:hidden;-webkit-tap-highlight-color:transparent;} ul{margin:0;padding:0;} li{list-style-type:none;} a{-webkit-text-decoration:none;text-decoration:none;font-weight:500;} a:hover{-webkit-text-decoration:none;text-decoration:none;} p{font-weight:500;} .reuseModalHolder{padding:0 !important;} .reuseModalHolder.demo_switcher_modal{border:0 !important;background-color:rgba(16,30,77,0.9) !important;} .reuseModalHolder.demo_switcher_modal .innerRndComponent{border-radius:8px !important;} button.modalCloseBtn{position:fixed !important;z-index:999991 !important;background-color:transparent !important;top:10px !important;right:10px !important;min-width:34px !important;min-height:34px !important;padding:0 !important;} button.modalCloseBtn span.btn-icon{font-size:22px !important;-webkit-transform:rotate(45deg) !important;-ms-transform:rotate(45deg) !important;transform:rotate(45deg) !important;} button.modalCloseBtn.alt{border-radius:50% !important;z-index:999999 !important;padding:0 !important;-webkit-transition:all 0.3s ease !important;transition:all 0.3s ease !important;top:25px !important;right:30px !important;min-width:40px !important;min-height:40px !important;} button.modalCloseBtn.alt span.btn-icon{font-size:20px !important;} button.modalCloseBtn.alt:hover{opacity:0.88 !important;} data-styled.g49[id="sc-global-flKxbi1"]{content:"sc-global-flKxbi1,"} body{font-family:'Quicksand',sans-serif;} .reuseModalParentWrapper,.reuseModalOverlay{z-index:99999;} .reuseModalParentWrapper .reuseModalHolder,.reuseModalOverlay .reuseModalHolder{border:0;} h1,h2,h3,h4,h5,h6{font-family:'Montserrat',sans-serif;} section{position:relative;} .reusecore__button{font-weight:500;} @media only screen and (max-width:667px){.container{width:100%;}} @media only screen and (max-width:667px){.container{padding-left:20px;padding-right:20px;}} @media only screen and (width:320px){.container{padding-left:15px;padding-right:15px;}} data-styled.g50[id="sc-global-hOqvCZ1"]{content:"sc-global-hOqvCZ1,"}
	</style>
</head>
<body>
	<div id="__next">
		<div class="rootWrapper">
			<div class="rootWrapper">
				<div class="appModernstyle__AppWrapper-sc-3tq9sx-0 frdiiV">
					<?php include 'header.php'; ?>
					<div class="appModernstyle__ContentWrapper-sc-3tq9sx-1 ivRGZI">
						<div id="home" class="bannerstyle__BannerWrapper-sc-1t20giu-0 clQFeW">
							<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
								<div class="bannerstyle__BannerContent-sc-1t20giu-1 hlhwRJ">
									<div class="react-reveal">
										<h1 font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">Đồng hành cùng bạn mỗi ngày</h1>
									</div>
									<div class="react-reveal">
										<p class="Text__TextWrapper-sc-49k381-0 bCAqxw">Giúp bạn tập trung hơn và đạt hiệu quả cao cho công việc</p>
									</div>
								</div>
								<div class="bannerstyle__BannerImage-sc-1t20giu-3 eLUFAp">
									<!-- <div class="react-reveal"><img src="_next/static/images/MockupMainFinal%402x-1002427ffeffef5f2a9e8eb2e387830f.png" alt="Banner" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></div> -->
								</div>
							</div> <img class="bannerBottomShape" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMTkiIGhlaWdodD0iMjkzLjA5NCI+PHBhdGggZD0iTTAgMjkzYy4xNy0uMTMxIDEyOC43NCA3IDIyMy04MCA5OS40OC05MS44MjIgOTYtMjEzIDk2LTIxM3YyOTNIMHoiIGZpbGw9IiNmZmYiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg=="
							alt="Bottom Circle" /></div>
							<section id="features" class="featuresstyle__SectionWrapper-uvd861-0 hsmczZ">
								<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
									<header class="appModernstyle__SectionHeader-sc-3tq9sx-2 gHknyw">
										<h3 class="react-reveal">Làm việc hiệu quả hơn </h3>
										<div class="react-reveal">
											<p font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">
											Với TaskVN, bạn cũng có thể ...</p>
										</div>
									</header>
									<div class="featuresstyle__FeatureWrapper-uvd861-1 iltswj">
										<div class="react-reveal">
											<div class="featureBlockstyle__FeatureBlockWrapper-sc-1pllarm-0 mGdpT feature__block icon_left" style="--color:#F55767">
												<div class="featureBlockstyle__IconWrapper-sc-1pllarm-1 gfuhTH icon__wrapper"><i fill="currentColor" style="display:inline-block" class="plus"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M18 10h-4v-4c0-1.104-.896-2-2-2s-2 .896-2 2l.071 4h-4.071c-1.104 0-2 .896-2 2s.896 2 2 2l4.071-.071-.071 4.071c0 1.104.896 2 2 2s2-.896 2-2v-4.071l4 .071c1.104 0 2-.896 2-2s-.896-2-2-2z"></path></svg></i>
													<i
													fill="currentColor" style="display:inline-block" class="circle"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M12 8c2.205 0 4 1.794 4 4s-1.795 4-4 4-4-1.794-4-4 1.795-4 4-4m0-2c-3.314 0-6 2.686-6 6 0 3.312 2.686 6 6 6 3.312 0 6-2.688 6-6 0-3.314-2.688-6-6-6z"></path></svg></i><img
													src="images/giaodien/1.png"
													alt="Không còn lo ngại mỗi khi kẹt xe" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /><i fill="currentColor" style="display:inline-block" class="star"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M16.855 20.966c-.224 0-.443-.05-.646-.146l-.104-.051-4.107-2.343-4.107 2.344-.106.053c-.488.228-1.085.174-1.521-.143-.469-.34-.701-.933-.586-1.509l.957-4.642-1.602-1.457-1.895-1.725-.078-.082c-.375-.396-.509-.97-.34-1.492.173-.524.62-.912 1.16-1.009l.102-.018 4.701-.521 1.946-4.31.06-.11c.262-.473.764-.771 1.309-.771.543 0 1.044.298 1.309.77l.06.112 1.948 4.312 4.701.521.104.017c.539.1.986.486 1.158 1.012.17.521.035 1.098-.34 1.494l-.078.078-3.498 3.184.957 4.632c.113.587-.118 1.178-.59 1.519-.252.182-.556.281-.874.281zm-8.149-6.564c-.039.182-.466 2.246-.845 4.082l3.643-2.077c.307-.175.684-.175.99 0l3.643 2.075-.849-4.104c-.071-.346.045-.705.308-.942l3.1-2.822-4.168-.461c-.351-.039-.654-.26-.801-.584l-1.728-3.821-1.726 3.821c-.146.322-.45.543-.801.584l-4.168.461 3.1 2.822c.272.246.384.617.302.966z"></path></svg></i></div>
													<div
													class="featureBlockstyle__ContentWrapper-sc-1pllarm-2 bVJtlh content__wrapper">
													<h3 font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">
													Xem và sắp xếp danh sách việc cần làm trong ngày</h3>
													<!-- <p class="Text__TextWrapper-sc-49k381-0 bCAqxw">CONTENT CHƯA SUY NGHĨ RA</p>
 -->												</div>
											</div>
										</div>
										<div class="react-reveal">
											<div class="featureBlockstyle__FeatureBlockWrapper-sc-1pllarm-0 mGdpT feature__block icon_left" style="--color:#ff4742">
												<div class="featureBlockstyle__IconWrapper-sc-1pllarm-1 gfuhTH icon__wrapper"><i fill="currentColor" style="display:inline-block" class="plus"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M18 10h-4v-4c0-1.104-.896-2-2-2s-2 .896-2 2l.071 4h-4.071c-1.104 0-2 .896-2 2s.896 2 2 2l4.071-.071-.071 4.071c0 1.104.896 2 2 2s2-.896 2-2v-4.071l4 .071c1.104 0 2-.896 2-2s-.896-2-2-2z"></path></svg></i>
													<i
													fill="currentColor" style="display:inline-block" class="circle"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M12 8c2.205 0 4 1.794 4 4s-1.795 4-4 4-4-1.794-4-4 1.795-4 4-4m0-2c-3.314 0-6 2.686-6 6 0 3.312 2.686 6 6 6 3.312 0 6-2.688 6-6 0-3.314-2.688-6-6-6z"></path></svg></i><img
													src="images/giaodien/2t.png"
													alt="KHÔNG CÒN PHẢI NẤU ĂN MỘT MÌNH" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /><i fill="currentColor" style="display:inline-block" class="star"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M16.855 20.966c-.224 0-.443-.05-.646-.146l-.104-.051-4.107-2.343-4.107 2.344-.106.053c-.488.228-1.085.174-1.521-.143-.469-.34-.701-.933-.586-1.509l.957-4.642-1.602-1.457-1.895-1.725-.078-.082c-.375-.396-.509-.97-.34-1.492.173-.524.62-.912 1.16-1.009l.102-.018 4.701-.521 1.946-4.31.06-.11c.262-.473.764-.771 1.309-.771.543 0 1.044.298 1.309.77l.06.112 1.948 4.312 4.701.521.104.017c.539.1.986.486 1.158 1.012.17.521.035 1.098-.34 1.494l-.078.078-3.498 3.184.957 4.632c.113.587-.118 1.178-.59 1.519-.252.182-.556.281-.874.281zm-8.149-6.564c-.039.182-.466 2.246-.845 4.082l3.643-2.077c.307-.175.684-.175.99 0l3.643 2.075-.849-4.104c-.071-.346.045-.705.308-.942l3.1-2.822-4.168-.461c-.351-.039-.654-.26-.801-.584l-1.728-3.821-1.726 3.821c-.146.322-.45.543-.801.584l-4.168.461 3.1 2.822c.272.246.384.617.302.966z"></path></svg></i></div>
													<div
													class="featureBlockstyle__ContentWrapper-sc-1pllarm-2 bVJtlh content__wrapper">
													<h3 font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">Lưu trữ các tập tin công việc</h3>
													<!-- <p class="Text__TextWrapper-sc-49k381-0 bCAqxw">CONTENT CHƯA SUY NGHĨ RA</p> -->
												</div>
											</div>
										</div>
										<div class="react-reveal">
											<div class="featureBlockstyle__FeatureBlockWrapper-sc-1pllarm-0 mGdpT feature__block icon_left" style="--color:#fb5781">
												<div class="featureBlockstyle__IconWrapper-sc-1pllarm-1 gfuhTH icon__wrapper"><i fill="currentColor" style="display:inline-block" class="plus"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M18 10h-4v-4c0-1.104-.896-2-2-2s-2 .896-2 2l.071 4h-4.071c-1.104 0-2 .896-2 2s.896 2 2 2l4.071-.071-.071 4.071c0 1.104.896 2 2 2s2-.896 2-2v-4.071l4 .071c1.104 0 2-.896 2-2s-.896-2-2-2z"></path></svg></i>
													<i
													fill="currentColor" style="display:inline-block" class="circle"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M12 8c2.205 0 4 1.794 4 4s-1.795 4-4 4-4-1.794-4-4 1.795-4 4-4m0-2c-3.314 0-6 2.686-6 6 0 3.312 2.686 6 6 6 3.312 0 6-2.688 6-6 0-3.314-2.688-6-6-6z"></path></svg></i><img
													src="images/giaodien/3t.png"
													alt="Thư giãn khi đêm về" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /><i fill="currentColor" style="display:inline-block" class="star"><svg fill="currentColor" style="display:inline-block;vertical-align:middle" height="16" width="16" viewBox="0 0 24 24"><path d="M16.855 20.966c-.224 0-.443-.05-.646-.146l-.104-.051-4.107-2.343-4.107 2.344-.106.053c-.488.228-1.085.174-1.521-.143-.469-.34-.701-.933-.586-1.509l.957-4.642-1.602-1.457-1.895-1.725-.078-.082c-.375-.396-.509-.97-.34-1.492.173-.524.62-.912 1.16-1.009l.102-.018 4.701-.521 1.946-4.31.06-.11c.262-.473.764-.771 1.309-.771.543 0 1.044.298 1.309.77l.06.112 1.948 4.312 4.701.521.104.017c.539.1.986.486 1.158 1.012.17.521.035 1.098-.34 1.494l-.078.078-3.498 3.184.957 4.632c.113.587-.118 1.178-.59 1.519-.252.182-.556.281-.874.281zm-8.149-6.564c-.039.182-.466 2.246-.845 4.082l3.643-2.077c.307-.175.684-.175.99 0l3.643 2.075-.849-4.104c-.071-.346.045-.705.308-.942l3.1-2.822-4.168-.461c-.351-.039-.654-.26-.801-.584l-1.728-3.821-1.726 3.821c-.146.322-.45.543-.801.584l-4.168.461 3.1 2.822c.272.246.384.617.302.966z"></path></svg></i></div>
													<div
													class="featureBlockstyle__ContentWrapper-sc-1pllarm-2 bVJtlh content__wrapper">
													<h3 font-weight="bold" class="Heading__HeadingWrapper-sc-10v4eax-0 iZtwpV">Thảo luận trao đổi dễ dàng</h3>
													<!-- <p class="Text__TextWrapper-sc-49k381-0 bCAqxw">CONTENT CHƯA SUY NGHĨ RA</p> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
								<!-- <div id="audiobooks" class="audiobooksstyle__SectionWrapper-b5cho6-0 bBjLPn">
									<div class="react-reveal">
										<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
											<div class="audiobooksstyle__ContentWrapper-b5cho6-1 iBJTKr">
												<div class="image"><img src="_next/static/images/Audiobooks%402x-d737bcb21647ca93070081ed769d76c0.png" alt="Fonos Audiobooks" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></div>
												<div class="content">
													<h2>TỐI ƯU HÓA CÔNG VIỆC</h2>
													<h3>Sắp xếp và thông báo công việc</h3>
													<p class="Text__TextWrapper-sc-49k381-0 bCAqxw">CONTENT CHƯA SUY NGHĨ RA</p>
												</div>
											</div>
										</div>
									</div>
								</div> -->
						<!-- 		<div id="meditations" class="meditationsstyle__SectionWrapper-sc-16r7m8s-0 bvZyUg">
									<div class="react-reveal">
										<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
											<div class="meditationsstyle__ContentWrapper-sc-16r7m8s-1 iRZcM">
												<div class="content">
													<h2>DỄ DÀNG SỬ DỤNG</h2>
													<h3>Giao diện tối giản hóa dễ dàng thao tác</h3>
													<p class="Text__TextWrapper-sc-49k381-0 bCAqxw">CONTENT CHƯA SUY NGHĨ RA</p>
												</div>
												<div class="image"><img src="_next/static/images/Meditation%402x-e948773f363c5f780a4458c37447447f.png" alt="Fonos Meditations" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></div>
											</div>
										</div>
									</div>
								</div> -->
								<!-- <div id="sleep" class="sleepstoriesstyle__SectionWrapper-go1dz-0 eYlLb">
									<div class="react-reveal">
										<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
											<div class="sleepstoriesstyle__ContentWrapper-go1dz-1 fmLMuL">
												<div class="image"><img src="_next/static/images/SleepStory%402x-de358bb5fcdb2b91d5fc3f2bcfc53042.png" alt="Fonos Sleep Stories" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></div>
												<div class="content">
													<h2>BẢO ĐẢM SỨC KHỎE</h2>
													<h3>Tính năng thời điểm vàng</h3>
													<p class="Text__TextWrapper-sc-49k381-0 bCAqxw">CONTENT CHƯA SUY NGHĨ RA</p>
												</div>
											</div>
										</div>
									</div>
								</div> -->
								<!-- <div id="summaries" class="summariesstyle__SectionWrapper-sc-111mx6w-0 fTTzxo">
									<div class="react-reveal">
										<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
											<div class="summariesstyle__ContentWrapper-sc-111mx6w-1 cVELCQ">
												<div class="content">
													<h2>TĂNG HIỆU QUẢ LÀM VIỆC</h2>
													<h3>Hỗ trợ trong học tập và làm việc hiệu quả</h3>
													<p class="Text__TextWrapper-sc-49k381-0 bCAqxw">CONTENT CHƯA SUY NGHĨ RA</p>
												</div>
												<div class="image"><img src="_next/static/images/BookSummaries%402x-5a56cd6ecdc6ea0f7404ea247ec483f3.png" alt="Fonos Book Summaries" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></div>
											</div>
										</div>
									</div>
								</div> -->
								<!-- <div id="music" class="musicstyle__SectionWrapper-sc-1u7oklp-0 ksVQnR">
									<div class="react-reveal">
										<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
											<div class="musicstyle__ContentWrapper-sc-1u7oklp-1 khdqIN">
												<div class="image"><img src="_next/static/images/Music%402x-1c965bc3f078cf1a996c3bfa5b70ad38.png" alt="Fonos Music" class="Image__ImageWrapper-csrlc2-0 jZhmLy" /></div>
												<div class="content">
													<h2>TÍNH NĂNG SẼ CẬP NHẬT SAU</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<footer class="footerstyle__FooterArea-sc-1a7t3z-0 fPNGHt">
								<div class="style__ContainerWrapper-sc-1gre7ok-0 cnvkcL container">
									<div class="footerstyle__MenuArea-sc-1a7t3z-2 jFnZKM">
										<!-- 	<a class="Link__LinkWrapper-gszw5l-0 cryXUa logo" href="index.html" display="inline-block"><img src="_next/static/images/logo-white-a35cd0609b903e2985dcc1bc6221bc6d.png" alt="Fonos" class="Image__ImageWrapper-csrlc2-0 jZhmLy"/></a> -->
										<!-- <logo -->
											<ul class="footerstyle__Menu-sc-1a7t3z-3 kAIoyq">
												<li class="footerstyle__MenuItem-sc-1a7t3z-4 hOMhBK"><a href="index.php">Trang chủ</a></li>
												<li class="footerstyle__MenuItem-sc-1a7t3z-4 hOMhBK"><a href="gioithieu.php">Giới thiệu</a></li>
												<li class="footerstyle__MenuItem-sc-1a7t3z-4 hOMhBK"><a href="https://www.facebook.com/bin2209" target="_blank">Liên hệ</a></li>
												<li class="footerstyle__MenuItem-sc-1a7t3z-4 hOMhBK"><a href="https://www.facebook.com/binazure" target="_blank">Fanpage</a></li>
											</ul>
											<h2 style="    font-family: Muli;
											font-weight: 600;
											color: white;
											font-size: 20px;">TaskVN.com</h2>
											<div class="footerstyle__BestBooks-sc-1a7t3z-5 erXaKV">
												<p class="footerstyle__AddressText-sc-1a7t3z-6 cWyblH">Nguyễn Hải Trường - Binazure Team<br/>Chịu trách nhiệm sản phẩm về Nguyễn Hải Trường.<br/>Địa chỉ: Phường 1 - Thành Phố Đông Hà - Tỉnh Quảng Trị<br/>EMAIL:
													binteam@outlook.com<br/>  PHONE: 0899240332</p>
													<p class="footerstyle__CopyrightText-sc-1a7t3z-8 kVhZLC">Copyright 2020 By NGUYENHAITRUONG</p>
												</div>
											</div>
										</footer>

									</div>
								</div>
							</div>
						</div>
						<script src="js/jquery-2.2.3.min.js"></script>
						<script src="js/jquery.desoslide.js"></script>
						<script nomodule="" src="_next/static/runtime/polyfills-907a7b49cf9724580ae7.js"></script>
						<script type="text/javascript" src="_next\static\chunks\947d55b11c9714556c7cb6e35f131a072a36cbdf.80e82394d6490ff9750b.js"></script>
						<script src="js/menumobile.js"></script>

					</body>
					</html>