<?php 
		session_start();
		include("dhar.php");
		$error="";
		date_default_timezone_set('Africa/Nairobi');

		if (isset($_POST['button'])) {
		$img=$_POST['image'];
		$category=$_POST['dgory'];

		}
	
   		if (isset($_POST['toka'])) {
    		$_SESSION['id']=NULL;
    		setcookie('ume','',time()-1); 
    		header("location:c.php");
    	}
    	
    

	    if (isset($_POST['pea'])) {
	    	$uname=$_POST['uname'];

	    	$pass=$_POST['pass'];
	    	$check=isset($_POST['check']);
				


		if (isset($_POST['rut'])) {
			$gd=$_SESSION['baye'];
			$me=mysqli_real_escape_string($conn,$_POST['me']);
			$ed=mysqli_real_escape_string($conn,$_POST['id']);
			$oid=mysqli_real_escape_string($conn,$_POST['oid']);
			$rp=mysqli_real_escape_string($conn,$_POST['r']);
			$date=mysqli_real_escape_string($conn,$_POST['date']);
			$not="".$sename." commented on your demand.";
			$time=date("H:i:s");
			$ntip="demreply";
			$e=mysqli_query($conn,"INSERT INTO x(pid,seme,id,re,dat) VALUES('$gd','$me','$ed','$rp','$date') ");
			$z=mysqli_query($conn,"INSERT INTO y(oid,cation,Type,si,me,d,t,ni) VALUES('$gd','$not','$ntip','$oid','$me','$date','$time','$eid')");
		}
		


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrapx/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dm.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="bootstrapx/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
      body{
         
         background-color:grey;
         height: 100%;
         padding: 0;
         margin: 0;
         opacity:1;
         font-family:Times;
         font-weight: lighter;
      
      }
      #wrapper{
         background-color:grey;
         height: 100%;
         padding: 0;
         margin: 0;
         opacity:1;
         font-family:Times;
         font-weight: lighter;
      }
		.dform,.dform2{
			width: 540px;
			margin: 0px auto;
			border-radius:4px; 
			background-color:silver;
			padding: 7px;
			box-sizing: border-box;
			position: relative;
			top:100px;
		}
		.demsearchform{
			width: 680px;
			margin: 0px auto;
			border-radius:4px; 
			background-color:silver;
			padding: 7px;
			box-sizing: border-box;
			position: relative;
			top:80px;
		}
		.demsearchbut{
			height:34px; 
			border-radius:4px;
			margin-left:596px;
			position: relative; 
			top: -36px;
			}
		.mdiv{
			width: 680px;
         height: 700px;
         overflow-y: scroll;
			margin: 0 auto;
			border-radius:4px; 
			background-color:grey;
			position: relative;
			top:120px;
		}
		.divmoredem{
			width: 680px;
			margin: 0 auto;
			border-radius:4px; 
			background-color:silver;
			position: relative;
			top:120px;
		}
		.moredem{
         display: none;
			padding:5px;
			background-color: skyblue;
			border-radius: 4px;
			border:none;
			z-index: 8;

		}
		.dform textarea,.dform2 textarea{
			max-width: 100%;
			min-width: 100%;
			margin-left:;
			padding: 5px;
			border-radius: 3px;
			max-height: 100px;
			min-height: 100px;
			box-sizing: border-box;
		}
		.dform input,.dform2 input{
			width:30%;
			height: 25px;
			padding: 4px;

		}
		
		.ddiv,.drdiv{
			position: relative;
			margin-bottom:1px;
			background-color:silver;
			border-radius: 3px;
			padding: 5px;
			width: 100%;
			box-sizing: border-box;
			border-radius: 4px;
			word-wrap:break-word;
         font-size: 17px;
		}
		.date,.rdate{
			font-size:12px;
			font-weight: lighter;
			color: black;
		}
		.demand{
			margin-top: 5px;
		}
		.sender{
			margin-bottom: 6px;
		}
		
		.delete{
			margin-left: 110px;
		}
		.deleter,.deletedem{
			position: absolute;
			right: 5px;
			top: 5px;
			border-radius:4px;
			border:none;
		}
      .rbut,.rbut2{
         border-radius: 3px;
      }
		.repdiv{
			position:fixed;
			top: 120px;
			width:700px;
			margin:0 24%;
			border:
			border-radius:8px;
			box-shadow: 7px;
			background-color:rgba(12,34,64,0.7);
			padding: 4px;
         max-height:490px;
         overflow-y:hidden;
		}
		.xrepdiv{
			width:30px;
			height: 30px;
			border-radius: 360px;
			position: absolute;
			right:8px;
			top: 8px;
			z-index:3; 
		}

		.rdiv{
			padding: 0;
			margin-left: 0px;
			margin:0px; 
			width: 100%; 
         padding: 10px;
         font-weight:;
		}
		.divreply{
			position: relative;
			width: 100%;
			margin-left:; 
			margin-bottom: 10px:;
			 border-radius: 5px;
		}
		.replyform,.replyform2{
			position: relative;
			left: 6%;
		}
		.divrreply{
			width: 94%;
			
			position: relative;
			left: 6%;
			padding:5px;
			background-color:grey;
			margin: 3px;
			box-sizing: border-box;
			border-radius: 4px;
			word-wrap: break-word;
			}
		.rtarea{
			max-width:60%;
			min-width: 60%;
         width: 60%;
			max-height:60px;
			min-height: 60px;
			border-radius: 4px;
			margin-top:5px; 
			margin-bottom: 10px;
			border-radius:4px; 
		}
		.hide{
			display:none;
			background-color: lightblue;
		}
		.dcell{
			height: 20px;
			border-radius: 3px;
		}
		.treply{
			position: absolute;
			left: 60%;
			top: 45px;
			color: silver;
			font-size: 10px;
			
		}
		.commbut{
			width: 15px;
			border-radius: 4px;
         padding: 3px;
		}

		.cell{
			position: absolute;
			left: 55%;
			font-size:11px;
			font-weight: bolder;
		}
      .tea{

		  }
		      /* BIGNAV */
      
      body{
         margin: 0;
         padding:0;
         background-color: grey;
      }
      .bignav{
         background-color:rgba(2,60,20,0.6);
         background-attachment:;
         width:100%;
         height:49px;
         margin: 0;
         padding: 5px;
         position:fixed;
         z-index: 12;
      }
      .titlespan{
         font-family:asar;
      }
      .searchform{
         margin-bottom: 50px;
      }
      .logdiv{
         position:fixed;
         left:;
         top:250px;
         margin:0 32%;
         width:36%;
         padding:8px 0;
         border-radius: 5px;
         background-color:rgba(2,60,20,0.6);
         height: 340px;
         z-index: -1;
         opacity: 0;
         transform: translateY(-50%);
         transition: all .5s,transform .5s .5s,opacity .5s;
         box-sizing: border-box;
         box-shadow:2px;

      }
      .logdiv input{
         border-radius:3px;
      }
      .logdiv .signuplink{
         background-color: green;
         border-radius: 3px;
         padding:5px;
      }
      #logincheck:checked ~ .logdiv{
         transform: translateY(0%);
         opacity: 1;
         transition: all .5s;
         z-index: 10;
       
      }
      .body{
         opacity: 1;
         transition: opacity .5s;
         background-color: grey;
      }
      #logincheck:checked ~ .body{
         opacity: 0.2;
         
      }
      .npic{
      position: relative;
      top: 1px;
      margin-top: 0px;
      margin-left:83%;

      
      } 
      .logoutdiv{
      position: absolute;
      right: ;
      background-color:silver;
      width: 170px;
      height: 122px;
      z-index: 1;
      padding: 0px;
      border-radius: 4px;
      margin-top: 1px;
      display:;
      text-align: center;
      }
      .logoutdiv input{
            position: relative;
            left:;
            top: -1px;
            border-radius: 4px;
            border:none;
            padding: 2px;
      }
      .ul1 li{
         width: 100%;
      }
      .ul1 a{
         border-bottom: 1px;
         color: black;
      }
      #check:checked ~ .logoutdiv{
         height:;
         display: block;
      }
      .logoutdiv li{
      text-decoration: none;
      list-style: none;
      padding: 8px 0px 5px 2px; 
      margin:-40px;
      background-color:silver;
      border-bottom: 1px solid;
      margin-top:0px;
      margin-bottom: 0px;
      width: 170px;
      height: 40px;
      text-align: center;
      }

      .logoutdiv li:hover a{
         color: grey;
      }
      .logoutdiv a:hover{
         text-decoration: none;
      }
      .logoutdiv a{
      display:block;
      color: black;
      font-weight: bolder;

      }
      .logoutdiv input{
            position: relative;
            left:;
            bottom:4px;
      }
      .ul1 li:hover a{
         text-decoration: none;
      }
      .ul1 li:hover{
         background-color: maroon;
         text-decoration: none;
      }
      .ul1 li{
         background-color: brown;
         transition: all .4s;
         padding: 4px;
         box-sizing: border-box;
         text-align: center;
         width: 100%;
         height: 37px;
         margin: 0 0px 0 0px;
         border-bottom:1px solid; 
      }
      li{
         list-style-type: none;
      }
      .ul1 li a{
         margin-bottom: 3px;
         font-family:sans-serif;
      }
      .headiv{
         width:100%; 
         background-color: blue;
         padding-left: 1px;
         height: 60px;
         
         text-align: left;
         
      
      }
      .headiv1{
         position: relative;
         width:70%;
         background-color: green;
         margin-left: 230px;
         border-radius: 4px;
         border: 2px solid;
      }
      .headerli{
         display: inline-block;
         padding-top:15px;
         margin-right:;
         margin-top:;
         background-color: grey;
         width: 80px;
         text-align: center;
         height: 60px;
         margin-left:0px;

      }

      .headerli:hover{
         background-color: beige;
      }
      .headerli a{
         text-decoration: none;
         list-style: none;
         color: black;
         margin-bottom:;
         font-style: bold;

      }
      .headerul2{
         position: relative;
         display:flex;
         justify-content: space-between;
         margin-left: 29%;
         bottom:73px;
         width: 46%;
         border-radius:3px;
         background-color: ;
         padding: 4px;
      }
      .headerul22{
         position: relative;
         display:none;
         justify-content: space-between;
         margin-left: 29%;
         bottom:73px;
         width: 46%;
         border-radius:3px;
         background-color: ;
         padding: 4px;
      }
      .headerli2{
         
         text-decoration: none;
         padding:2px;
         margin:0;
         font-size: bold;

      }
      .headerli2 span{
         color: black;
         font-weight: bold;
      } 
      .not{
         width: 20px;
         height: 20px;
         -webkit-border-radius:360px;
         -moz-border-radius:360px;
         -ms-border-radius: 360px;
         -o-border-radius: 360px;
         border-radius: 360px;

      }
      .quediv{
         margin:0 35%;
         background-color:skyblue;
         width: 40%;
         text-align: center;
         padding: 4px;
         position: absolute;
         border-radius: 3px;
         top: 50px;
         z-index: 3;
      }
      .quediv span{
         word-spacing:2px; 
         letter-spacing:
         color:black;
         font-weight: bold; 
      }
      .quediv3{
         display: none;
         background-color: skyblue;
      }
      #p3,#p2{
         height: 700px;
      }

      .navtitle{
         width:200px;
      }
      .navtitle a{
         font-size: 7px;
      }
      .addcart1{
         padding: 5px;
         background-color: green;
         text-align: center;
         border-radius: 6px;
         height:40px;
         border: hidden;
         text-transform: bold;
      }
      .cartpic{
         width:35px;
         height:35px;
         -webkit-border-radius:360px;
         -moz-border-radius:360px;
         -ms-border-radius: 360px;
         -o-border-radius: 360px;
         border-radius: 360px;
      }
      #cartlink{
         position: relative;
         top: -44px;
         margin-left:93%;
         -webkit-border-radius:360px;
         -moz-border-radius:360px;
         -ms-border-radius: 360px;
         -o-border-radius: 360px;
         border-radius: 360px;
         width:38px;
         height:38px;
         padding: 5px;
         box-sizing: border-box;
         background-color: ;
      }
      .cartcount{
         color: black;
         word-spacing: 10px;
         font-weight: bold;
         position: absolute;
         top:2px;
         right:1px;
         background-color:red; 
         border-radius: 360px;

      }
      .ordercount{
         color: black;
         word-spacing: 10px;
         font-weight: bold;
         background-color:red; 
         border-radius: 360px;
      }
      .hide{
         display: none;
      }
      
      .notbigdiv{
         width: 25%;
         min-width: 25%;
         border: 1px solid;
         border-radius: 3px;
         position: absolute;
         margin-left:41%;
         top:50px;
         z-index: 0;
         background-color:rgba(28,74,60,0.9);
         padding:2px;
         display:inline;
         height:300px;
         overflow-y: scroll;
         transform: translateY(0%);
         transition: opacity .5s .8s,transform .5s .5s;
         transition:all .5s;
      }
      .not1:hover{
         background-color:rgba(28,94,60,1);;
      }
      #notcheck:checked ~ .notbigdiv{ }
      .notdiv{
         padding:5px;
         border-radius:3px;
         width:100%;
         margin: 1px 0; 
      }
      .not1{
         background-color:rgba(28,74,60,0.9);
      }
      .not0{
         background-color:grey;
           color: black;
      }
      .notdiv a{
         color: black;
         font-weight: lighter;
      }
      .nuinputdiv,.nuinputdiv3{
         width:100%; 
         background-color: ; 
         position:relative; 
         margin-left:;
         height: 32px;
      }
      .searchinput{
         height: 32px; 
         border-radius:5px; 
         text-align:center; 
         position: relative;
         bottom: ; 
         width:96%; 
         margin-left:;

      }
      .search3b{
         display: none;
      }
      .return3b{
         display: none;
      }
      .searchinput3{
         height: 32px; 
         border-radius:5px; 
         text-align:center; 
         position: relative;
         bottom:5px; 
         width:96%; 
         margin-left:;
      }
      .searchinputbut{
         height:28px; 
         width:18%; 
         border-radius:4px;  
         position:relative; 
         background-color: none; 
         bottom:29px; 
         margin-left:78%;
      }
      .searchinputbut3{
         height:28px; 
         width:18%; 
         border-radius:4px;  
         position:relative; 
         background-color: none; 
         bottom:34px; 
         margin-left:78%;
      }
      .searchform{
         height:32px; 
         width:45%; 
         position:absolute; 
         z-index: ; 
         bottom:;
         left:29%;
         background-color: ;
         list-style-type:none;
         }
      .searchformb{
         height:35px; 
         width:46%; 
         position:absolute; 
         z-index: ; 
         bottom:;
         left:25%;
         background-color:;
         list-style-type:none;
         display: none;
      }  
      .searchform3{
         height:32px; 
         width:45%; 
         position:absolute; 
         z-index: ; 
         top:12px;
         left:34%;
         background-color: ;
         list-style-type:none;
         }

      .return{
         width:25px; 
         position: absolute; 
         left:96%;
         z-index: 2; 
         bottom:6px;
         height: 20px;
      }
      .return2{
         width:25px; 
         position: absolute; 
         left:96%;
         z-index: 2; 
         bottom:37px;
      }
      .return3{
         width:25px; 
         position: absolute; 
         left:96%;
         z-index: 2; 
         bottom:37px;
         display: none;
      }
      .search3{
         display: none;
         width: 25px;
         height:25px;
         border-radius: 360px;
      }
      .navtitle{
         width: 220px; 
         margin-top: 2px; 
         margin-left:6px;
         background-color: #363d42;
      }
      .navtitle2{
         display: none;
         width:70px;
         height:70px;
         
      }
      .navtitle2 .titleb1{
         font-size: 32px;
      }
      .titlespan{
         background-color: brown; 
         display:inline; 
         float:left;
         font-size: 20px; 
         padding:0px;
         text-align: center; 
         padding-left: 2px; 
         width:400px; 
         max-width:100%; 
         border-radius:4px;
         color: black;
      }
      .titleb1,.titleb2{
         font-size:25px;
      }
      .hidesearch{
         display: none;
      }
      .catspan{
         margin-left:23px;
         position: relative;
         top: 70px;
         display: block;
         cursor:pointer;
         z-index:12;
         
         width:90px;
      }
      .sidebar{
         background-color:none; 
         margin: 0 40px 0 20px; 
         padding-right: 25px; 
         padding-left: 25px;
      }
      #catcheck:checked ~ .sidebar2{
         transform:translateX(0);
         transition: transform .5s;
      }
      .sidebar2{
         width:200px;         
         background-color: silver;
         position: absolute;
         left:0px;
         top:95px;
         z-index: 2;
         border-radius: 3px;
         display: block;
         transform:translateX(-100%);
         transition: transform .5s;
      }
      .sidebar2 ul{
         width:100%;
         background-color:;
         margin: 0px 0px 0px 0px;
         padding: 0px;
         padding-left: 0px;
      }
      .sidebar2 li{
         
         padding: 0px 0px 0px 0px;
         box-sizing: border-box;
         height:30px;
         width: 100%;
         text-align: center;
         list-style: none;
         margin:0px 0px 0px 0px;
         background-color:;

      }
      .sidebar2 li a{
         text-decoration: none;
         display: block;
         line-height: 30px;
         }
      .sidebar2 li:hover{
         background-color:rgba(23,6,3,0.3);
      }
      .extraul{
         position: relative;
         display: block;
         margin-right:35px; 
         margin-top:13px; 
         z-index: 4;
         background-color:pink;
         width:100%;
         font-weight: bold;
      }
      .catreq{
         width: 120px;
      }
      .hidebar{
         display: none;
      }
      .logspan{
         background-color:;
         border-radius: 5px;
         width:50px;
         height:21px;
         padding-top: 0px;
         padding-bottom: 7px;
         margin-left: 3px;
         position: absolute;
         left:90%;
         bottom:33px;
         top:12px;
         cursor: pointer;
         transition: all 1s;
         color: black;
         
      }
      .logspan:hover{
         background-color: rgba(8,54,34,0.4);
      }
            .footernav{
         display: flex;
         position:relative;
         
         flex-direction:;
         justify-content: space-between;
         width:100%;
         height:200px;
         background-color:rgba(2,60,20,0.6);
         padding: 10px;
         clear:both;
         margin-top:100px;
         
      }
      .subsform{
         margin-top:45px;
         background-color:rgba(10,10,40,0.5); 
         padding: 10px;
         height: 80px;
         text-align: center;
         border-radius:5px;
         box-shadow:4px;
         box-sizing: border-box;

      }
      .subs{
         padding: 5px;
         border-radius: 3px;
         text-align: center;
      }
      .subsbut{
         padding: 5px;
         border-radius: 3px;
      }
      .subspan{
         background-color: rgba();
         width: 100%;
         position: relative;
         top:7px;
         color: silver;
         text-align: center;
         word-spacing: 4px;
         letter-spacing:2px;
         font-weight:bolder;
      }
      .footspan{
         font-weight: bolder;
         margin-top:160px;
      }
      .contactul{
         margin-bottom:10px;
          }
      .contactul li{
         font-weight: ;
         color: black;
      }
      .navigationul{
         margin-bottom: 10px;
      }
      .navigationul a{
         font-weight: lighter;
         color: skyblue;
         cursor:pointer;
         display: block;
      }

      .navigationul a:hover{
         color: black;
      }
      @media screen and (max-width: 1200px){
.searchform{
         height:35px; 
         width:47%; 
         position:absolute; 
         z-index: ; 
         bottom:;
         left:30%;
         background-color:;
         list-style-type:none;
         }
      }
@media screen and (max-width: 1190px){
.sidebar2{
            display: block;
         }
         .hidebar{
            display: none;
         }
         .catspan{
            display: inline;
         }
.logdiv{
         position: absolute;
         left:;
         top: 200px;
         margin: 0 29%;
         width: 42%;
         
         }
         .searchdiv{
            width:36%;
         }
      
      }
@media screen and (max-width: 1080px){
.searchform{
         width: 50%;
      }
   }
@media screen and (max-width: 1060px){
      .logoutdiv{
         position: absolute;
         right:30%;
         background-color:silver;
      }
}
@media screen and (max-width: 991px){
.logdiv{
         position: absolute;
         left:;
         top: 200px;
         margin: 0 28%;
         width: 44%;
         
         }
         .searchinput{
         height: 35px; 
         border-radius:5px; 
         text-align:center; 
         position: relative; 
         width:96%; 
         
         }
         .searchinput3{
            height: 28px;
            width: 100%;
         }
         .searchinputbut3{
            height:24px;
            position:relative; 
            bottom:30px; 
            margin-left:82%;  }
         .searchform3{
         height:30px; 
         width:48%; 
         position:absolute; 
         z-index: ; 
         bottom:;
         left:38%;
         background-color: ;
         list-style-type:none;
         }

         .searchinputbut{
         height:31px; 
         width:16%; 
         border-radius:4px;  
         position:relative; 
         background-color: none; 
         bottom:32px;
         margin-left: 80%; 
         
         }
         .searchform{
            width:52%;
            position: absolute;
            left: 28%;

         }
         .headerul2{
            width:50%;
         }
         .notbigdiv{
            width: 30%;
            min-width: 30%;
            position: absolute;
            margin-left:41%;
            top:50px;
         }
         .quediv{
            margin:0 41%;
            width: 40%;
            position: absolute;
            top: 50px;
         }
      }
      @media screen and (max-width: 923px){
         .navigationul{
            display: none;
         }
         .footernav{
            height: 100px
         }
         .footspan{
            margin-top:60px;
         }
         .contactul{
            margin-top: 0px;
         }
         .subsform{
            margin-top:0px;
         }
      }
    @media screen and (max-width: 870px){
        .logdiv{
            position: absolute;
            left:;
            top: 200px;
            margin: 0 26%;
            width: 48%;
         
         }
         .titlespan{
            font-size: 18px; 
            width:400px; 
            max-width:100%; 
}
         .titleb1,.titleb2{
            font-size:22px;
            }
         .navtitle{
               width:200px;
            }
         .searchinput{
               position: relative; 
                
               
         }
         .logspan{
               width:50px;
               position: absolute;
               left:93%;
               bottom:36px;
            }
      }
@media screen and (max-width: 835px){
         .bignav{
         background-attachment: fixed;
         width:100%;
         height:90px;
         margin: 0;
         padding: 5px;
         position: relative;
         z-index: 2;
         }
         .catspan{
            position: absolute;
            top: 140px;
            }
         .sidebar2{
            position: absolute;
            left:103px;
            top:141px;
            }

         .notbigdiv{
            width: 40%;
            min-width: 40%;
            position: absolute;
            margin-left:41%;
            top:91px;
   }
         .headerul2{
         position: relative;
         display: flex;
         justify-content: space-between;
         margin-left: 2%;
         bottom:28px;
         width: 96%;
         border-radius:3px;
         background-color: ;
         padding: 4px;
         }
         .nuinputdiv{
         width:100%; 
         background-color:; 
         position:relative; 
         margin-left:;
      }
      .searchinput{
         height:; 
         border-radius:5px; 
         text-align:center; 
         position:; 
         width:95%;
          
         margin-left:1%;  
      }
      .searchinputbut{
         height:31px; 
         width:14%; 
         border-radius:4px;  
         position:relative; 
         background-color: none;
         left:2%; 
         
         
      }
      .searchform{
         height:35px; 
         width:100%; 
         margin-left:0%;
         position:absolute; 
         z-index: ; 
         top:50px;
         left:0%;
         background-color:;
         list-style-type:none;
         }
      .searchform3{
         width:46%;
         position:absolute; 
         bottom:;
         left:37%;
      }
         .logspan{
               width:50px;
               position: absolute;
               left:91%;
               bottom:36px;
            }
      .quediv,.quediv3{
         margin:0 5%;
         background-color: lightgreen;
         width: 90%;
         text-align: center;
         border-radius:4px;
         padding: 4px;
         position: absolute;
         top:55px;
         z-index: 3;
      }
      

      }
    
      @media screen and (max-width: 450px){
         .headerul2{
               display: none;
            }
         .headerul22{
         position: relative;
         display: flex;
         justify-content: space-between;
         margin-left: 1%;
         bottom:28px;
         width: 98%;
         border-radius:3px;
         background-color: ;
         padding: 4px;
            }
         .searchform{
            display: none;
         }
         .searchformb{
         
         height:30px; 
         width:100%; 
         margin-left:0%;
         margin:0 0 0 0;
         position:absolute; 
         z-index: ; 
         top:92px;
         left:0%;
         background-color:;
         list-style-type:none;
         display: block;
         }
         .searchformb .searchinputbut{
            margin-left: 86%;
            position: absolute;
            bottom:0px;
         }
         .searchinput{
            width: 100%;
            margin-left: 0px;
         }
         .hidesearch{
            display: none;
         }
         .notbigdiv{
            width: 96%;
            min-width: 96%;
            position: absolute;
            margin-left:1%;
         }
         .navtitle{
            display: none;
         }
         .navtitle2{
            display: inline-block;
            position: absolute;
            top: 3px;
         }
         

            .npic{
               margin-left:90px;
               } 
            .logoutdiv{
               position: absolute;
               left:-90px;
               margin-right: 150px;

               }
            #cartlink{
               margin-left:90%;
               }
            .cartcount{
               position: absolute;
               top:2px;
               right:1px;
               }
         .catspan{
            margin-left:40%;
            position: relative;
            top: 70px;
            cursor:pointer;
            display: block;
         }
         .sidebar2{
            width:70%;        
            background-color: silver;
            position: absolute;
            left:15%;
            top:180px;
            z-index: 2;
            border-radius: 3px;
            
         }
.logspan{
               width:50px;
               position: absolute;
               left:82%;
               bottom:10px;
            }
         
      }
@media screen and (max-width: 430px){
.npic{
            margin-left:90px;
               } 
         .logoutdiv{
            position: absolute;
            }
         #cartlink{
            margin-left:87%;
            }
         .cartcount{
            position: absolute;
            top:2px;
            right:1px;
            }
         .row,.panel-body{
            height:620px;
         }
         .logspan{
               width:50px;
               position: absolute;
               left:80%;
               bottom:36px;
            }
      }

      
      @media screen and (max-width: 346px){
.logspan{
               width:50px;
               position: absolute;
               left:73%;
               bottom:36px;
            }
      }
@media screen and (max-width: 330px){
#cartlink{
            margin-left:85%;
            }
         .cartcount{
            position: absolute;
            top:2px;
            right:1px;
            }
}
@media screen and (max-width:310px){
         .footernav{
            display: flex;
            flex-direction: row;
            height: 220px;
            
         }
         .footspan{
            margin:0 auto;
            }
         .contactul{
            text-align: center;
            margin:0 auto;
            margin-left:20px;
         }
         .subsform{
            margin-top:0px;
            width: 100%;
         }
      }
@media screen and (max-width: 300px){
            .logspan{
               width:50px;
               position: absolute;
               left:64%;
               bottom:36px;
            }
            .notbigdiv{
            width: 99%;
            min-width: 96%;
            position: absolute;
            margin:0 auto;
         }
      }
 @media screen and (max-width:293px){
         #cartlink{
            margin-left:81%;
         }
         .logoutdiv{
            display: block;
            position:absolute;
            top:40px;
            margin-right: 30px;
         }
         .catspan{
            margin-left:5%;
            position: relative;
            top: 70px;
         }
         .sidebar2{
            width:90%;        
            position: absolute;
            left:5%;
            top:180px;
         }
 }
  @media screen and (max-width:291px){
         .footernav{
            height:280px;
         }
         .subsform{
            height:130px;
         }
         .subsbut{
            margin-top: 5px;
         }
         }
@media screen and (max-width:261px){
.logspan{
               width:50px;
               position: absolute;
               left:60%;
               bottom:36px;
            }
      }
@media screen and (max-width: 265px){
.quediv2{
            
            position: absolute;
            top: 55px;
         width: 80%;
         margin-left:1%;
         }
         .searchform3{
            position: absolute;
            left:1%;
            
            width: 80%;
         }
         .search3{
            margin-left:86%;
            position: absolute;
            top:55px;
         }
         .return3{
            position: absolute;
            left:95%;
         }
      }
   @media screen and (max-width: 250px){
         .footernav{
            display:flex;
         }
         .contactul{
            position: relative;
            right:30px;
         }
         .footspan{
            position:relative;
            right:30px; 
         }
      }
      @media screen and (max-width: 242px){
         .subs{
            width:100%;
         }
      }
@media screen and (max-width: 210px){
         .logdiv input{
            width: 100%;
         }
         .logspan{
               width:50px;
               position: absolute;
               left:54%;
               bottom:36px;
            }
         .contactul{
            position: relative;
            right:40px;
         }
         .footspan{
            position:relative;
            right:40px; 
         }
         }
                     /* END OF BIGNAV */

@media screen and (max-width: 950px){
	.repdiv{
		position: absolute;
		margin:0 0;
		left: 2%;
	}
}
@media screen and (max-width: 745px){
	.dform,.dform2{
		width: 82%;
		position: relative;
		top:100px;
		}
	.demsearchform{
		width:94%;
		position: relative;
		margin:0 0;
		left:3%;
		top:80px;
		}
	.demsearchbut{
		height:34px; 
		width:13%;
		border-radius:4px;
		margin-left:86%;
		position: relative; 
		top:-38px;
		}
	.bigddiv{
		width: 100%;
	}
	.mdiv{
		width:94%;
		position: relative;
	}
	.repdiv{
		width:94%;
		position: absolute;
	}
			
	.divmoredem{
		width:94%;
	} 
	

	
}
@media screen and (max-width: 295px){
	.cell{
		position: absolute;
		left: 4%;
		top:47px;
		font-size:10px;
		color: silver;
	}
}
@media screen and (max-width: 260px){
	.replyform,.replyform2{
		width:80%;
	}
	.tea{
		width: 100%;
	}

}

	</style>
</head>
<body>

	<script type="text/javascript">
		$(document).ready(function(){
			function tt() {
				$(".cartcount").load("rt.php .count");
			}
			function oc() {
				$(".ordercount").load("rs.php .ocount");
			}
			setInterval(function(){
				oc();
				tt();
			},200);
		});
		</script>
	
			
      <nav id="wrapper">
			<input type="checkbox" name="check" id="check" style="display: none;"></input>
			<nav class="bignav">
				<a href="cm.php"><div class="navtitle" style=""><span class='titlespan' style=""><b class="titleb1" style=""><i></b><b class="titleb2" style="">M</b>erkse</i></span>
   				</div></a>
   				<a href="cm.php"><div class="navtitle2" style=""><span class='titlespan' style=""><b class="titleb1" style=""><i>M</b></span>
   				</div></a>
   				
   				<?php
   				if (logged_in()) {
   					echo"<form action='cmsearch.php' method='POST' class='searchform' style=''>
					<div class='nuinputdiv' style=''>
   					<input class='searchinput' style=''  type='text' name='searchword' placeholder='Search for product or merchant'>
   					<input type='submit' name='search' class='searchinputbut' value='SEARCH' style=''>
   					
   					<img src='img/right.png' class='return' style=''>
   					</div>   						
   					</form>

   					<form action='cmsearch.php' method='POST' class='searchformb hidesearch' style=''>
					<div class='nuinputdiv' style=''>
   					<input class='searchinput' style=''  type='text'name='searchword' placeholder='Search for product or merchant'>
   					<input type='submit' name='search' class='searchinputbut' value='SEARCH' style=''>
   					</div>   						
   					</form>";
   					}
   					else{
   						echo "
   					<form action='cmsearch.php' method='POST' class='searchform3 hidesearch3' style=''>
					<div class='nuinputdiv3' style=''>
   					<input class='searchinput3' style=''  type='text' name='searchword' placeholder='Search for product or merchant'>
   					<input type='submit' name='search' class='searchinputbut3' value='SEARCH' style=''>
					</div>   
						<img src='img/right.png' class='return3' style=''>				
   					</form>

   					<form action='cmsearch.php' method='POST' class='searchform3 hidesearch3b' style=''>
					<div class='nuinputdiv3' style=''>
   					<input class='searchinput3' style=''  type='text' name='searchword' placeholder='Search for product or merchant'>
   					<input type='submit' name='search' class='searchinputbut3' value='SEARCH' style=''>
					</div>   
						<img src='img/right.png' class='return3' style=''>	
						<img src='img/right.png' class='return3b' style=''>			
   					</form>

   							";

   						echo "<label for='logincheck' style='padding-top:;text-align: center;'><span style='' class='logspan'><b>log in</b> </span></label>";
   						}
   				
   					
   					if (logged_in()) {
   						if (logged_in2()) {
   						$d=$_COOKIE['d'];
   						}
   						else{$d=$_SESSION['d'];}

   				
						
   						echo "";
   						$result=mysqli_query($conn,"SELECT pimg FROM ers WHERE d= '$d' ");
		 				$pasi=mysqli_fetch_assoc($result);
						 $imag=$pasi['pimg'];
   					echo "<div class='npic'> <label for='check'><img src='cmimages/pimg/".$imag."' class='profpic' style='border-radius:360px; width:35px; height:35px; margin-top:;'><span class='caret'></span></label>
   						<div class='logoutdiv hide'>
   							<ul>
   								<li><a href='cmshop.php'>My Shop</a></li>
   								<li><a href='cmprofile.php'>My Profile</a></li>
   							</ul>						
   							<form action='cm.php' method='POST' style='margin:5px auto;'>
							<input type='submit' name='logout' value='LoG Out' style='margin:0 auto;'>
							</form>						
   						</div>
   						</div>";
   					echo"
   						<div id='cartlink'><a href='cmcart.php' ><img src='img/cart4.jpg' class='cartpic'><span class='cartcount'></span></a>
   						</div>
   				
   					";
   					
   				echo "<ul class='headerul2'>";
                  $d=$_SESSION['id'];
                  $y=mysqli_query($conn,"SELECT * FROM u WHERE d=$d");
                  $yy=mysqli_fetch_assoc($y);
                  $status=$yy['status'];
                  $status2=$yy['status2'];
                  $r=mysqli_query($conn,"SELECT * FROM no WHERE status=0");
                  $nnum=mysqli_num_rows($r);
               if($status=="1" & $status2=="1"){
                  echo"
                  <li><a class='headerli2 li1 add".$id."' href='ehase.php' style=''><span>Land</span></a></li>";
               }
               
               echo"
                  <li><a class='headerli2 li2' href='demands.php'><span>Listen</span></a></li>
                  <li><a class='headerli2 li3' href='orders.php'><span> orders</span></a><span class='ordercount'></span></li>
                  ";
                  if ($nnum==0) {
                     echo"
                     <li><a href='#' class='headerli2 li4'><label for='notcheck' ><img src='img/botus3.png' class='not'></label></a>
                     </li>";
                  }else{
                     echo"
                     <li class='li4main'><a href='#' class=' headerli2 li4'><label for='notcheck' ><img  src='img/botus3.png' class='not'></label></a><span class='notcount'></span>
                     </li>"; 
                  }
               echo"
                  </li>
                  <li ><a href='#' class=' headerli2 li5'><img  src='img1/search5.png' class='not'></a></li>
                  </ul>";
               echo "<ul class='headerul22'>";
               if ($status=="1" & $status2=="1") {
                  echo"
                  <li><a class='headerli2 li1 add".$id."' href='ehase.php'><img  src='img/upload1.png' class='not'></a></li>";
               }
               echo"
                  <li><a class='headerli2 li2' href='demands.php'><img  src='img/not.png' class='not'></a></li>
                  <li><a class='headerli2 li3' href='orders.php'><img  src='img/ordersr.png' class='not'></a><span class='ordercount'></span></li>
                 ";
                 if ($nnum==0) {
                     echo"
                     <li><a href='#' class='headerli2 li4'><label for='notcheck' ><img src='img/botus3.png' class='not'></label></a>
                     </li>";
                  }else{
                     echo"
                     <li class='li4main'><a href='#' class=' headerli2 li4'><label for='notcheck' ><img  src='img/botus3.png' class='not'></label></a><span class='notcount'></span>
                     </li>"; 
                  }
                 echo"
                  <li ><a href='#' class=' headerli2 li5b'><img  src='img1/search5.png' class='not'></a></li>
                  </ul>";

   						
   						if (logged_in2()) {
   						$id=$_COOKIE['id'];
   						}
   						else{$id=$_SESSION['id'];}
   						$s=mysqli_query($conn,"SELECT * FROM no WHERE rid='$id' ORDER BY id DESC");
   					
   					echo"<div class='notbigdiv hide' style=''>";
   						while ($ss=mysqli_fetch_assoc($s)) {
   							$not=$ss['notification'];
   							$type=$ss['Type'];
   							$sid=$ss['sid'];
   							$sname=$ss['sname'];
   							$date=$ss['dat'];
   							$time=$ss['tim'];
   							$nd=$ss['nid'];
   							$ncat=$ss['ncategory'];
   						   $stat=$ss['status'];
   							if ($type="postcom") {
   							$m=mysqli_query($conn,"SELECT * FROM $ncat WHERE d='$nd'");
   							$mm=mysqli_fetch_assoc($m);
   							$imgname=$mm['image'];
   							$str="image=".$imgname."&category=".$ncat."";
   							echo"<div class='notdiv not".$stat."'>
   						 			<a href='cmdetail.php?".$str."' style='display:block;'><span>".$not."</span></a>
   								</div>";
   							}
   							else if ($type="postcomreply") {
   								$n=mysqli_query($conn,"SELECT FROM cs WHERE d='$nid'");
   								$nn=mysqli_fetch_assoc($n);
   								$tid=$nn['did'];
   								$com=$nn['comment'];
   								$m=mysqli_query($conn,"SELECT FROM $ncat WHERE d='$tid'");
   								$mm=mysqli_fetch_assoc($m);
   								$imgname=$mm['image'];
   							$str="image=".$imgname."&category=".$ncat."";
   							echo"<div class='notdiv not".$stat."'>
   						 			<a href='cmdetail.php?".$str."'><span>".$not."</span><span class='comnot' style='border:1px solid;border-radius:3px; font-size:10px;'>".$com."</span></a>
   								</div>";
   					       		}

   						 	else if ($type="demreply") {
   							$m=mysqli_query($conn,"SELECT FROM ands WHERE d='$nid'");
   							$mm=mysqli_fetch_assoc($m);
   							$dem=$mm['demand'];
   							echo"<div class='notdiv not".$stat."'>
   						 			<a href='cmdemands.php'><span>".$not."</span><span class='demnot' style='border:1px solid;border-radius:3px; font-size:210px;'>".$dem."</span></a>
   								</div>";
   							}
   						 } 
   					echo "</div>";
   						
   						
   						?>

   						<script type="text/javascript">
   							$(document).ready(function(){
					        
								function luvi(){
									$('.logoutdiv').toggleClass('hide');   
								};
								function order(){
									var imageid=$(this).children('.imageid').val();
									var title=$(this).children('.title').val();
									var price=$(this).children('.price').val();
									var dimage=$(this).children('.dimage').val();
									var amount=$(this).children('.amount').val();
									var dcategory=$(this).children('.dcategory').val();
									
									$.post('cmcart.php',{
										imageid:imageid,
										title:title,
										price:price,
										dimage:dimage,
										amount:amount,
										dcategory:dcategory
									});

								};
								function catsub(){
									var catreq=$(this).children('.catreq').val();
									var catreqbut=$(this).children('.catreqbut').val();
									
									$.post('cm.php',{
										catreq:catreq,
										catreqbut:catreqbut
									});
								}	
								$('.searchform').hide();
								function hsearch() {
									$('.headerul2').hide(500);
									$('.searchform').show(500);
									
								}
								function hsearch2() {
									$('.headerul2').show(500);
									$('.searchform').hide(500);
								}
								function hsearchb() {
									
									$('.searchformb').toggleClass('hidesearch');
								}
								function hsearch2b() {
									$('.headerul22').show(500);
									$('.searchformb').hide(500);
								}
								function logblur() {
									$('#logincheck').prop('checked',false);}
								
								$('.searchform3').hide();
								function showsearch3() {
									$('.searchform3').show(500);
									$('.quediv').hide(500);
								}
								function showsearch3b() {
									$('.searchform3').hide(400);
									$('.quediv').show(400);
								}
                        function dis2() {
                           $('.notbigdiv').addClass('hide');
                           } 
                        function dis() {
                           $('.notbigdiv').toggleClass('hide');
                           }
                           
									$('search3').on('click',showsearch3);
									$('.return3').on('click',showsearch3b);
									$('.li5').on('click',hsearch);
									$('.li5b').on('click',hsearchb);
									$('.li5').on('blur',dis2);
                           $('.li4').on('click',dis);
									$('.return').on('click',hsearch2);
									$('.return2').on('click',hsearch2b);
									$('.logspan').on('blur',logblur);
									$('.cartform').on('submit',order);
									$('#catreqform').on('submit',catsub);
									$('.profpic').on('click',luvi);
									
								
				 				});
   						</script>
   						
   						<?php
   						}
   							
   						
   					else{
   					}
   					if (logged_in()) {
   						}else{
   						echo "<div class='quediv quediv1'><a href='cmdemands.php' style='display:block;'><span style='' >Need something from the merchants?</span></a></div>
   						<div class='quediv3'><a href='cmdemands.php' style='display:block;'><span>Request?</span></a></div>
   						<span><img src='img1/search5.png' class='search3' style=''></span>
   						<span><img src='img1/search5.png' class='search3b' style=''></span>
   						";
   						}
   					?>
   						
				</nav>
				<script type="text/javascript">
   						$(document).ready(function(){
					
									
								function catreq() {
									$('.catreqli').toggleClass('hide');
								}
									$('.hidesearch3b').hide();
								function showsearch3() {
									$('.hidesearch3b').show(500);
									$('.quediv').hide(500);
									$('.search3').hide(500);
								}
								function showsearch32() {
									$('.hidesearch3b').show(500);
									$('.quediv3').hide(500);
									$('.search3b').hide(500);
								}
								function showsearch3b() {
									$('.hidesearch3b').hide(500);
									$('.quediv').show(500);
									$('.search3').show(500);
								}
								function showsearch3b2() {
									$('.hidesearch3b').hide(500);
									$('.quediv3').show(500);
									$('.search3b').show(500);
								}
                        function togul() {
                           $(this).children('.extraul').toggleClass('hide');
                           $(this).toggleClass('grey');  
                        }
                           $('.dropli').on('click',togul);
									$('.search3').on('click',showsearch3);
									$('.search3b').on('click',showsearch32);
									$('.return3').on('click',showsearch3b);
									$('.return3b').on('click',showsearch3b2);
									$('.catreqspan').on('click',catreq);
		
				 				});
   						</script>
				<label for="catcheck"><div class="catspan" style=""><span>Categories-> </span></div></label>
            <input type="checkbox" name="catcheck" id="catcheck" style="display:none;"></input> 
            <input type="checkbox" name="notcheck" id="notcheck" style="display:none;"></input>
				<input type="checkbox" name="logincheck" id="logincheck" style="display:none;"></input>

   			<?php 
   	if (logged_in()) {
   					
   			}else{
   				echo"
   				
   		
   	<div class='logdiv' style='text-align: center;'>
	<form style='text-align: center;width:100%; margin-top: 20px;' action='cm.php' method='POST' >
			<div style='text-align: center;background-color: red;'><?php echo $error; ?></div>
			<label for='logincheck'><span style='background-color: green; border-radius: 360px; padding: 5px;'><b>X</b></span></label><br>
			<label for='uname'><b>Username</b> </label><br>
			<input type='text' name='uname' ></input><br><br>
			<label for='pass'><b>Password</b> </label><br>
			<input type='text' name='pass'></input><br><br>
			<input type='checkbox' name='check'></input>
			<label for='check'><span>keep me logged in</span></label><br><br>
			<input type='submit' name='submit' value='Log in'></input><br><br><br>
			

	</form>
		<span class='signupspan'>or  <a href='cmsignup.php' class='signuplink ' style='text-decoration: none; color: black; text-shadow: 2px;'> <b>SIGN UP</b></a></span>
	</div>";} 
	?>


		<div class="sidebar2">
			<ul>
				<li class="dropli"><a href="#">Clothing</a>
                     <ul class="extraul xtra hide">
                        <a href="cmcategory.php?cat=clothing"><li class="cli" value="clothing" lang="1" >Pants</li></a>
                        <li class="cli" value="clothing" lang="2">shirts</li>
                        <li class="cli" value="clothing" lang="2">suitwear</li>
                        <li class="cli" value="clothing" lang="2">jumpers</li>
                        <li class="cli" value="clothing" lang="2">footwear</li>
                     </ul>
            </li>
	    		<li><a href="#">Electronics</a></li>
	    		<li><a href="#">Games</a></li> 
	    		
	    		<li><a href="#">House Interiors</a></li>
	    		<li><a href="#">Novels</a></li>
	   			<li><a href="#">Course books</a></li>
				<li><a href="#">Tickets</a></li>
	   			<li><a href="#">Apartments</a></li>
	   			<li class="catreqspan"><a href="#">Request for category</a></li>
	   			<li class="catreqli hide">
	   				<form onSubmit="return false" id="catreqform">
	   					<input type="text" class="catreq"></input>
	   					<input type="submit" class="catreqbut" value="submit"></input>
	   				</form>
	   			</li>
			</ul>
		</div>


		<?php
		if (logged_in()) {
			
				echo "
					<form action='#' onSubmit='return false' class='demsearchform' style=''>
   						<input class='demsearchword' style='width:100%; height: 40px;border-radius:5px;text-align:center; ' type='text' name='searchword' placeholder='Search for demands..........'>
   						<input type='submit' class='demsearchbut' name='search' value='SEARCH' style=''>
   					</form>";
			}
		if (logged_in()) {
			echo"<form  onSubmit='return false' method='POST' class='dform'>
			<div style='width:100%;border-radius:4px;margin-bottom:2px;background-color:red;text-align:center;'>".$error."</div>
			<textarea class='tarea' placeholder='Enter comment.....'></textarea><br>
			<input type='hidden' class='date' value='".date('m/d/Y H:i:s')."'>
			<input type='hidden' name='rid'>
			<input type='submit' class='commentbut' value='Submit' class='commbut' style='border-radius:3px;'>
				</form>";

		}else{

			echo"<form  onSubmit='return false' method='POST' class='dform2'>
			<div style='width:100%;border-radius:4px;margin-bottom:2px;background-color:red;text-align:center;'>".$error."</div>
			<input  type='text' name='scell' placeholder='Enter your phone no.' class='dcell'></input><br>
			<textarea class='tarea' placeholder='Enter comment.....'></textarea><br>
			<input type='hidden' class='sname' value='External'>
			<input type='hidden' class='sid' value='0'>
			<input type='hidden' class='date' value='".date('m/d/Y H:i:s')."'>
         <input type='submit' class='commentbut' value='Submit' class='commbut' style='border-radius:3px;'>
				</form>";
		}
		
	?>
			<div class="mdiv">

			</div>
			<div class="divmoredem"><button class="moredem">More..</button></div>
			
				</div>
					<div class="repdiv" style="border-radius:4px;">
						
						<span  class="xrepdiv" style="background-color: red;">x</span>
						
						<div class="rdiv"></div>
					</div>

					<script type="text/javascript">
						$(document).ready(function () {
                      $('.footernav').css("margin-top",$(document).height()-950);
							function nana() {
								$(this).siblings('.divreply').toggleClass('hide');

							};
                   
							$('.ddiv').on('click',nana);
							function dem() {
								var tarea=$('.tarea').val();
								var date=$('.date').val();
								var commentbut=$('.commentbut').val();
								$.post("cds.php",{
									tarea:tarea,
									date:date,
									commentbut:commentbut
								});
							}

							function dem2() {
								var tarea=$('.tarea').val();
								var date=$('.date').val();
								var dcell=$('.dcell').val();
								var sname=$('.sname').val();
								var sid=$('.sid').val();			
								var commentbut2=$('.commentbut2').val();
								$.post("cds.php",{
									tarea:tarea,
									date:date,
									dcell:dcell,
									sname:sname,
									sid:sid,
									commentbut2:commentbut2

								});
							}
							
							
							function rep() {
								var sename=$(this).children('.sename').val();
								var date=$(this).children('.date').val();
								var sid=$(this).children('.tid').val();
								var pid=$(this).children('.pid').val();
								var dsid=$(this).children('.dsid').val();
								var reply=$(this).children('.tea').val();
								var rbut=$(this).children('.rbut').val();
								$.post('cms.php',{
									date:date,
									sename:sename,
									sid:sid,
									dsid:dsid,
									pid:pid,
									reply:reply,
									rbut:rbut
								});}
							
							function rep2() {
								var sename=$(this).children('.sename').val();
								var date=$(this).children('.date').val();
								var sid=$(this).children('.tid').val();
								var pid=$(this).children('.pid').val();
								var dsid=$(this).children('.dsid').val();
								var reply=$(this).children('.reply').val();
								var rbut2=$(this).children('.rbut2').val();
								$.post('cds.php',{
									date:dae,
									sename:sename,
									sid:sid,
									dsid:dsid,
									pid:pid,
									reply:reply,
									rbut2:rbut2
								});}

								var searchword="";
							function demsearch() {
								searchword=$(this).children('.demsearchword').val();
								$.post('cds.php',{
									search:searchword
								});
							}
							var demlim=10;
							function moredem() {
								demlim+=5;
								
							}
                     get(searchword);
							
							function get(search) {
								$.post('cds.php',{
									search:search,
									
								},function(data){
									$('.mdiv').html(data);
								});
							}
                     function deldem(){
                        $('.repdiv').hide();
                        $('.de'+did).css('display','none');
                        var did=$(this).children('.deldid').val();
                        var deldembut=$(this).children('.deletedem').val();
                        
                        $.post("cds.php",{
                           did:did,
                           deldembut:deldembut
                        });
                     }
                            $('.deldemform').on('submit',deldem);
							$('.repdiv').hide();
							$('.moredem').on('click',moredem);
							$('.demsearchform').on('submit',demsearch);
							$('.dform').on('submit',dem);
							$('.dform2').on('submit',dem2);
							$('.replyform').on('submit',rep);
							$('.replyform2').on('submit',rep2);
							$('form').on('click',ya);
						});

					</script>
					<script type="text/javascript">
						$(document).ready(function(){
							function de() {
								var rid=$(this).children('.ri').val();
								$.post("cds.php",{
									rid:rid
								});
							};
							
								$('.deleter').on('submit',de);

						});
					</script>
				
						
				
					
					 
		 <footer class="footernav">
         <form class="subsform">
            <input type="text" name="subs" class="subs" placeholder="E-mail....">
            <input type="submit" name="subsbut" class="subsbut"><br>
            <span class="subspan">subscribe for more on <i>m</i></span>
         </form>
         <ul class="contactul">
            <span><h4><b>Contact</b></h3></span>
            <li>Phone:<span>0796921734</span></li>
            <li>Mail:<span>mercheise@cm.com</span></li>
         </ul>
         <ul class="navigationul">
            <span><h4><b>Navigation</b></h3></span>
            <?php
            if (logged_in() || logged_in2()) {
               echo "
               <li><a href='shop.php'>My shop</a></li>
               <li><a href='profile.php'>My info.</a></li>
               <li><a href='additem.php'>Land</a></li>
               <li><a href='orders.php'>Orders received</a></li>
               <li><a href='demands.php'>Demands</a></li>
               ";
             }else{echo "
               <li><a href='demands.php'>Demands</a></li>
               <li><a href='#'>Recommendations</a></li>
               <li><a href='#'>Our policy</a></li>
               <li><a href='#'>Objectives</a></li>
             ";}
             ?>   
         </ul>
         <span class="footspan" style=""><i><img src="img/cright2.png" style="width:13px; height: 13px; border-radius:360px; margin-right:2px; margin-bottom:2px;"></i><i>MERCHeise</i></span>
      </footer>	
						
			<script type="text/javascript" src="jquery.js"></script>	
		</nav>	
</body>
</html>
