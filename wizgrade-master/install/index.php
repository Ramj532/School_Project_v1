<?php 

 
 

/*  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 	
	wizGrade V 1.2 (Formerly SDOSMS) is Designed & Developed by Igweze Ebele Mark | https://www.iem.wizgrade.com
	https://www.wizgrade.com
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 	
	Copyright 2014 - 2020 c wizGrade | IGWEZE EBELE MARK 
	
	Licensed under the Apache License, Version 2.0 (the 'License');
	you may not use this file except in compliance with the License.
	You may obtain a copy of the License at

		http://www.apache.org/licenses/LICENSE-2.0

	Unless required by applicable law or agreed to in writing, software
	distributed under the License is distributed on an 'AS IS' BASIS,
	WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	See the License for the specific language governing permissions and
	limitations under the License	
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
	wizGrade School App is Dedicated To Almighty God, My Amazing Parents ENGR Mr & Mrs Igweze Okwudili Godwin, 
	To My Fabulous and Supporting Wife Mrs Igweze Nkiruka Jennifer
	and To My Inestimable Sons Osinachi Michael, Ifechukwu Othniel and Naetochukwu Ryan.  
	
	WEBSITE 					PHONES												EMAILS
	https://www.wizgrade.com	+234 - 80 - 30 716 751, +234 - 80 - 22 000 490 		info@wizgrade.com	
	
	
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Page/Code Explanation~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	This script handle script installation
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

		define('wizGrade', 'igweze');  /* define a check for wrong access of file */	  
		
	  	require_once '../sources/functions/configDir.php';  /* include configuration script */
		
		if  (file_exists($wizGradeInstallDir.'dbQuery.php')) {
			
			unlink($wizGradeInstallDir.'dbQuery.php');  
			
		}	
		
		if  (file_exists($wizGradeInstallDir.'installManger.php')) {
			
			unlink($wizGradeInstallDir.'installManger.php'); 
			
		}
		
		if  (file_exists($wizGradeInstallDir.'wizGrade.sql')) {
			
			unlink($wizGradeInstallDir.'wizGrade.sql');  
			
		}
		
		if  (file_exists($wizGradeInstallDir.'wizGrade.sql_filepointer')) {
			
			unlink($wizGradeInstallDir.'wizGrade.sql_filepointer');  
			
		} 
		


?>
	<!DOCTYPE html>
	<html lang='en'>

	<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />

    <!-- Favicon -->	
	<link rel='apple-touch-icon' sizes='180x180' href='../wizGradeTemplates/favicon/apple-touch-icon.png'>
	<link rel='icon' type='image/png' sizes='32x32' href='../wizGradeTemplates/favicon/favicon-32x32.png'>
	<link rel='icon' type='image/png' sizes='16x16' href='../wizGradeTemplates/favicon/favicon-16x16.png'>
	<link rel='manifest' href='../wizGradeTemplates/favicon/site.webmanifest'>
	<link rel='mask-icon' href='../wizGradeTemplates/favicon/safari-pinned-tab.svg' color='#5bbad5'>
	<meta name='msapplication-TileColor' content='#bfb3d4'>
	<meta name='theme-color' content='#ffffff'>  

	<title>Script Installed</title>


	<!-- stylesheet -->
	
    <link href='../wizGradeTemplates/css/bootstrap.min.css' rel='stylesheet'>
    <link href='../wizGradeTemplates/css/bootstrap-reset-4B0082.css' rel='stylesheet'>   
    <link href='../wizGradeTemplates/assets/font-awesome/css/font-awesome.css' rel='stylesheet' />     
	<link href='../wizGradeTemplates/css/pnotify.custom.css' rel='stylesheet'>
    <link href='../wizGradeTemplates/css/style-4B0082.css' rel='stylesheet'>
    <link href='../wizGradeTemplates/css/style-responsive.css' rel='stylesheet' /> 
	
	<!-- / stylesheet -->
	
	<!-- jquery and javascripts --> 
	 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src='../wizGradeTemplates/js/html5shiv.js'></script>
    <script src='../wizGradeTemplates/js/respond.min.js'></script>
    <![endif]-->
	
	<!-- / jquery and javascripts -->
	
	</head> 

	<!-- body -->
	
	<body class='body-404'>

		<div class='container'>

			<section class='error-wrapper text-center'>

				<i class='icon-404 img-circle'></i> 

				<h1>wizGrade</h1>
				<h2>installation is successfully completed!. 
				<a href='<?php echo $wizGradePortalRoot; ?>'><b>Please click here to login</b></a></h2>
          
			</section>

		</div> 

	</body> 
	
	<!-- / body -->

	</html>

