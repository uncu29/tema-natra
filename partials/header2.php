<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
    
	<div class="row" style="margin-bottom:3px;">
      <div class="col-lg-12 col-md-12"><br>
        <div class="header_top">
          <div class="header_top_left"style="margin-bottom:10px;">
            <ul class="top_nav">
              <li>
              <img class="tlClogo" src="<?php echo LogoDesa($desa['logo']);?>" width="30" valign="top" alt="<?php echo $desa['nama_desa']?>"/>
              <a href="<?php echo site_url(); ?>first">		<font size="4"><?php
			echo $this->setting->website_title
				. ' ' . ucwords($this->setting->sebutan_desa)
				. (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : '')
				;
		?></font></a></li>
            </ul>
          </div>
          <div class="header_top_right">
        	<form method=get action="<?php echo site_url('first');?>" class="form-inline">
        		<table align="center"><tr><td><input type="text" name="cari" maxlength="50" class="form-control" value="<?php echo $_GET['cari']; ?>" placeholder="Cari Artikel"></td>
        		<td>&nbsp;</td><td><button type="submit" class="btn btn-primary">Cari</button></td></tr></table>
        	</form>	
          </div>
        </div>
        
      </div>
    </div>
	<div class="catgimg2_container" style="margin-bottom:3px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!--
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   
            -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="tlClogo" src="<?php echo base_url()?>desa/themes/natra/images/header.jpg">
                </div>
                <div class="item">
                    <img class="tlClogo" src="<?php echo base_url()?>desa/themes/natra/images/header2.jpeg">
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            $('.tlClogo').bind('contextmenu', function(e) {
                return false;
            }); 
        </script>