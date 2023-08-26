<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:final_landing.html');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location:final_landing.html");
  }
?>
<!DOCTYPE html>



<html>
    <head>
	  <link href="http://fonts.cdnfonts.com/css/netflix-font" rel="stylesheet">
        <link rel="stylesheet" href="final_home_styles.css">
    </head>
    <body>
        
        <image class="netflix_logo" src="https://www.freepnglogos.com/uploads/netflix-logo-0.png"></image>
        
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p class="user_info">Logged in as,  <strong><?php echo $_SESSION['username']; ?></strong></p>
	<a href="final_landing.html"><button class="logout">Log Out</button></a>
	<?php endif ?>


	  <ul class="horizontal_navbar">
  	  <li><a class="option1" href="final_home.php">Home</a></li>
  	  <li><a class="option2" href="tv_show1.html">Categories</a></li>
        <li><a class="option3" href="upcoming.html">Upcoming Shows</a></li>
  	  <li><a class="option4" href="search.html">Search</a></li>
	  </ul>
	



        <a href="the_vampire_dairies.html"><image class="slideshow_image" src="https://www.flixicam.com/img/blog/the-vampire-diaries-download.jpg"></image></a>
	  <image class="slideshow_image" src="https://images2.alphacoders.com/108/thumb-1920-1081310.jpg"></image>
        <image class="slideshow_image" src="https://wallpapercave.com/wp/wp8660507.jpg"></image>
        
        <button class="ctrl_button_next" onclick="plusSlides(1)">❯</button>
        <button class="ctrl_button_prev" onclick="plusSlides(-1)">❮</button>
        
        <p class="netflix_originals">Netflix Originals</p>
        <div class="originals">
        
        <image class="slide_scroll" src="https://cdn.vox-cdn.com/thumbor/dsHhxVKLMIshf5fewXxLff57G4I=/1400x0/filters:no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/10331053/US_Vertical_Jessica_JJS1.jpg">
            
        <image class="slide_scroll" src="https://images2.minutemediacdn.com/image/fetch/c_fill,g_auto,f_auto,h_2222,w_1500/https%3A%2F%2Fnetflixlife.com%2Ffiles%2F2022%2F02%2FEN_ST4_Teaser_CreelHouse_Vertical_27x40_RGB.jpg">
            
        <image class="slide_scroll" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKVOpGI5SAKznCpTrjuW6jxk8B1UYtHLToFg&usqp=CAU">
            
        <image class="slide_scroll" src="https://tvline.com/wp-content/uploads/2021/08/lucifer-final-season-6-poster.jpg">
            
        <image class="slide_scroll" src="https://img.reelgood.com/content/show/f398ef3b-5ced-474f-8344-78e26f2c61b1/poster-342.jpg">
            
        <image class="slide_scroll" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXk2DMXL7-Y0RFOBPfpyqNE18MKHaOzMr8VQ&usqp=jpg">
            
        <image class="slide_scroll" src="https://images.wallpapersden.com/image/download/hannah-13-reasons-why-poster_am5qam6UmZqaraWkpJRma2ttrWdnZ2k.jpg">
            
        <image class="slide_scroll" src="https://nerdreactor.com/wp-content/uploads/2021/07/The-Witcher-Season-2-MM2_Main_Vertical_RGB_EN-US_PRE.jpg">
        
        <image class="slide_scroll" src="https://images-na.ssl-images-amazon.com/images/I/91U9VKf-2gL.jpg">

	  <image class="slide_scroll" src="https://image.scoopwhoop.com/q30/s3.scoopwhoop.com/anj2/5e0f100e50758d1bcba7fb1b/4cbdb3cb-9f01-4ab6-bcd1-7e6c138bd4ec.jpg">

        <image class="slide_scroll" src="https://images.ctfassets.net/4cd45et68cgf/RcGuekGhRkHuzYRKu9jTr/b306b8c0e0cddbac04bce6ddb41f2c71/EN-US_SQdGame_Teaser_Coffin_Vertical_27x40_RGB_PRE.jpg">
        
        <image class="slide_scroll" src="https://i.pinimg.com/originals/e4/34/6a/e4346a637eb2fbde218727770bf4d5bd.png">
            
        <image class="slide_scroll" src="https://mlpnk72yciwc.i.optimole.com/cqhiHLc.WqA8~2eefa/w:auto/h:auto/q:75/https://bleedingcool.com/wp-content/uploads/2021/09/EN-US_ARCANE_Character_Vi_Vertical_4x5_RGB.jpeg">
            
        <image class="slide_scroll" src="https://cdn.vox-cdn.com/thumbor/0kuOhVDC6AQtbKGxe-lkFu2bfpk=/0x0:1500x2222/1200x0/filters:focal(0x0:1500x2222):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/23323208/EN_US_ResidentEvil_S1_Teaser_Vial_Vertical_27x40_RGB_PRE.jpg">
            
        <image class="slide_scroll" src="https://media.glamour.com/photos/5f9c82b206769cca5f2262e2/master/w_2560%2Cc_limit/Bridgerton_Vertical_Main_RGB.jpg">
        
        <image class="slide_scroll" src="https://movieposters.ie/wp-content/uploads/2020/08/AWAY_S1_Vertical_MAIN_Embrace_RGB_UK-redux-810x1200.jpg">
        </div>
        

	  <br>
            
        <button class="scroll_left" onclick="plusscroll(1)">❯</button>
        <button class="scroll_right" onclick="plusscroll(-1)">❮</button>


        <p class="netflix_top_10">Top 10 in India Today</p>

        <image class="top10" src="https://top10.netflix.com/images/big_numbers/1.png">
            
        <image class="top10" src="https://top10.netflix.com/images/big_numbers/2.png">
            
        <image class="top10" src="https://top10.netflix.com/images/big_numbers/3.png">
            
        <image class="top10" src="https://top10.netflix.com/images/big_numbers/4.png">
            
        <image class="top10" src="https://top10.netflix.com/images/big_numbers/5.png">
            
        <image class="top10" src="https://top10.netflix.com/images/big_numbers/6.png">
            
        <image class="top10" src="https://top10.netflix.com/images/big_numbers/7.png">
            
        <image class="top10" src="https://top10.netflix.com/images/big_numbers/8.png">
        
        <image class="top10" src="https://top10.netflix.com/images/big_numbers/9.png">

	  <image class="top10" src="https://top10.netflix.com/images/big_numbers/10.png">   
        
	  <div class="top10items">

	  <image class="top10shows1" src="https://cdn.shopify.com/s/files/1/0969/9128/products/PrisonBreak-NetflixTVShowPoster_9a7fafa6-2ec2-491b-b4e2-9133e93ef1c0.jpg?v=1589271909">

        <image class="top10shows2" src="https://sportshub.cbsistatic.com/i/2021/09/26/7ed6165b-be9c-4f65-b8df-e3ccf4066f11/the-sandman-dream.jpg?auto=webp&width=1080&height=1350&crop=0.8:1,smart">
            
        <image class="top10shows3" src="https://www.indiewire.com/wp-content/uploads/2017/09/imperial-dreams-2014.jpg?w=426">
            
        <image class="top10shows4" src="https://www.gamespot.com/a/uploads/original/1562/15626911/3611989-elcck2hxyaaa5mb.jpg">
            
        <image class="top10shows5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSULeB1Ibh5O3LI9Y3YK1f9Ch339qKbCVhgEw&usqp=CAU">
            
        <image class="top10shows6" src="https://pbs.twimg.com/media/CNMQt3IWwAAY2JD.png">
            
        <image class="top10shows7" src="https://m.media-amazon.com/images/M/MV5BNTNhY2JlMmItMGMzZi00ZTM2LTlmNTItZDBkMGVhNGJhYWRhXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg">
            
        <image class="top10shows8" src="https://1.bp.blogspot.com/-nvwyTswILtg/X8iZh6rABXI/AAAAAAAAJw4/Cj4Y4hc_6HwIo_hczXxUD-pGjRrrftpBQCLcBGAsYHQ/s2048/Sweet%2BHome_Vertical_Main_Trio_RGB_EN-GB_APAC_PRE.jpg">
        
        <image class="top10shows9" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRolcNt44R1Jjp4SMK3b6rdfq3WUDz0wTE6Q&usqp=CAU">

	  <image class="top10shows10" src="https://i.pinimg.com/originals/67/5e/bc/675ebc2fd210a8bd5362928a51514960.jpg">   </div>

	  <br>
	
        <p class="popular_on_netflix">Popular on Netflix</p>

	  <a href="C:\Users\pushp\OneDrive\Desktop\NETFLIX CLONE\INFO\the_vampire_dairies.html"><video class="gif1" autoplay muted loop>
			<source src="The-Vampire-Diaries-Season-4-Finale-Katherine-and-Elena-Fight-Each-Other.m4v"	 />
	  </video></a>
	  <a href="the_originals.html"><video class="gif1" autoplay muted loop>
			<source src="Marcel-vs-Klaus_-Elijah-Kol.m4v" />
	  </video></a>
	  <video class="gif1" autoplay muted loop>
			<source src="Hope-mikaelson-VS-Josie-Saltzman-Dark-Josie-Black-magic-legacies-2x15.m4v"	 />
	  </video>
	  <hr class="hr_line">
	  
        <script src="final_home_scripts.js"></script>
	  <script src="final_home_scripts1.js"></script>
    </body>
</html>
