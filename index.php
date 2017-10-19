<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Information Retrieval</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>

<div id="wrap">

<div id="header">
<h1><a href="#">INFORMATION RETRIEVAL</a></h1>
</div>

<div id="top"> </div>
<div id="menu">
<ul>
                     <li><a href="?menu=home">Home</a></li>
                     <li>
                        <a href="?menu=upload">Upload</a>
                     </li>
					 <li>
                        <a href="?menu=carikata">Cari Kata</a>
                     </li>
					 <li>
                        <a href="?menu=query">Cari Query</a>
                     </li>
					 <li>
                        <a href="?menu=hitungbobot">Hitung Bobot</a>
                     </li>
					 <li>
                        <a href="?menu=awalquery">Cari Querytf</a>
                     </li>
					 <li>
                        <a href="?menu=panjangvektor">Hitung Vektor</a>
                     </li>
                     <li>
                        <a href="?menu=download">Download</a>
                     </li>
				</ul>
</div>
<section>
         <!-- ASIDE NAV AND CONTENT -->
         <div class="line">
            <div class="box margin-bottom">
               <div class="margin">
                  <!-- CONTENT -->
                  <article class="s-12 m-7 l-8">
                  <?php
				error_reporting(0);
				if($_GET[menu]=='')
					{
					include('home.php');
					}
				else
					{
					include($_GET[menu].'.php');
					}
			?>
				  </article>
                  <!-- ASIDE NAV -->
               </div>
            </div>
         </div>
         <!-- GALLERY CAROUSEL -->
      </section>
<div id="content">
<div class="left"> 
</div>
</div>
</body>
</html>