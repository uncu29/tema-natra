<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!-- bawaan tema -->
<meta content="utf-8" http-equiv="encoding">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name='viewport' content='width=device-width, initial-scale=1' />
<meta name='google' content='notranslate' />
<meta name='theme' content='Natra' />
<meta name='designer' content='Ariandi Ryan Kahfi, S.Pd.' />
<meta name='theme:designer' content='Ariandi Ryan Kahfi, S.Pd.' />
<meta name='theme:version' content='3.1' />
<meta name="keywords" content="Website Sistem Informasi Desa <?php echo $desa['nama_desa'];?>" />
<meta property="og:site_name" content="<?php echo $desa['nama_desa'];?>"/>
<meta property="og:type" content="article"/>
<meta property="fb:app_id" content="147912828718">

<title><?php
if ($single_artikel["judul"] == "")
	echo $this->setting->website_title
		. ' ' . ucwords($this->setting->sebutan_desa)
		. (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : '');
else echo $single_artikel["judul"]. ' - ' . ucwords($this->setting->sebutan_desa)
		. (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : '');
?></title>

<link rel="shortcut icon" href="<?php echo base_url("$this->theme_folder/natra/images/favicon.png"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url("$this->theme_folder/natra/assets/css/bootstrap.min.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("$this->theme_folder/natra/assets/css/font-awesome.min.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("$this->theme_folder/natra/assets/css/animate.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("$this->theme_folder/natra/assets/css/slick.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("$this->theme_folder/natra/assets/css/theme.css"); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("$this->theme_folder/natra/assets/css/style.css"); ?>">

<!-- nambah baru lagi 
<link type='text/css' href="<?php echo base_url('Xassets/bootstrap/css/bootstrap.min.css'); ?>" rel='stylesheet' />-->
<link type='text/css' href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel='stylesheet' />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/leaflet.css" />

<?php if(isset($single_artikel)): ?>
    <meta property="og:title" content="<?php echo $single_artikel["judul"];?>"/>
    <meta property="og:url" content="<?php echo base_url()?>index.php/first/artikel/<?php echo $single_artikel['id'];?>"/>
    <meta property="og:image" content="<?php echo base_url()?><?php echo LOKASI_FOTO_ARTIKEL?>sedang_<?php echo $single_artikel['gambar'];?>"/>
    <meta property="og:description" content="<?php echo potong_teks($single_artikel['isi'], 300)?> ..."/>
    <meta name="description" content="<?php echo potong_teks($single_artikel['isi'], 300)?> ..."/>
<?php else: ?>
<meta name="description" content="Website Sistem Informasi <?php echo ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa'];?>"/>
<?php endif; ?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script language='javascript' src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script language='javascript' src="<?php echo base_url('assets/bootstrap/js/bootstrap.js'); ?>"></script>
<script language='javascript' src="<?php echo base_url('assets/js/jquery.cycle2.min.js') ?>"></script>
<script language='javascript' src="<?php echo base_url('assets/js/jquery.cycle2.carousel.js') ?>"></script>
<script src="<?php echo base_url("$this->theme_folder/natra/assets/js/bootstrap.min.js"); ?>"></script> 
<script src="<?php echo base_url()?>assets/js/leaflet.js"></script>

<script type="text/javascript">
window.setTimeout("renderDate()",1);
days = new Array(
"Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"
);
months = new Array(
"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"
);
function renderDate(){
var mydate = new Date();
var year = mydate.getYear();
if (year < 2000) {
if (document.all)
year = "19" + year;
else
year += 1900;
}
var day = mydate.getDay();
var month = mydate.getMonth();
var daym = mydate.getDate();
if (daym < 10)
daym = "0" + daym;
var hours = mydate.getHours();
var minutes = mydate.getMinutes();
var seconds = mydate.getSeconds();

if (hours <= 9)
hours = "0" + hours;
if (minutes <= 9)
minutes = "0" + minutes;
if (seconds <= 9)
seconds = "0" + seconds;
document.getElementById("jam").innerHTML = "<B>"+days[day]+", "+daym+" "+months[month]+" "+year+"</B><br>"+hours+" : "+minutes+" : "+seconds;
setTimeout("renderDate()",1000)
}
</script>
<style type="text/css">
 #jam{
 background: #000000;
 text-align:center;
 text-decoration: blink;
 margin-top:0,5%;
 color: #ffffff
</style><div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2&appId=147912828718&autoLogAppEvents=1"></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url("$this->theme_folder/natra/assets/js/html5shiv.min.js"); ?>"></script>
<script src="<?php echo base_url("$this->theme_folder/natra/assets/js/respond.min.js"); ?>"></script>
<![endif]-->