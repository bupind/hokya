<header>

    <!-- Top bar -->
    <div class="top-bar">
      <div class="top-info">
        <div class="container">
          <ul class="personal-info">
            <li>
              <p><i class="fa fa-phone"></i><?=$this->pocore()->call->posetting[6]['value'];?></p>
            </li>
            <li>
              <p> <?=$this->pocore()->call->posetting[5]['value'];?></p>
            </li>
          </ul>

          <!-- Right Sec -->
          <div class="right-sec">
            <ul class="social">
              <li><a href="#."><i class="fa fa-facebook"></i></a></li>
              <li><a href="#."><i class="fa fa-twitter"></i></a></li>
              <li><a href="#."><i class="fa fa-google"></i></a></li>
              <li><a href="#."><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
      <div class="sticky">
        <div class="container">

          <!-- LOGO -->
          <div class="logo"> <a href="<?=BASE_URL;?>"><img  class="img-responsive" src="<?=BASE_URL.'/'.DIR_INC;?>/images/logo.png" alt="" ></a> </div>

          <!-- Nav -->
			<?php
				echo $this->menu()->getFrontMenu(WEB_LANG, 'class="nav ownmenu"', 'class="dropdown"', 'class="dropdown"');
			?>
          <!-- Search -->
<!--          <div class="search-icon"> <a href="#."><i class="fa fa-search"></i></a>-->
<!--            <form>-->
<!--              <input class="form-control" type="search" placeholder="Type Here">-->
<!--              <button type="submit"><i class="fa fa-search"></i></button>-->
<!--            </form>-->
<!--          </div>-->
        </div>
      </div>
    </nav>
  </header>
